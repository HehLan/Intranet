<?php

	session_start();
	require_once('class/var.conf.php');
	require_once(DOCUMENT_ROOT.'/common/utils.php');
	require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
	require_once(DOCUMENT_ROOT.'/class/Database.class.php');
	require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
	require_once(DOCUMENT_ROOT.'/class/Query.class.php');


	$connected = false;
	$nbrteam = 0;
	$database = new Database();
	$smarty = new Smarty_HEHLan();


	$connected = Auth::isLogged();

?>