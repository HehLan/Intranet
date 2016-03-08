<?php

session_start();
require_once('common/utils.php');
require_once('class/Smarty_HEHLan.class.php');
require_once('class/Database.class.php');
require_once('class/Auth.class.php');

// Variables
$connected = true;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();
$connexion = $database->getConnection();

// ******************** test purposals -> don't touch!!!! **********************
//$query="SELECT * FROM joueurs WHERE id_joueur=:id";
//$req=$connexion->prepare($query);
//$req->bindValue('id', 5);
//$req->execute();
//$user = $req->fetchAll(PDO::FETCH_ASSOC);     // it works !!! ^^
// *****************************************************************************

$query = "select * from hots_maps";
$req=$connexion->prepare($query); 
$req->execute();
$maps = $req->fetchAll(PDO::FETCH_ASSOC);

$connected = Auth::isLogged();

// Applying Template
$smarty->assign('con', $connected);
$smarty->assign('chat', $chatIsActive);
$smarty->assign('maps', $maps);
$smarty->display('default/pick.tpl');
?>