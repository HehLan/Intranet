<?php
	require_once('common/head_admin.php');
	if(!empty($_POST['action']))
	{
		$act = $_POST['action'];
		switch($act){
			// init
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
				$commandes = $database->getCommandes();
				foreach($commandes as $kc=>$commande)
				{
					$commandes[$kc]['joueur'] = $database->getJoueur($commande['id_joueur']);
					$commandes[$kc]['date'] = getRelativeTime($commande['date']);
					$commandes[$kc]['commande'] = $database->getCommande($commande['id_commande']);
				}
				$smarty->assign('commandes', $commandes);
				$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/commandListCommandes.tpl');
				break;
			// commandes
			case "isPaye":
				if(isset($_POST['idCommande']))
					$database->setCommandeAsPaye($_POST['idCommande']);
				break;
			case "isCommanded":
				if(isset($_POST['idCommande']))
					$database->setCommandeAsCommanded($_POST['idCommande']);
				break;
			case "isDisponible":
				if(isset($_POST['idCommande']))
					$database->setCommandeAsDisponible($_POST['idCommande']);
				break;
			//articles
			case "updateArticleNom":
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