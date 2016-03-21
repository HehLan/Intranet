<?php

session_start();
require_once('../../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');



$database = new Database();


if(isset($_GET['id_downloads']) && isset($_GET['invisible']))
{
    $id_downloads = $_GET['id_downloads'];
    $invi = $_GET['invisible'];
}
else
{
    exit;
}
		

$sql = 'UPDATE downloads SET invisible=:invi WHERE id_downloads=:id';
$query = new Query($database, $sql);
$query->bind(':invi', $invi, PDO::PARAM_INT);
$query->bind(':id', $id_downloads, PDO::PARAM_INT);
if($query->execute())
{
    header('Location: ../downloads.php');
}
else
{
    echo 'ERROR UPDATE DOWNLOADS';	
}





?>