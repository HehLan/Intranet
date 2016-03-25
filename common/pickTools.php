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
        $playerId = $_POST['playerId'];
        updatePickTable($matchId, $mapId, $connexion);
        updateMatchsTable($matchId, $playerId, $connexion);
        return "db updated";

    case "updateDbHeroes":
        // $_POST[] --> {heroId, matchId, opponentId}
        $matchId = $_POST['matchId'];
        $heroId = $_POST['heroId'];
        $playerId = $_POST['playerId'];
        updatePickTableHeroes($matchId, $heroId, $connexion);
        updateMatchsTable($matchId, $playerId, $connexion);
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

    case "getResultsOfPick":
        $matchId = $_POST['matchId'];
        $pickResult = getPickResults($matchId, $connexion);
        echo $pickResult;
        break;
    
    case"deleteTempTables":
        $matchId = $_POST['matchId'];
        deleteTempTables($matchId, $connexion);
        return "temp tables deleted";

    default :
        break;
}

// fonction va attribuer un statut "checked" à la map concérnée, dans la table associé au match
function updatePickTable($matchId, $mapId, $connexion) {
    $sql = "UPDATE pick_$matchId SET checked=TRUE WHERE mapId=$mapId";
    $req = $connexion->prepare($sql);
    $req->execute();
}

function updatePickTableHeroes($matchId, $heroId, $connexion) {
    $sql = "UPDATE pickhero_$matchId SET checked=TRUE WHERE heroId=$heroId";
    $req = $connexion->prepare($sql);
    $req->execute();
}

// fonction va écrire dans la table matchs l'id de joueur à qui faire le pick suivant 
function updateMatchsTable($matchId, $playerId, $connexion) {
    $sql = "UPDATE matchs SET idChief=$playerId, checked=TRUE WHERE id_match=$matchId";
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
function saveMap($matchId, $connexion) {
    $mapId = '';
    $pickStateMaps = getDataMaps($matchId, $connexion);
    foreach ($pickStateMaps as $map) {
        if ($map['checked'] == 0) {
            $mapId = $map['mapId'];
            break;
        }
    }

    $sql = "UPDATE matchs SET idMap=$mapId WHERE id_match=$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
}

// fonction qui va sauvegarder les heros sous JSON dans la table matchs
function saveHeroes($matchId, $connexion) {
    $sql = "SELECT heroId FROM pickhero_$matchId WHERE checked=TRUE";
    $req = $connexion->prepare($sql);
    $req->execute();

    $heroes = $req->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($heroes);

    $sql = "UPDATE matchs SET heroes='$json' WHERE id_match=$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
}

function getPickResults($matchId, $connexion) {
    $sql = "SELECT idMap, heroes FROM matchs WHERE id_match=$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();

    $results = $req->fetchAll(PDO::FETCH_ASSOC);

    $mapId = $results[0]["idMap"]; // ok

    $heroesIdJSON = $results[0]["heroes"]; // json string [{"heroId":"1"},{"heroId":"2"},...]
    $heroesId = json_decode($heroesIdJSON, true); // array assoc

    $mapPath = '';
    $paths = array();

    // chopper la path de la map
    $sql = "SELECT imgPath FROM hotsmaps WHERE id=$mapId";
    $req = $connexion->prepare($sql);
    $req->execute();
    $mapPath = $req->fetchAll(PDO::FETCH_COLUMN)[0];

    // chopper les paths des heroes
    foreach ($heroesId as $value) {
        $sql = "SELECT imgPath FROM hotsheroes WHERE id=" . $value['heroId'];
        $req = $connexion->prepare($sql);
        $req->execute();
        $heroPath = $req->fetchAll(PDO::FETCH_COLUMN)[0];
        array_push($paths, $heroPath);
    }

    array_push($paths, $mapPath);

    return json_encode($paths);
}

function deleteTempTables($matchId, $connexion){
    // delete table des maps
    $sql = "DROP TABLE pick_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    
    // delete table des heroes
    $sql = "DROP TABLE pickhero_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
}

?>