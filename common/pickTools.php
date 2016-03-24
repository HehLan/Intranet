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
        
    case "updateDbHeroes":
        // $_POST[] --> {heroId, matchId, opponentId}
        $matchId = $_POST['matchId'];
        $heroId = $_POST['heroId'];
        $opponentId = $_POST['opponentId'];
        updatePickTableHeroes($matchId, $heroId, $connexion);
        updateMatchsTable($matchId, $opponentId, $connexion);
        return "db updated";    

    case "getDataMaps":
        $matchId = $_POST['matchId'];
        $pickState = getDataMaps($matchId, $connexion);
        echo json_encode($pickState);
        break;
    
    case "getDataHeroes":
        $matchId = $_POST['matchId'];
        $pickState = getDataHeroes($matchId, $connexion);
        echo json_encode($pickState);
        break;

    case "saveMap":
        $matchId = $_POST['matchId'];
        saveMap($matchId, $connexion);
        return "map saved";
        
    case "saveHeroes":
        $matchId = $_POST['matchId'];
        saveHeroes($matchId, $connexion);
        return "heroes saved";
    
    default :
        break;
}

// fonction va attribuer un statut "checked" à la map concérnée, dans la table associé au match
function updatePickTable($matchId, $mapId, $connexion) {
    $sql = "UPDATE pick_$matchId SET checked=TRUE WHERE mapId=$mapId";
    $req = $connexion->prepare($sql);
    $req->execute();
}

function updatePickTableHeroes($matchId, $heroId, $connexion){
    $sql = "UPDATE pickhero_$matchId SET checked=TRUE WHERE heroId=$heroId";
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
function getDataMaps($matchId, $connexion) {
    $sql = "SELECT mapId, checked FROM pick_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    $pickState = $req->fetchAll(PDO::FETCH_ASSOC);
    return $pickState;
}

// fonction qui va recuperer les id's et les etats 'checked' pour le match
function getDataHeroes($matchId, $connexion) {
    $sql = "SELECT heroId, checked FROM pickhero_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    $pickState = $req->fetchAll(PDO::FETCH_ASSOC);
    return $pickState;
}

// fonction qui va sauvegarder la map restante dans la table matchs
function saveMap($matchId, $connexion){
    $mapId = '';
    $pickStateMaps = getDataMaps($matchId, $connexion);
    foreach ($pickStateMaps as $map) {
        if($map['checked'] == 0){
            $mapId = $map['mapId'];
            break;
        }
    }
    
    $sql = "UPDATE matchs SET idMap=$mapId WHERE id_match=$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
}

// fonction qui va sauvegarder la map restante dans la table matchs
function saveHeroes($matchId, $connexion){
    $sql = "SELECT heroId FROM pickhero_$matchId WHERE checked=TRUE";
    $req = $connexion->prepare($sql);
    $req->execute();
    
    $heroes = $req->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($heroes);
    
    $sql = "UPDATE matchs SET heroes='$json' WHERE id_match=$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
}

?>