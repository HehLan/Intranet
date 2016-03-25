<?php

require_once('./websockets.php');

/*  dans le shell de apache

  cd htdocs\Intranet\websockets
  php server.php

 */

class CustomServer extends WebSocketServer {

    // stocking object type "array(){ genId : $var, userId : $var }"
    protected $connectedUsersArray;
    // objets type "array(){ matchId : $var, duo : [$user1Id, $user2Id] }"
    protected $match_playersArray;
    

    protected function connected($user) {
        // *************** constructor **************
        if ($this->connectedUsersArray == NULL)
            $this->connectedUsersArray = array();
        if ($this->match_playersArray == NULL)
            $this->match_playersArray = array();
        // ******************************************

        // demander userId et matchId
        $this->send($user, "identificate");
    }

    protected function process($user, $message) {

        // when receive message from client --> socket.send() at client side
        // message received as string like --> "identificate,45,932"
        $parsedMessage = explode(',', $message);

        switch ($parsedMessage[0]) {

            // nouveau joueur demande de s'enregistrer
            case "identificate":
                echo "\n identificate reveived\n";
                $genId = $user;
                $userId = $parsedMessage[1];
                $matchId = $parsedMessage[2];

                $tempKey = NULL;
                foreach ($this->connectedUsersArray as $key => $user) {
                    if ($user['userId'] === $userId) {
                        $tempKey = $key;
                        break;
                    }
                }

                if ($tempKey === NULL) {
                    $this->insertNewUser($genId, $userId);
                } else {
                    // reconnection --> modify user genId
                    $this->connectedUsersArray[$key]['genId'] = $genId;
                }

                $this->insertInMatchPlayersArray($userId, $matchId);
                echo "\n Array state : " . count($this->connectedUsersArray) . " users connected \n";
                break;

            // suite au mapKick de l'un des players
            case "mapKicked":
                echo "\n mapKicked reveived\n";
                $playerId = $parsedMessage[1];
                $matchId = $parsedMessage[2];
                $opponentSocketId = $this->findOpponentGenId($matchId, $playerId);
                $this->send($opponentSocketId, "mapKicked");
                break;

            case "mapsTerminated":
                echo "\n mapsTerminated reveived\n";
                $playerId = $parsedMessage[1];
                $matchId = $parsedMessage[2];
                $opponentSocketId = $this->findOpponentGenId($matchId, $playerId);
                $this->send($opponentSocketId, "mapsTerminated");
                break;

            case "heroKicked":
                echo "\n heroKicked reveived\n";
                $playerId = $parsedMessage[1];
                $matchId = $parsedMessage[2];
                $opponentSocketId = $this->findOpponentGenId($matchId, $playerId);
                $this->send($opponentSocketId, "heroKicked");
                break;

            case "heroesTerminated":
                echo "\n heroesTerminated reveived\n";
                $playerId = $parsedMessage[1];
                $matchId = $parsedMessage[2];
                $opponentSocketId = $this->findOpponentGenId($matchId, $playerId);
                $this->send($opponentSocketId, "heroesTerminated");
                break;

            case "pickTerminated":
                echo "\n pickTerminated reveived\n";
                // supprimer les données des arrays
                $playerId = $parsedMessage[1];
                $matchId = $parsedMessage[2];

                $player1 = '';
                $player2 = '';
                
                echo "pickTerminated received / matchId=".$matchId;
                // rechercher les ids des players pour ce math
                foreach ($this->match_playersArray as $value) {
                    if($value['matchId'] === $matchId ){
                        // parser le duo et recuperer les ids
                        $player1 = $value['duo'][0];
                        $player2 = $value['duo'][1];
                        echo "\n p1=".$player1;
                        echo "\n p2=".$player2;
                        break;;
                    }
                }
                
                echo "\n berore cleaning matchs\n";
                echo count($this->match_playersArray);
                
                // supprimer les info concernant match
                foreach ($this->match_playersArray as $key => $match) {
                    if($match['matchId'] === $matchId){
                        unset($this->match_playersArray[$key]);
                        break;
                    }
                }
                
                echo "\n after cleaning matchs\n";
                echo count($this->match_playersArray);
                
                echo "\n berore cleaning players\n";
                echo count($this->connectedUsersArray);
                
                foreach ($this->connectedUsersArray as $key => $player) {
                    if($player['userId'] === $player1 || $player['userId'] === $player2){
                        unset($this->connectedUsersArray[$key]);
                    }
                }
                
                echo "\nplayers deleted\n";
                echo count($this->connectedUsersArray);
                
                break;

            default:
                break;
        }
    }

    protected function closed($user) {
        echo "\n closeConnection reveived\n";
        echo "\n Stats : " . count($this->connectedUsersArray) . " users connected \n";
    }
    
    
    
    

    // ******************************************************
    // ********************* FUNCTIONS **********************
    // ******************************************************

    protected function insertNewUser($genId, $userId) {
        $newUser = array(
            "genId" => $genId,
            "userId" => $userId
        );
        array_push($this->connectedUsersArray, $newUser);
    }

    protected function insertInMatchPlayersArray($userId, $matchId) {
        $tempKey = NULL;
        foreach ($this->match_playersArray as $key => $obj) {
            if ($obj['matchId'] === $matchId) {
                $tempKey = $key;
                break;
            }
        }

//        echo "match_playersArray : \n";
//        var_dump($this->match_playersArray);
//        echo "\nkey ";
//        var_dump($tempKey);
        // si pas de ref
        if ($tempKey === NULL) {
            // create new obj
//            echo "\n create new obj \n";
            $obj = array(
                "matchId" => $matchId,
                "duo" => [$userId]
            );
            // insert new obj
            array_push($this->match_playersArray, $obj);
        } else {
            // c'est que le match existe déjà
            // c'est que le binome de pick a été le premier à init l'objet
            // du coup on insert que notre id dans ce match
//            echo "edit obj \n";
//            echo "duo: \n";
//            var_dump($this->match_playersArray[$tempKey]['duo']);

            if (!in_array($userId, $this->match_playersArray[$tempKey]['duo'])) {
                array_push($this->match_playersArray[$tempKey]['duo'], $userId);
            }
        }

//        echo "match_playersArray after insertion : \n";
//        var_dump($this->match_playersArray);
    }

    protected function findOpponentGenId($matchId, $playerId) {
        // touver le key de l'objet qui nous interesse 
        $tempKey = NULL;
        foreach ($this->match_playersArray as $key => $obj) {
            if ($obj['matchId'] === $matchId) {
                $tempKey = $key;
                break;
            }
        }

//        echo "temp key\n"; 
//        var_dump($tempKey);
//        echo "\nmatchs_players: \n";
//        var_dump($this->match_playersArray);
//        echo "\n duo : \n";
        $duo = $this->match_playersArray[$tempKey]['duo'];
//        var_dump($duo);

        $opponentId = '';
        foreach ($duo as $key => $userId) {
            // trouver l'opponentId
            if ($userId != $playerId) {
                $opponentId = $userId;
            }
        }

//       echo "\nopponentId : " . $opponentId;
        // aller chercher son genId
        $opponentSocketId = '';
        foreach ($this->connectedUsersArray as $key => $value) {
            if ($value['userId'] === $opponentId) {
                $opponentSocketId = $value['genId'];
//                echo "\ngenId\n";
//                var_dump($opponentSocketId);
                break;
            }
        }

        return $opponentSocketId;
    }
}






// launch websockets server
$server = new CustomServer("127.0.0.1", "9000");
try {
    $server->run();
} catch (Exception $e) {
    $server->stdout($e->getMessage());
}
