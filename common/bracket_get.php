<?php

session_start();
require_once('var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


$connected = false;
$nbrteam = 0;
$database = new Database();
$smarty = new Smarty_HEHLan();



if(isset($_GET['id_tournoi']) && isset($_GET['type']) && isset($_GET['number']))
{
    // Get bracket for group
    $sql = 'SELECT json
            FROM brackets
            WHERE id_tournoi = :id_tournoi
            AND type = :type
            AND number = :number';
    $query = new Query($database, $sql);
    $query->bind(':id_tournoi', $_GET['id_tournoi'], PDO::PARAM_INT);
    $query->bind(':type', $_GET['type'], PDO::PARAM_INT);
    $query->bind(':number', $_GET['number'], PDO::PARAM_INT);
    $query->execute();
    $data = $query->getResult();
    if(!empty($data))
    {
        echo $data[0]['json'];
    }
    else
    {
        echo 'error';
    }
}


?>
