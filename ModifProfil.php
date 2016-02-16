<?php

session_start();
require_once('common/connect.php');
require_once('common/utils.php');
require_once('common/getNextMatches.php');
require_once('common/getNavTournois.php');
require_once('class/Smarty_HEHLan.class.php');

$con = false;
$chat = false;
$smarty = new Smarty_HEHLan();

if (isset($_SESSION['id_joueur'])) {
    if (($_SESSION['id_joueur'] != 0))
        $con = true;
}

if (!$con) {
    if (isset($_POST['login']) && isset($_POST['pwd'])) {
        $sql = "SELECT id_joueur,level FROM joueurs WHERE pseudo=:login and password=:pwd";
        $query = $connexion->prepare($sql);
        $query->bindValue('login', $_POST['login'], PDO::PARAM_STR);
        $query->bindValue('pwd', sha1($_POST['pwd']), PDO::PARAM_STR);
        if ($query->execute()) {
            $rst = $query->fetch(PDO::FETCH_ASSOC);
            if (!is_null($rst['id_joueur'])) {
                $_SESSION['id_joueur'] = $rst['id_joueur'];
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['level'] = $rst['level'];
                $con = true;
            }
        } else {
            echo 'ERREUR LOGIN SQL';
        }
    }
}

function isPlay($idJoueur, $idTournoi, &$connexion, &$pseudoJeux) {
    $sqlPlay = 'SELECT * FROM joueurtournoi WHERE id_joueur = :id_joueur AND id_tournoi = :id_tournoi';
    try {
        $req = $connexion->prepare($sqlPlay);
        $req->execute(array(
            'id_joueur' => $idJoueur,
            'id_tournoi' => $idTournoi
        ));
        $jeux = $req->fetch();
        if (empty($jeux)) {
            //do not play at this game
            return '';
        } else {
            $pseudoJeux = $jeux['pseudoJeux'];
            //play at this game
            return 'checked';
        }
    } catch (PDOException $e) {
        return '';
    }
}

$sql = 'SELECT j.*, e.nom AS team
		FROM  joueurs j
		LEFT OUTER JOIN equipes_joueur ej ON j.id_joueur = ej.id_joueur
		LEFT OUTER JOIN equipes e ON e.id_equipes = ej.id_equipes
		WHERE j.id_joueur = :idj';
$query = $connexion->prepare($sql);
$query->bindValue("idj", $_SESSION['id_joueur'], PDO::PARAM_INT);
$query->execute();
$joueur = $query->fetch();
$pseudoJeux = '';


// Selecting player profile information	
$sql = 'SELECT * FROM joueurs WHERE id_joueur = :id_player';
$query = $connexion->prepare($sql);
$query->bindValue(":id_player", $_SESSION['id_joueur'], PDO::PARAM_INT);
$query->execute();
$joueur = $query->fetch(PDO::FETCH_OBJ);


$smarty->assign("con", $con);
$smarty->assign("next_matches", getNextMatches());
$smarty->assign("navTournois", getNavTournois());
$smarty->assign("joueur", $joueur);
$smarty->display('templates/default/player_change.tpl');
?>




