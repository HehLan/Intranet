<?php

session_start();
require_once('../common/var.conf.php');
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




$sql = 'SELECT * FROM downloads ORDER BY published_date DESC';
$query = new Query($database, $sql);
$query->execute();
$downloads = $query->getResult();




// send to the template
$smarty->assign('con', $connected);
$smarty->assign('downloads', $downloads);



$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/downloads.tpl');

?>