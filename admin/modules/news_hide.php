<?php

session_start();
require_once('../../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');



$database = new Database();


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
    header('Location: ../news.php');
}
else
{
    echo 'ERREUR EFFACER';	
}





?>