<?php

// Includes
session_start();
require_once('common/utils.php');
require_once('class/Smarty_HEHLan.class.php');
require_once('class/Database.class.php');

// Variables
$connected = false;
$database = new Database();
$smarty = new Smarty_HEHLan();

// Test if a user is connected
if (isset($_SESSION['id_joueur']))
{
    if (($_SESSION['id_joueur'] != 0))
    {
        $connected = true;
    }
}

// Database Queries
$locations = $database->getLocations();
$locations_1 = $database->getLocations_1();
$players = $database->getLogins();
$teams = $database->getTeams();

// Applying Template
$smarty->assign("con", $connected);
$smarty->assign("next_matches", $database->getNextMatches($connected));
$smarty->assign("navTournois", $database->getNavTournois());
$smarty->assign("emplacements", $locations);
$smarty->assign("emplacements1", $locations_1);
$smarty->assign("joueurs", $players);
$smarty->assign("equipes", $teams);

$smarty->display('joueurs.tpl');
?>