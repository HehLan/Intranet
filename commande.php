<?php
require_once('common/head.php');

$commandesList = $database->getJoueurCommandes($_SESSION['id_joueur']);
foreach($commandesList as $kc=>$commande)
{
	$commandesList[$kc]['nom'] = "Commande ".$kc+1;
	$commandesList[$kc]['date'] = getRelativeTime($commande['date']);
	$commandesList[$kc]['commande'] = $database->getCommande($commande['id_commande']);
}
$smarty->assign('commandes',$commandesList);
$smarty->display('default/commande.tpl');
?>