#!/usr/bin/env php
<?php
require_once('./websockets.php');

class CustomServer extends WebSocketServer {

    protected $connectedUsers;

    protected function process($user, $message) {
        $answer = "Your message was : " . $message;

        // respond to all clients in server memory
        foreach ($this->connectedUsers as $u) {
            // send to selected user
            $this->send($u, $answer);
        }
    }

    // called when new user is connected
    // here we initialise all values of the class, it's a kind of constructor
    protected function connected($user) {

        // *************** constructor **************
        //init usersArray
        if ($this->connectedUsers == NULL)
            $this->connectedUsers = array();
        // ******************************************

        if (!in_array($user, $this->connectedUsers)) {
            array_push($this->connectedUsers, $user);
        }

        // log on server side
        echo "\n";
        echo "User connected. \n";
        echo "Array state :" . count($this->connectedUsers) . " users connected";
        echo "\n";
    }

    // called when user closes the connection
    protected function closed($user) {

        $this->kickOfUser($user);

        // log on server side
        echo "\n";
        echo "Array state :" . count($this->connectedUsers) . " users connected \n";
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

$echo = new CustomServer("127.0.0.1", "9000");

try {
    $echo->run();
} catch (Exception $e) {
    $echo->stdout($e->getMessage());
}
