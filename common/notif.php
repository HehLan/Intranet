<?php

require_once('../common/head.php');

if(isset($_POST['id_notif']) && isset($_POST['type'])) 
{
	$idj = $_SESSION['id_joueur'];
	$type = $_POST['type'];
	$idn = $_POST['id_notif'];
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
	var_dump($notifs);
}


// Applying Template
$smarty->assign('notifications', $notifs);

$smarty->display('default/notif.tpl');
?>