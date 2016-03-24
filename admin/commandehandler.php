<?php
	require_once('common/head_admin.php');
	if(!empty($_POST['action']))
	{
		$act = $_POST['action'];
		switch($act){
			case "getArticles":
				$smarty->assign('articles', $database->getArticles());
				$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/commandListArticles.tpl');
				break;
			case "getGroupes":
				$smarty->assign('articles', $database->getArticles());
				$smarty->assign('groupes', $database->getGroupesArticles());
				$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/commandListGroupes.tpl');
				break;
			case "getCommandes":
				$smarty->assign('commandes', $database->getCommandes());
				$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/commandListCommandes.tpl');
				break;
			case "updateArticleNom":
				if(isset($_POST['idArticle']) && isset($_POST['nomArticle']))
					$database->updateArticleNom($idArticle, $nomArticle);
				break;
			case "updateArticleDesc":
				if(isset($_POST['idArticle']) && isset($_POST['descArticle']))
					$database->updateArticleNom($idArticle, $descArticle);
				break;
			default:
				break;
		}
	}
	else
	{
		$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/commandehandler.tpl');
	}
?>