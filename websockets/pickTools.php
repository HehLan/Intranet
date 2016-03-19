<?php

require_once(DOCUMENT_ROOT . '/class/var.conf.php');
require_once(DOCUMENT_ROOT . '/class/Database.class.php');
require_once(DOCUMENT_ROOT . '/class/Query.class.php');
die();

// Variables
$database = new Database();
$connexion = $database->getConnection();
$req = $_POST['req'];

switch ($req) {
    case "updateDb":
        // mapId, matchId
        updatePickTable($_POST['matchId'], $_POST['mapId']);
        break;

    default :
        break;
}

function updatePickTable($matchId, $mapId){
    $sql = "UPDATE pick_$matchId SET checked=TRUE WHERE mapId=$mapId";
    $req = $connexion->prepare($sql);
    $req->execute();
    echo 'success';
}

?>