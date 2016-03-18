<?php

session_start();
require_once($_SERVER['CONTEXT_DOCUMENT_ROOT'].'/ommon/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');

// Variables
$connected = false;
$database = new Database();
$smarty = new Smarty_HEHLan();

// Test if a user is connected
$connected = Auth::isLogged();
if($connected)
	$ics = $_SESSION['id_joueur'];
else
	$ics = 0;

// Assign variables to view
$smarty->assign('connected', $connected);
$smarty->assign('con', $connected);
$smarty->assign('$id_current_session', $ics);
?>