<?php

require_once('common/head_admin.php');

// Database Queries
$locations = $database->getLocations();
$locations_1 = $database->getLocations_1();
$players = $database->getLogins();
$teams = $database->getTeams();

// Selection des pseudos => mais pourquoi ça existe?			
$sql = 'SELECT pseudo FROM joueurs ORDER BY pseudo ASC';
$query = new Query($database, $sql);
$query->execute();
$joueurs_autre = $query->getResult();



// send to the template
$smarty->assign("emplacements", $locations);
$smarty->assign("emplacements1", $locations_1);
$smarty->assign('joueurs', $players);
$smarty->assign('equipes', $teams);
$smarty->assign('joueurs_autre', $joueurs_autre);

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/emplacements.tpl');	
?>