<?php
session_start();
require_once('../class/Smarty_HEHLan.class.php');
require_once('../class/Database.class.php');
require_once('../class/Auth.class.php');
require_once('../class/Query.class.php');


$con = false;

$connected = false;
$allowed = false;
$chatIsActive = false;
$database = new Database();


$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);


if (!$connected && !$allowed)
{
    header('Location: ../index.php');
} 



if (isset($_POST['id_news']))
{
     $id_news = $_POST['id_news'];
} 
else
{
    exit;
}
		
if ($id_news == 0)
{
    $sql = 'INSERT INTO news (titre,texte,quand,invisible) 
    VALUES (:titre,:texte,NOW(),:invisible)';
    $query = new Query($database, $sql);
    $query->bind('titre', $_POST['titre'], PDO::PARAM_STR);
    $query->bind('texte', $_POST['texte'], PDO::PARAM_STR);
    $query->bind('invisible', 0, PDO::PARAM_INT);
    if($query->execute())
    {
        header('Location: news.php');
    }
    else
    {
        echo 'ERREUR INSERT';
    }	
}
else
{
    $sql = 'UPDATE news SET titre=:titre, texte=:texte, quand=NOW() WHERE id_news=:id';
    $query = new Query($database, $sql);
    $query->bind('titre', $_POST['titre'], PDO::PARAM_STR);
    $query->bind('texte', $_POST['texte'], PDO::PARAM_STR);
    $query->bind('id', $id_news, PDO::PARAM_INT);
    if($query->execute())
    {
        header('Location: news.php');
    }
    else
    {
        echo 'ERREUR UPDATE';	
    }
}	




?>