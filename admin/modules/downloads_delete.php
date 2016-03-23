<?php


session_start();
require_once('../../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');



$database = new Database();


if(isset($_GET['id_downloads']))
{
    $id_downloads = $_GET['id_downloads'];
}
else
{
    exit;
}
		

$sql = 'DELETE FROM downloads WHERE id_downloads=:id';
$query = new Query($database, $sql);
$query->bind(':id', $id_downloads, PDO::PARAM_INT);
if($query->execute())
{
    header('Location: ../downloads.php');
}
else
{
    echo 'ERREUR DELETE DOWNLOADS';	
}





?>