<?php

session_start();
require_once('class/var.conf.php');
require_once(DOCUMENT_ROOT . '/common/utils.php');
require_once(DOCUMENT_ROOT . '/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT . '/class/Database.class.php');
require_once(DOCUMENT_ROOT . '/class/Auth.class.php');
require_once(DOCUMENT_ROOT . '/class/Query.class.php');

// Variables
$database = new Database();
$smarty = new Smarty_HEHLan();
$connexion = $database->getConnection();
$playerId = $_GET['id'];
$matchId = $_GET['idMatch'];
$opponentId = '';
$opponentNickname = '';

// eviter que qqn non logué y accède
$connected = Auth::isLogged();
if (!$connected) {
    echo "Get da fuck out !!!";
    die();
}

// ********************** recuperer les maps **********************
$maps;
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
$playerNickname;
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
$opponentId;
$opponentNickname;
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

// ********************** verifier l'existence de la table temporaire, sinon creer **********************
$sql = "SHOW TABLES LIKE 'pick_$matchId'";
$query = new Query($database, $sql);
if ($query->execute()) {
    $result = $query->getResult();
} else {
    global $glob_debug;
    if ($glob_debug)
        echo 'ERREUR SQL MAPS';
    exit;
}

// si la table existe --> 
// recuperer les id's et les etats 'checked'
// determiner à qui le tour
if (count($result) > 0) { 
    $sql = "SELECT mapId, checked FROM pick_$matchId";
    $query = new Query($database, $sql);
    echo 'table exists';
    $pickState = $query->getResult();
    // TODO
} 
// si la table n'exitste pas --> creer et remplire
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
    
    // ajouter des infos dans la table matchs
    // TODO
}


// ********************** Applying Template **********************
$smarty->assign('con', $connected);
$smarty->assign('maps', $maps);
$smarty->assign('playerId', $playerId);
$smarty->assign('playerNickname', $playerNickname);
$smarty->assign('opponentId', $opponentId);
$smarty->assign('opponentNickname', $opponentNickname);
$smarty->assign('matchId', $matchId);

$smarty->display('default/pick.tpl');
?>