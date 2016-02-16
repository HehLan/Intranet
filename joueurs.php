<?php

// Includes
session_start();
require_once('common/connect.php');
require_once('common/utils.php');
require_once('common/getNextMatches.php');
require_once('common/getNavTournois.php');
require_once('class/Smarty_HEHLan.class.php');

// Variables
$con = false;
$smarty = new Smarty_HEHLan();

// Test if a user is connected
if (isset($_SESSION['id_joueur'])) {
    if (($_SESSION['id_joueur'] != 0))
        $con = true;
}

//SQL command to get table drawing
$sql = "SELECT emplacement.id_emplacement AS id_emplacement, top, xy_left, width, height, numero, joueurs.id_joueur AS id_joueur
	FROM emplacement 
	LEFT JOIN joueurs ON emplacement.id_emplacement = joueurs.id_emplacement
	WHERE emplacement.id_emplacement != 0";
$query = $connexion->prepare($sql);
$query->execute();

// Create player locations div tags
$emplacements = array();
while ($emplacement = $query->fetch(PDO::FETCH_ASSOC)) {
    $emplacements[] = $emplacement;
}

// Create tooltip of location div tags
$sql_1 = "SELECT * FROM emplacement,joueurs
          WHERE joueurs.id_emplacement = emplacement.id_emplacement
          AND emplacement.id_emplacement != 0";
$query_1 = $connexion->prepare($sql_1);
$query_1->execute();

$emplacements1 = array();
while ($emplacement1 = $query_1->fetch(PDO::FETCH_ASSOC)) {
    $id_joueur = $emplacement1['id_joueur'];

    $sql_2 = "SELECT *
              FROM equipes, equipes_joueur
              WHERE equipes_joueur.id_joueur = '$id_joueur' AND equipes.id_equipes = equipes_joueur.id_equipes";
    $query_2 = $connexion->prepare($sql_2);
    $query_2->execute();
    $team = array();
    while ($emplacements2 = $query_2->fetch(PDO::FETCH_ASSOC)) {
        $team[] = $emplacements2['nom'];
    }
    $emplacement1['team'] = implode(', ', $team);

    $sql_3 = "SELECT nomTournoi
              FROM joueurtournoi, tournoi
              WHERE joueurtournoi.id_joueur = '$id_joueur' AND tournoi.id_tournoi = joueurtournoi.id_tournoi";
    $query_3 = $connexion->prepare($sql_3);
    $query_3->bindValue("id_joueur", $id_joueur, PDO::PARAM_INT);
    $query_3->execute();

    $nomTournoi = array();
    while ($equipe = $query_3->fetch()) {
        $nomTournoi[] = $equipe['nomTournoi'];
    }
    $emplacement1['nomTournoi'] = implode(', ', $nomTournoi);

    $emplacements1[] = $emplacement1;
}

// Selection des pseudos	
$sql = 'SELECT id_emplacement, pseudo
        FROM joueurs
        ORDER BY pseudo ASC';
$query = $connexion->prepare($sql);
$query->execute();
$joueursArray = array();
while ($joueur = $query->fetch(PDO::FETCH_ASSOC)) {
    $joueursArray[] = $joueur;
}

// Selection des équipes	
$sql = 'SELECT id_equipes,nom
        FROM equipes ORDER BY nom ASC';
$query = $connexion->prepare($sql);
$query->execute();
$equipes = array();
while ($equipe = $query->fetch(PDO::FETCH_ASSOC)) {
    $equipes[] = $equipe;
}

// Applying Template
$smarty->assign("con", $con);
$smarty->assign("next_matches", getNextMatches());
$smarty->assign("navTournois", getNavTournois());
$smarty->assign("emplacements", $emplacements);
$smarty->assign("emplacements1", $emplacements1);
$smarty->assign("joueurs", $joueursArray);
$smarty->assign("equipes", $equipes);
$smarty->display('templates/default/joueurs.tpl');
?>