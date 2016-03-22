<?php

require_once('./websockets.php');
/*

  cd htdocs\Intranet\websockets
  php server.php

 */

class CustomServer extends WebSocketServer {

    // array qui continet les objets de type User(genId, userId)
    // stocking object type { genId : $var, userId : $var }
    protected $connectedUsersArray;
    // array qui contient les objets de type Obj(matchId, [palyer1_Id, player2_Id])
    // objets type { matchId : $var, duo : [$user1Id, $user2Id] }
    protected $match_playersArray;

    protected function connected($user) {
        // *************** constructor **************
        if ($this->connectedUsersArray == NULL)
            $this->connectedUsersArray = array();
        if ($this->match_playersArray == NULL)
            $this->match_playersArray = array();

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

                break;

            // suite au mapKick de l'un des players
            case "mapKicked":
                $playerId = $parsedMessage[1];
                $matchId = $parsedMessage[2];

                // touver le key de l'objet qui nous interesse 
                $tempKey = NULL;
                foreach ($this->match_playersArray as $key => $obj) {
                    if ($obj['matchId'] === $matchId) {
                        $tempKey = $key;
                        break;
                    }
                }

//                echo "temp key\n"; 
//                var_dump($tempKey);
//                echo "\nmatchs_players: \n";
//                var_dump($this->match_playersArray);
//                echo "\n duo : \n";
                $duo = $this->match_playersArray[$tempKey]['duo'];
//                var_dump($duo);

                $opponentId = '';
                foreach ($duo as $key => $userId) {
                    // trouver l'opponentId
                    if ($userId != $playerId) {
                        $opponentId = $userId;
                    }
                }

//                echo "\nopponentId : " . $opponentId;

                // aller chercher son genId
                $opponentSocketId = '';
                foreach ($this->connectedUsersArray as $key => $value) {
                    if($value['userId'] === $opponentId){
                        $opponentSocketId = $value['genId'];
//                        echo "\ngenId\n";
//                        var_dump($opponentSocketId);
                        break;
                    }
                }
                
                // notifier
                $this->send($opponentSocketId, "mapKicked");

                break;

            case "mapsTerminated":
                echo "Maps terminated received!!!";
                // TODO
                break;

            case "onclose":
                break;

            default:
                break;
        }
    }

    protected function closed($user) {
        $this->kickUserOut($user);
        // log on server side
        echo "\n Array state : " . count($this->connectedUsersArray) . " users connected \n";
        echo "$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ DISCONNECT !!!!!!\n\n\n";
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

    // delete user from "connectedUsers" array when user disconnects
    protected function kickUserOut($user) {
        if (($key = array_search($user, $this->connectedUsersArray)) !== false) {
            unset($this->connectedUsersArray[$key]);
        }
        echo "\n";
        echo "User disconnected \n";
    }

}

/*
  cd htdocs\Intranet\websockets
  php server.php
 */

// launch websockets server
$server = new CustomServer("127.0.0.1", "9000");
try {
    $server->run();
} catch (Exception $e) {
    $server->stdout($e->getMessage());
}
