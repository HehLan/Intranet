<?php

session_start();
require_once('../../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');



$connected = false;
$allowed = false;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 


if(isset($_POST['json']) && isset($_POST['id_tournoi']) && isset($_POST['type']) && isset($_POST['group_number']))
{   
    // Get bracket for group
    $sql = 'SELECT json
            FROM brackets
            WHERE id_tournoi = :id_tournoi
            AND type = :type
            AND group_number = :group_number';
    $query = new Query($database, $sql);
    $query->bind(':id_tournoi', $_POST['id_tournoi'], PDO::PARAM_INT);
    $query->bind(':type', $_POST['type'], PDO::PARAM_INT);
    $query->bind(':group_number', $_POST['group_number'], PDO::PARAM_INT);
    $query->execute();
    $res = $query->getResult();

    if(empty($res))
    {
        $sql = 'INSERT INTO brackets
                VALUES (NULL, :id_tournoi, :json, :type, :group_number, NULL)';
        $query = new Query($database, $sql);
        $query->bind(':id_tournoi', $_POST['id_tournoi'], PDO::PARAM_INT);
        $query->bind(':json', $_POST['json'], PDO::PARAM_STR);
        $query->bind(':type', $_POST['type'], PDO::PARAM_INT);
        $query->bind(':group_number', $_POST['group_number'], PDO::PARAM_INT);
        $query->execute();
    }
    else
    {
        $sql = 'UPDATE brackets
                SET json = :json
                WHERE id_tournoi = :id_tournoi
                AND type = :type
                AND group_number = :group_number';
        $query = new Query($database, $sql);
        $query->bind(':id_tournoi', $_POST['id_tournoi'], PDO::PARAM_INT);
        $query->bind(':json', $_POST['json'], PDO::PARAM_STR);
        $query->bind(':type', $_POST['type'], PDO::PARAM_INT);
        $query->bind(':group_number', $_POST['group_number'], PDO::PARAM_INT);
        $query->execute();        
    }
}



if(isset($_POST['json']) && isset($_POST['id_tournoi']) && isset($_POST['type']) && isset($_POST['finales_number']))
{   
    // Get bracket for group
    $sql = 'SELECT json
            FROM brackets
            WHERE id_tournoi = :id_tournoi
            AND type = :type
            AND finales_number = :finales_number';
    $query = new Query($database, $sql);
    $query->bind(':id_tournoi', $_POST['id_tournoi'], PDO::PARAM_INT);
    $query->bind(':type', $_POST['type'], PDO::PARAM_INT);
    $query->bind(':finales_number', $_POST['finales_number'], PDO::PARAM_INT);
    $query->execute();
    $res = $query->getResult();

    if(empty($res))
    {
        $sql = 'INSERT INTO brackets
                VALUES (NULL, :id_tournoi, :json, :type, NULL, finales_number)';
        $query = new Query($database, $sql);
        $query->bind(':id_tournoi', $_POST['id_tournoi'], PDO::PARAM_INT);
        $query->bind(':json', $_POST['json'], PDO::PARAM_STR);
        $query->bind(':type', $_POST['type'], PDO::PARAM_INT);
        $query->bind(':finales_number', $_POST['finales_number'], PDO::PARAM_INT);
        $query->execute();
    }
    else
    {
        $sql = 'UPDATE brackets
                SET json = :json
                WHERE id_tournoi = :id_tournoi
                AND type = :type
                AND finales_number = :finales_number';
        $query = new Query($database, $sql);
        $query->bind(':id_tournoi', $_POST['id_tournoi'], PDO::PARAM_INT);
        $query->bind(':json', $_POST['json'], PDO::PARAM_STR);
        $query->bind(':type', $_POST['type'], PDO::PARAM_INT);
        $query->bind(':finales_number', $_POST['finales_number'], PDO::PARAM_INT);
        $query->execute();        
    }
}



?>
