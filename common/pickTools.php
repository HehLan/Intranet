<?php

require_once ("head.php");

// Variables
$database = new Database();
$connexion = $database->getConnection();
$req = $_POST['req'];

switch ($req) {
    case "updateDb":
        // mapId, matchId, opponentId
        updatePickTable($_POST['matchId'], $_POST['mapId'], $connexion);
        updateMatchsTable($_POST['matchId'], $_POST['opponentId'], $connexion);
        break;

    default :
        break;
}

function updatePickTable($matchId, $mapId, $connexion) {
    $sql = "UPDATE pick_$matchId SET checked=TRUE WHERE mapId=$mapId";
    $req = $connexion->prepare($sql);
    $req->execute();
    echo 'map kicked <br>';
}

function updateMatchsTable($matchId, $opponentId, $connexion) {
    $sql = "UPDATE matchs SET idChief=$opponentId WHERE id_match=$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    echo 'choice updated <br>';
}

?>