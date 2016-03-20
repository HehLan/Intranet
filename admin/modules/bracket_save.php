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




$sql = 'UPDATE brackets
    SET data = :data
    WHERE id_tournoi = :id_tournoi';

$query = new Query($database, $sql);
$query->bind(':id_tournoi', $_POST['id_tournoi'], PDO::PARAM_INT);
$query->bind(':data', $_POST['data'], PDO::PARAM_STR);

$query->execute();



?>
