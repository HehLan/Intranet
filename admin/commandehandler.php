<?php
	require_once('common/head_admin.php');
	if(!empty($_GET['action']))
	{
		$act = $_GET['action'];
		switch($act){
			case "getArticles":
				$smarty('articles', $database->getArticles());
				$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/commandeListArticles.tpl');
			default:
				break;
		}
	}
	else
	{
		$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/commandehandler.tpl');
	}
?>