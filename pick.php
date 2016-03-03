<?php
// Includes
session_start();
require_once('common/utils.php'); // get some utility functions
require_once('class/Smarty_HEHLan.class.php');
require_once('class/Database.class.php');
require_once('class/Auth.class.php');

// Variables
$connected = true;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();

// Applying Template
$smarty->assign('con', $connected);
$smarty->assign('chat', $chatIsActive);
$smarty->display('pick.tpl');
?>