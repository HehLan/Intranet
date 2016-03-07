<?php


// Includes
session_start();
require_once('../../common/utils.php'); // get some utility functions
require_once('../../class/Smarty_HEHLan.class.php');
require_once('../../class/Database.class.php');
require_once('../../class/Auth.class.php');
require_once('../../class/Query.class.php');

$database = new Database();



if (isset($_POST['id']))
{
    $database->insertUserInChat($_POST['id'], $_POST['pseudo']);
}

$sql = "SELECT pseudo FROM tchat_users WHERE lastcon>SUBTIME(NOW(),'0 0:0:30') ORDER BY pseudo";
$query = new Query($database, $sql);

if ($query->execute())
{
    echo '<strong>Connectés :</strong><br>';
    foreach ($query->getResult() as $msg)
    {
        $pseudo = htmlspecialchars($msg['pseudo']);
        echo $pseudo . '<br>';
    }
}
else
{
    echo 'ERREUR USERS SQL 2';
    exit;
}
