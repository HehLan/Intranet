<?php


session_start();
require_once('../../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');



$database = new Database();


if(isset($_GET['id_news']))
{
    $id_news = $_GET['id_news'];
}
else
{
    exit;
}
		

$sql = "DELETE FROM news WHERE id_news=:id";
$query = new Query($database, $sql);
$query->bind('id', $id_news, PDO::PARAM_INT);
if($query->execute())
{
    header('Location: ../news.php');
}
else
{
    echo 'ERREUR DELETE NEWS';	
}





?>