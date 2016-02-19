<?php

// Includes
session_start();
require_once('common/connect.php'); // connection to database
require_once('common/utils.php'); // get some utility functions
require_once('common/getNextMatches.php');
require_once('common/getNavTournois.php');
require_once('common/getNewsList.php');
require_once('class/Smarty_HEHLan.class.php');

// Variables
$con = false;
$chat = false;
$smarty = new Smarty_HEHLan();

// Test if a user is connected
if (isset($_SESSION['id_joueur']))
{
    if (($_SESSION['id_joueur'] != 0))
    {
        $con = true;
    }
}

// This is an unknown user (no connected)
if (!$con)
{
    // The user has entered its login and password
    if (isset($_POST['login']) && isset($_POST['pwd']))
    {
        //SQL Query to select the connected player and its administration level 
        $sql = 'SELECT id_joueur,level
                    FROM joueurs
                    WHERE pseudo=:login AND password=:pwd';
        $query = $connexion->prepare($sql);
        $query->bindValue(':login', $_POST['login'], PDO::PARAM_STR);
        $query->bindValue(':pwd', sha1($_POST['pwd']), PDO::PARAM_STR);
        if ($query->execute()) {
            $data = $query->fetch(PDO::FETCH_ASSOC);
            if (!is_null($data['id_joueur'])) {
                $_SESSION['id_joueur'] = $data['id_joueur'];
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['level'] = $data['level'];
                $_SESSION['password'] = $_POST['pwd'];
                $con = true;
            }
        } else {
            echo 'ERROR LOGIN SQL';
        }
    }
}

// This is a connected user
if ($con) {
    $duree_chat = '2000';
    $duree_chat_users = '20000';

    //SQL Query to test if chat is activated
    $sql = "SELECT valeur
                FROM variables
                WHERE nom='chat_on'";
    $query = $connexion->prepare($sql);
    if ($query->execute()) {
        $data = $query->fetch(PDO::FETCH_ASSOC);
        if ($data['valeur'] == 1) {
            $chat = true;
        }
    } else {
        echo 'ERROR SQL duree_chat';
    }

    //Active chat 
    if ($chat) {
        //SQL query to get chat timing for AJAX
        $sql = "SELECT valeur
                    FROM variables
                    WHERE nom='duree_chat'";
        $query = $connexion->prepare($sql);
        if ($query->execute()) {
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $duree_chat = $data['valeur'];
        } else {
            echo 'ERROR SQL duree_chat';
        }

        //SQL query to get chat timing for AJAX
        // this is a test of separating sql
        $sql = file_get_contents('sql/newSQLTemplate.sql');
        $query = $connexion->prepare($sql);
        if ($query->execute()) {
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $duree_chat_users = $data['valeur'];
        } else {
            echo 'ERROR SQL duree_chat_users';
        }

        // here ? or at the top ?
        require_once('assets/ajax/chat.php');
    }
}

// Applying Template
$smarty->assign('con', $con);
$smarty->assign('chat', $chat);
$smarty->assign('next_matches', getNextMatches());
$smarty->assign('navTournois', getNavTournois());
$smarty->assign('newsList', getNewsList());
$smarty->display('templates/default/index.tpl');
?>