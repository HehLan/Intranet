<?php

require_once('./websockets.php');
/*

  cd htdocs\Intranet\websockets
  php server.php

 */

class CustomServer extends WebSocketServer {

    // array qui continet les objets de type User(genId, userId, matchId)
    protected $connectedUsers;
    // array qui contient les objets de type Obj(matchId, palyer1_Id, player2_Id)
    protected $matchs_players;

    protected function process($user, $message) {
        // when receive message from client --> socket.send() at client side
        // message received as string like --> "identificate,45,932"
        $parsedMessage = explode(',', $message);

        switch ($parsedMessage[0]) {
            case "identificate":
                $newUser = array(
                    "dynamicId" => $user,
                    "userId" => $parsedMessage[1],
                    "matchId" => $parsedMessage[2]
                );

                foreach ($this->connectedUsers as $u) {
                    if ($u['userId'] == $newUser['userId'] && $u['matchId'] == $newUser['matchId']) {
                        $u['dynamicId'] = $newUser['dynamicId'];
                    }
                }

                // quand un nouveau user se connecte
                if (!in_array($user, $this->connectedUsers)) {

                    array_push($this->connectedUsers, $user);
                }

                break;
                
            case "mapKicked":
                $info = array(
                    "playerId" => $parsedMessage[1],
                    "matchId" => $parsedMessage[2]
                );
                $key = array_search('matchId', $this->matchs_players);
                
                
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
        if ($this->connectedUsers == NULL)
            $this->connectedUsers = array();
        if ($this->matchs_players == NULL)
            $this->matchs_players = array();

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
