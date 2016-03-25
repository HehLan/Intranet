<?php

require_once('common/head.php');

// protection ici pour voir si le match "matche" (vive la tautologie) bien avec le joueur
// TODO
// aller chequer dans la db si idPlayer&&idMatch "exists" or smth like that

$connexion = $database->getConnection();
$matchId = $_GET['idMatch'];
$playerId = $_GET['id'];
$playerNickname;
$opponentId;
$opponentNickname;
$maps;
$heroes;
$tableExist;
$pickStateMaps;
$idPlayerWhoMakeChoise = '';

// 

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

// ********************** recuperer les heros **********************
$sql = "select * from hotsheroes";
$query = new Query($database, $sql);
if ($query->execute()) {
    $heroes = $query->getResult();
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
        break;
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
    // recuperer les id's et les etats 'checked' des maps
    $sql = "SELECT mapId, checked FROM pick_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    $pickStateMaps = $req->fetchAll(PDO::FETCH_ASSOC);

    // recuperer les id's et les etats 'checked' des heroes
    $sql = "SELECT heroId, checked FROM pickhero_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    $pickStateHeroes = $req->fetchAll(PDO::FETCH_ASSOC);
}
// si la table n'exitste pas
else {
    // creation de la table pickmaps_n
    $sql = "CREATE TABLE hehlanbd.pick_$matchId ("
            . "mapId INT NOT NULL AUTO_INCREMENT, "
            . "checked BOOLEAN NOT NULL, "
            . "PRIMARY KEY (mapId))";
    $req = $connexion->prepare($sql);
    $req->execute();

    // creation de la table pickheroes_n
    $sql = "CREATE TABLE hehlanbd.pickhero_$matchId ("
            . "heroId INT NOT NULL AUTO_INCREMENT, "
            . "checked BOOLEAN NOT NULL, "
            . "PRIMARY KEY (heroId))";
    $req = $connexion->prepare($sql);
    $req->execute();

    // remplissage maps
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

    // remplissage heroes
    $counter = 0;
    $sql = "INSERT INTO hehlanbd.pickhero_$matchId (heroId, checked) VALUES ";
    foreach ($heroes as $hero) {
        if ($counter < count($heroes) - 1) {
            $sql .= " ('" . $hero['id'] . "', FALSE),";
            $counter++;
        } else {
            $sql .= " ('" . $hero['id'] . "', FALSE)";
        }
    }
    $req = $connexion->prepare($sql);
    $req->execute();

    // recuperer les id's et les etats 'checked' des maps
    $sql = "SELECT mapId, checked FROM pick_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    $pickStateMaps = $req->fetchAll(PDO::FETCH_ASSOC);

    // recuperer les id's et les etats 'checked' des heroes
    $sql = "SELECT heroId, checked FROM pickhero_$matchId";
    $req = $connexion->prepare($sql);
    $req->execute();
    $pickStateHeroes = $req->fetchAll(PDO::FETCH_ASSOC);
}

// ********************** determiner à qui est le tour **********************
$sql = "SELECT idChief, checked FROM matchs WHERE id_match=:idMatch";
$query = new Query($database, $sql);
$query->bind(':idMatch', $matchId, PDO::PARAM_INT);
if ($query->execute()) {
    $idChief = $query->getResult()[0]['idChief'];
    $checked = $query->getResult()[0]['checked'];

    if ($idChief == NULL) {
        $sql = "UPDATE matchs SET idChief=:idChief WHERE id_match=:idMatch";
        $query = new Query($database, $sql);
        $query->bind(':idMatch', $matchId, PDO::PARAM_INT);
        $query->bind(':idChief', $playerId, PDO::PARAM_INT);
        if ($query->execute()) {
            $idPlayerWhoMakeChoise = $playerId;
        } else {
            global $glob_debug;
            if ($glob_debug)
                echo 'ERREUR SQL MAPS';
            exit;
        }
    }
    else if ($idChief != $playerId) {
        if ($checked) {
            $idPlayerWhoMakeChoise = $playerId;
        }
    } else if ($idChief == $playerId && !$checked){
        $idPlayerWhoMakeChoise = $playerId;
    }
    else {
        $idPlayerWhoMakeChoise = NULL;
    }
} else {
    global $glob_debug;
    if ($glob_debug)
        echo 'ERREUR SQL MAPS';
    exit;
}


$phase;
// determiner la phase du pick
$sql = "SELECT idMap FROM matchs WHERE id_match=:idMatch";
$query = new Query($database, $sql);
$query->bind(':idMatch', $matchId, PDO::PARAM_INT);
if ($query->execute()) {
    $idMap = $query->getResult()[0]['idMap'];
    if ($idMap == 0) {
        // on est tjs au stade de pick les maps
        $phase = "maps";
    }
    // on est au stade de pick les heros
    else {
        $phase = "heroes";
    }
} else {
    global $glob_debug;
    if ($glob_debug)
        echo 'ERREUR SQL MAPS';
    exit;
}


// ********************** Applying Template **********************
$smarty->assign('con', $connected);
$smarty->assign('matchId', $matchId);
$smarty->assign('maps', $maps);         // les chemins vers les img des maps et les id's
$smarty->assign('heroes', $heroes);
$smarty->assign('playerId', $playerId);
$smarty->assign('playerNickname', $playerNickname);
$smarty->assign('opponentId', $opponentId);
$smarty->assign('opponentNickname', $opponentNickname);
$smarty->assign('pickStateMaps', $pickStateMaps);   // les id's des maps et etat checked(bool)
$smarty->assign('pickStateHeroes', $pickStateHeroes);   // les id's des heroes et etat checked(bool)
$smarty->assign('idPlayerWhoMakeChoise', $idPlayerWhoMakeChoise);
$smarty->assign('phase', $phase);

$smarty->display('default/pick.tpl');
?>