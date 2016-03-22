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

                // gerer si reconnection --> user ayant pas fini le pick
                var_dump($this->connectedUsersArray);
                $key = array_search($newUser['userId'], array_column($this->connectedUsersArray, 'userId'));
                var_dump($key);
                if ($key != NULL) {
                    // reconnection
                    echo '<br> Enter in NOT NULL';
                    $this->connectedUsersArray[$key]['genId'] = $newUser['genId'];
                } else {
                    // new user
                    echo '<br> Enter in NULL KEY';
                    array_push($this->connectedUsersArray, $newUser);
                }
                var_dump($this->connectedUsersArray);

                break;

            // suite au mapKick de l'un des players
            case "mapKicked":
                $info = array(
                    "playerId" => $parsedMessage[1],
                    "matchId" => $parsedMessage[2]
                );

                $key = array_search($info['matchId'], array_column($this->matchs_playersArray, 'matchId'));
                $duo = $this->matchs_playersArray[$key]['duo'];
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
        echo "Array state : " . count($this->connectedUsers) . " users connected \n";
        echo "\n";
    }

    // delete user from "connectedUsers" array when user disconnects
    protected function kickOfUser($user) {
        if (($key = array_search($user, $this->connectedUsers)) !== false) {
            unset($this->connectedUsers[$key]);
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
