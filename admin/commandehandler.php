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
				echo "ononjo";
				if(isset($_POST['idArticle']) && isset($_POST['nomArticle']))
					$database->updateArticleNom($_POST['idArticle'], $_POST['nomArticle']);
				break;
			case "updateArticleDesc":
				if(isset($_POST['idArticle']) && isset($_POST['descArticle']))
					$database->updateArticleDescription($_POST['idArticle'], $_POST['descArticle']);
				break;
			case "insertArticle":
				$database->insertArticle();
				break;
			case "removeArticle":
				if(isset($_POST['idArticle']))
				$database->removeArticle($_POST['idArticle']);
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