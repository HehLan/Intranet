<?php

session_start();
require_once('common/connect.php');
require_once('common/utils.php');
require_once('common/getNextMatches.php');
require_once('common/getNavTournois.php');
require_once('class/Smarty_HEHLan.class.php');

$con = false;
$nbrteam = 0;
$smarty = new Smarty_HEHLan();


if (isset($_SESSION['id_joueur'])) {
    if (($_SESSION['id_joueur'] != 0))
        $con = true;
}

//The tournament id is get from the url which is get by the href of navigation tabs
$id_tournoi = 1;
if (isset($_GET['id']))
    $id_tournoi = $_GET['id'];

//SQL Query to select data of the tournament
$sql = 'SELECT * FROM tournoi WHERE id_tournoi=:id';
$query = $connexion->prepare($sql);
$query->bindValue(':id', $id_tournoi, PDO::PARAM_INT);
if ($query->execute())
    $tournoi = $query->fetch(PDO::FETCH_ASSOC);
else {
    echo 'ERREUR SQL TOURNOI';
    exit;
}

//SQL Query to select pools for this tournament
$groupes = '';
$sql = 'SELECT * FROM groupes_pool WHERE id_tournoi=:id';
$query = $connexion->prepare($sql);
$query->bindValue(':id', $id_tournoi, PDO::PARAM_INT);
if ($query->execute())
    $groupes = $query->fetchAll(PDO::FETCH_ASSOC);
else {
    echo 'ERREUR SQL GROUPES';
    exit;
}

if( $tournoi['joueurParTeam'] > 1)
	include_once('tournoisPools.php');
else
	include_once('tournoisRounds.php');

?>