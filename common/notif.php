<?php

require_once('../common/head.php');
var_dump($_GET);
// Les valeurs GET sont croisées avec la variable de session id_joueur
// au lieu de renvoyer la valeur par GET pour des raisons de sécurité
if(isset($_GET['id_notif']) && isset($_GET['type'])) 
{
	$idj = $_SESSION['id_joueur'];
	$type = $_GET['type'];
	$idn = $_GET['id_notif'];
	if($type=="set")
	{
		$database->setNotifAsSeen($idj, $idn);
	}
	elseif($type=="del")
	{
		$database->delNotifJoueur($idj, $idn);
	}
}
else
{
	$notifs = $database->getNotificationsJoueur($_SESSION['id_joueur']);
}


// Applying Template
$smarty->assign('notifications', $notifs);

$smarty->display('default/notif.tpl');
?>