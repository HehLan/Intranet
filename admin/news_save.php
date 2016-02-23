<?php
session_start();
require_once('../class/Smarty_HEHLan.class.php');
require_once('../class/Database.class.php');
require_once('../class/Auth.class.php');

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
    $database->setQuery($sql);
    $database->bindValue('titre', $_POST['titre'], PDO::PARAM_STR);
    $database->bindValue('texte', $_POST['texte'], PDO::PARAM_STR);
    $database->bindValue('invisible', 0, PDO::PARAM_INT);
    if($database->getQuery()->execute())
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
    $database->setQuery($sql);
    $database->bindValue('titre', $_POST['titre'], PDO::PARAM_STR);
    $database->bindValue('texte', $_POST['texte'], PDO::PARAM_STR);
    $database->bindValue('id', $id_news, PDO::PARAM_INT);
    if($database->getQuery()->execute())
    {
        header('Location: news.php');
    }
    else
    {
        echo 'ERREUR UPDATE';	
    }
}	




?>