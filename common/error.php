<?php

session_start();
require_once('var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


$connected = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$id = null;
$msg = null;

if(isset($_GET['id']) && isset($_GET['msg']))
{
    $id = $_GET['id'];
    $msg = $_GET['msg'];
}


$smarty->assign('next_matches', $database->getNextMatches($connected));
$smarty->assign('navTournois', $database->getNavTournois());
$smarty->assign('id', $id); 
$smarty->assign('msg', $msg);


$smarty->display('default/error.tpl');


?>