<?php

require_once ("head.php");

// Variables
$database = new Database();
$connexion = $database->getConnection();
$req = $_POST['req'];

switch ($req) {
    case "updateDb":
        // $_POST[] --> {mapId, matchId, opponentId}
        $matchId = $_POST['matchId'];
        $mapId = $_POST['mapId'];
        $opponentId = $_POST['opponentId'];
        updatePickTable($matchId, $mapId, $connexion);
        updateMatchsTable($matchId, $opponentId, $connexion);
        return "db updated";

    case "getData":
        $matchId = $_POST['matchId'];
        $pickState = getData($matchId, $connexion);
        $out = array_values($pickState);
        $pickState = json_encode($pickState);
        echo $pickState;
        break;

    case "fromPhpToJavascriptDataTransactionTest":
        $matchId = $_POST['matchId'];
        $pickState = getData($matchId, $connexion);
        $out = array_values($pickState);
        $pickState = json_encode($out);
        echo $pickState;
        break;

    default :
        break;
}

// fonction va attribuer un statut "checked" à la map concérnée, dans la table associé au match
function updatePickTable($matchId, $mapId, $connexion) {
    $sql = "UPDATE pick_$matchId SET checked=TRUE WHERE mapId=$mapId";
    $req = $connexion->prepare($sql);
    $req->execute();
}

// fonction va écrire dans la table matchs l'id de joueur à qui faire le pick suivant 
function updateMatchsTable($matchId, $opponentId, $connexion) {
    $sql = "UPDATE matchs SET idChief=$opponentId WHERE id_match=$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
}

// fonction qui va recuperer les id's et les etats 'checked' pour le match
function getData($matchId, $connexion) {
    $sql = "SELECT mapId, checked FROM pick_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    $pickState = $req->fetchAll(PDO::FETCH_ASSOC);
    return $pickState;
}

?>