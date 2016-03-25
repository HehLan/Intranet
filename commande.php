<?php
require_once('common/head.php');

if(isset($_POST['action']))
{
	switch($_POST['action']) {
		case "insertCommande":
			if($_POST[)
			break;
		case "getCommandes":
			$commandesList = $database->getJoueurCommandes($_SESSION['id_joueur']);
			foreach($commandesList as $kc=>$commande)
			{
				$commandesList[$kc]['nom'] = "Commande ".($kc+1);
				$commandesList[$kc]['date'] = getRelativeTime($commande['date']);
				$commandesList[$kc]['commande'] = $database->getCommande($commande['id_commande']);
			}
			$smarty->assign('commandes',$commandesList);
			$smarty->display('default/commandeList.tpl');
			break;
		default:
			break;
	}
} else { 
	$smarty->display('default/commande.tpl');
}
?>