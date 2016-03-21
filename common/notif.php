<?php
require_once('../common/head.php');

$notifs = '';
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
elseif(isset($_GET['lastUpdate']))
{
	$dateConverted = date("Y-m-d h:i:s",$_GET['lastUpdate']/1000);
	$notifs = $database->getNotificationsJoueurFrom($_SESSION['id_joueur'], $dateConverted);
}
else
{
	$notifs = $database->getNotificationsJoueur($_SESSION['id_joueur']);
	
}

// Applying Template
if(!empty($notifs))
{
	foreach($notifs as $k=>$v)
		$notifs[$k]['date'] = getRelativeTime($v['date']);
	$smarty->assign('notifications', $notifs);
	$smarty->display('default/notif.tpl');
}
?>