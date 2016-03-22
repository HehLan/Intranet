<?php

require_once('./websockets.php');
/*

  cd htdocs\Intranet\websockets
  php server.php

 */

class CustomServer extends WebSocketServer {

    // array qui continet les objets de type User(genId, userId, matchId)
    // stocking object type { generatedId : $var, databaseId : $var, matchId : $var}
    protected $connectedUsersArray;
    // array qui contient les objets de type Obj(matchId, [palyer1_Id, player2_Id])
    // objets type { matchId : $var, duo : { databaseUserId1 : $var, databaseUserId2 : $var }
    protected $matchs_playersArray;

    protected function process($user, $message) {
        
        // when receive message from client --> socket.send() at client side
        // message received as string like --> "identificate,45,932"
        $parsedMessage = explode(',', $message);

        switch ($parsedMessage[0]) {

            // nouveau joueur demande de s'enregistrer
            case "identificate":
                
                $newUser = array(
                    "genId" => $user,
                    "userId" => $parsedMessage[1],
                    "matchId" => $parsedMessage[2]
                );

                // touver le key de l'objet qui nous interesse 
                $tempKey = NULL;
                foreach ($this->connectedUsersArray as $key => $user) {
                    if ($user['userId'] === $newUser['userId']) {
                        $tempKey = $key;
                        break;
                    }
                }
                
                // gerer si reconnection --> user ayant pas fini le pick
                if ($tempKey === NULL) {
                    //insert new user
                    array_push($this->connectedUsersArray, $newUser);
                } else {
                    // reconnection --> modify user genId
                    $this->connectedUsersArray[$key]['genId'] = $newUser['genId'];
                }
                
                break;

            // suite au mapKick de l'un des players
            case "mapKicked":
                
                $info = array(
                    "playerId" => $parsedMessage[1],
                    "matchId" => $parsedMessage[2]
                );
                
                // touver le key de l'objet qui nous interesse 
                $tempKey = NULL;
                foreach ($this->matchs_playersArray as $key => $object) {
                    if ($object['matchId'] === $newUser['matchId']) {
                        $tempKey = $key;
                        break;
                    }
                }

                echo 'matchs_players: \n';
                var_dump($this->matchs_playersArray);
                echo '\n duo : \n';
                $duo = $this->matchs_playersArray[$tempKey]['duo'];
                foreach ($duo as $key => $userId) {
                    // trouver l'opponentId
                    if ($userId != $info['playerId']) {
                        // aller chercher son genId et le notifier
                        $key = array_search($userId, array_column($this->connectedUsersArray, 'userId'));
                        $opponentSocketId = $this->connectedUsersArray[$key]['genId'];
                        $this->send($opponentSocketId, "mapKicked");
                    }
                }

                break;

            case "mapsTerminated":
                // TODO
                break;

            case "onclose":
                break;

            default:
                break;
        }

        // respond to all clients in server memory
//        foreach ($this->connectedUsers as $user) {
//            // send to selected user
//            $this->send($user, $answer);
//        }
    }

    protected function connected($user) {
        // *************** constructor **************
        if ($this->connectedUsersArray == NULL)
            $this->connectedUsersArray = array();
        if ($this->matchs_playersArray == NULL)
            $this->matchs_playersArray = array();

        // demander userId et matchId
        $this->send($user, "identificate");
    }

    protected function closed($user) {

        $this->kickOfUser($user);

        // log on server side
        echo "\n";
        echo "Array state : " . count($this->connectedUsersArray) . " users connected \n";
        echo "$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ DISCONNECT !!!!!!\n\n\n";
    }

    // delete user from "connectedUsers" array when user disconnects
    protected function kickOfUser($user) {
        if (($key = array_search($user, $this->connectedUsersArray)) !== false) {
            unset($this->connectedUsersArray[$key]);
        }
        echo "\n";
        echo "User disconnected \n";
    }

}

// launch websockets server
$server = new CustomServer("127.0.0.1", "9000");
try {
    $server->run();
} catch (Exception $e) {
    $server->stdout($e->getMessage());
}
