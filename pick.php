<?php
// Includes
session_start();
require_once('common/utils.php'); // get some utility functions
require_once('class/Smarty_HEHLan.class.php');
require_once('class/Database.class.php');
require_once('class/Auth.class.php');

// Variables
$connected = true;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();

$mapPaths = array(); // get from db, which class is temporary broken
array_push($mapPaths,
        "/img/hots/maps/Battlefield of Eternity.jpg",
        "/img/hots/maps/Blackheart's Bay.jpg",
        "/img/hots/maps/Cursed Hollow.jpg",
        "/img/hots/maps/Dragon Shire.jpg",
        "/img/hots/maps/Garden of Terror.jpg",
        "/img/hots/maps/Haunted mines.jpg",
        "/img/hots/maps/Infernal Shrines.jpg",
        "/img/hots/maps/Sky Temple.jpg",
        "/img/hots/maps/Tomb of the Spider Queen.jpg",
        "/img/hots/maps/Towers of Doom.jpg");

$mapNames = array(); // get from db, which class is temporary broken
array_push($mapNames,"Battlefield of Eternity","Blackheart's Bay",
        "Cursed Hollow","Dragon Shire","Garden of Terror","Haunted mines",
        "Infernal Shrines","Sky Temple","Tomb of the Spider Queen","Towers of Doom");

$connected = Auth::isLogged();

// Applying Template
$smarty->assign('con', $connected);
$smarty->assign('chat', $chatIsActive);
$smarty->assign('mapPaths', $mapPaths);
$smarty->assign('mapNames', $mapNames);
$smarty->display('default/pick.tpl');
?>