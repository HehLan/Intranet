<?php
session_start();
require_once('../class/Smarty_HEHLan.class.php');
require_once('../class/Database.class.php');
require_once('../class/Auth.class.php');
require_once('../class/Query.class.php');




$connected = false;
$allowed = false;
$chatIsActive = false;
$database = new Database();

$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 



if(isset($_GET['id_news']) && isset($_GET['invisible']))
{
    $id_news = $_GET['id_news'];
    $invi = $_GET['invisible'];
}
else
{
    exit;
}
		

$sql = 'UPDATE news SET invisible=:invi WHERE id_news=:id';
$query = new Query($database, $sql);
$query->bind('invi', $invi, PDO::PARAM_INT);
$query->bind('id', $id_news, PDO::PARAM_INT);
if($query->execute())
{
    header('Location: news.php');
}
else
{
    echo 'ERREUR EFFACER';	
}





?>