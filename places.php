<?php
require_once('common/head.php');

// Database Queries
$locations = $database->getLocations();
$locations_1 = $database->getLocations_1();
$players = $database->getLogins();
$teams = $database->getTeams();

// Applying Template
$smarty->assign("emplacements", $locations);
$smarty->assign("emplacements1", $locations_1);
$smarty->assign("joueurs", $players);
$smarty->assign("equipes", $teams);

$smarty->display('default/places.tpl');
?>