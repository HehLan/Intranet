<?php

require_once('common/head.php');

$connexion = $database->getConnection();
$matchId = $_GET['idMatch'];
$playerId = $_GET['id'];
$playerNickname;
$opponentId;
$opponentNickname;
$maps;
$tableExist;
$pickState;
$idPlayerWhoMakeChoise;



// ********************** recuperer les maps **********************
$sql = "select * from hotsmaps";
$query = new Query($database, $sql);
if ($query->execute()) {
    $maps = $query->getResult();
} else {
    global $glob_debug;
    if ($glob_debug) {
        echo 'ERREUR SQL MAPS';
    }
    exit;
}

// ********************** get player nickname **********************
$sql = 'SELECT pseudo FROM joueurs WHERE id_joueur=:userId';
$query = new Query($database, $sql);
$query->bind(':userId', $playerId, PDO::PARAM_INT);
if ($query->execute()) {
    // Test if the user has a pseudo or not
    if ($query->getResult()) {
        $playerNickname = $query->getResult()[0]['pseudo'];
    } else {
        $playerNickname = 'unknown';
    }
} else {
    global $glob_debug;
    if ($glob_debug) {
        echo 'ERREUR SQL MAPS';
    }
    exit;
}

// ********************** chercher l'id de l'adversaire **********************
$sql = "SELECT joueurs.id_joueur, pseudo FROM matchs_equipes 
        LEFT JOIN equipes_joueur ON matchs_equipes.id_equipe=equipes_joueur.id_equipes
        LEFT JOIN joueurs  ON equipes_joueur.id_joueur=joueurs.id_joueur
        WHERE id_match=:matchId AND level=1";
$query = new Query($database, $sql);
$query->bind(':matchId', $matchId, PDO::PARAM_INT);
// recuperer les deux jouers(chefs d'équipe), concernant ce match
if ($query->execute()) {
    $players = $query->getResult();
} else {
    global $glob_debug;
    if ($glob_debug)
        echo 'ERREUR SQL MAPS';
    exit;
}
foreach ($players as $player) {
    if ($player['id_joueur'] != $playerId) {
        $opponentNickname = $player['pseudo'];
        $opponentId = $player['id_joueur'];
    }
}

// ********************** verifier l'existence de la table temporaire **********************
$sql = "SHOW TABLES LIKE 'pick_$matchId'";
$query = new Query($database, $sql);
if ($query->execute()) {
    $result = $query->getResult();
    $tableExist = (count($result) > 0) ? true : false;
} else {
    global $glob_debug;
    if ($glob_debug)
        echo 'ERREUR SQL MAPS';
    exit;
}

// si la table existe 
if ($tableExist) {
    // recuperer les id's et les etats 'checked'
    $sql = "SELECT mapId, checked FROM pick_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    $pickState = $req->fetchAll(PDO::FETCH_ASSOC);

    // determiner à qui est le tour
    $sql = "SELECT idChief FROM matchs WHERE id_match=:idMatch";
    $query = new Query($database, $sql);
    $query->bind(':idMatch', $matchId, PDO::PARAM_INT);
    if ($query->execute()) {
        $idPlayerWhoMakeChoise = $query->getResult()[0]['idChief'];
        if($idPlayerWhoMakeChoise == 0){ 
            // si la tables n'est pas remplie, donc debut du pick
            // on va choisir le joueur avc l'id le + petit qui va commencer le pick
            $idPlayerWhoMakeChoise = ($playerId < $opponentId) ? $playerId : $opponentId;
        }
    } else {
        global $glob_debug;
        if ($glob_debug)
            echo 'ERREUR SQL MAPS';
        exit;
    }
}
// si la table n'exitste pas
else {
    // creation
    $sql = "CREATE TABLE hehlanbd.pick_$matchId ("
            . "mapId INT NOT NULL AUTO_INCREMENT, "
            . "checked BOOLEAN NOT NULL, "
            . "PRIMARY KEY (mapId))";
    $req = $connexion->prepare($sql);
    $req->execute();

    // remplissage
    $counter = 0;
    $sql = "INSERT INTO hehlanbd.pick_$matchId (mapId, checked) VALUES ";
    foreach ($maps as $map) {
        if ($counter < count($maps) - 1) {
            $sql .= " ('" . $map['id'] . "', FALSE),";
            $counter++;
        } else {
            $sql .= " ('" . $map['id'] . "', FALSE)";
        }
    }
    $req = $connexion->prepare($sql);
    $req->execute();
    
    // recuperer les id's et les etats 'checked'
    $sql = "SELECT mapId, checked FROM pick_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    $pickState = $req->fetchAll(PDO::FETCH_ASSOC);
}

// ********************** Applying Template **********************
$smarty->assign('con', $connected);
$smarty->assign('matchId', $matchId);
$smarty->assign('maps', $maps);         // les chemins vers les img des maps et les id's
$smarty->assign('playerId', $playerId);
$smarty->assign('playerNickname', $playerNickname);
$smarty->assign('opponentId', $opponentId);
$smarty->assign('opponentNickname', $opponentNickname);
$smarty->assign('pickState', $pickState);   // les id's des maps et etat checked(bool)
$smarty->assign('idPlayerWhoMakeChoise', $idPlayerWhoMakeChoise);   

$smarty->display('default/pick.tpl');
?>