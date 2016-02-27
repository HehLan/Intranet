<?php
session_start();
require_once('common/connect.php');
require_once('common/utils.php');
require_once('class/Smarty_HEHLan.class.php');

$con = false;
$smarty = new Smarty_HEHLan();

if (isset($_SESSION['id_joueur'])) {
    if (($_SESSION['id_joueur'] != 0))
        $con = true;
}

$id_tournoi = 1;
$looser = 0;
if (isset($_GET['id']))
    $id_tournoi = $_GET['id'];
if (isset($_GET['lb']))
    $looser = $_GET['lb'];

$sql = "SELECT * FROM tournoi WHERE id_tournoi=:id";
$query = $connexion->prepare($sql);
$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);
if ($query->execute()) {
    $tournoi = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo 'ERREUR SQL TOURNOI';
    exit;
}

$nbr_lb2 = 0;
$nbr_lb3 = 0;
$sql = "SELECT COUNT(*) as nbr FROM matchs WHERE id_groupe IS NULL AND id_tournoi=:idt AND looser_bracket=2";
$query = $connexion->prepare($sql);
$query->bindValue('idt', $id_tournoi, PDO::PARAM_INT);
if (!$query->execute()) {
	echo 'ERREUR SQL COUNT LB2';
	exit;
} else {
	$nbr_lb2 = $query->fetch(PDO::FETCH_ASSOC);
	$nbr_lb2 = $nbr_lb2['nbr'];
}
$sql = "SELECT COUNT(*) as nbr FROM matchs WHERE id_groupe IS NULL AND id_tournoi=:idt AND looser_bracket=3";
$query = $connexion->prepare($sql);
$query->bindValue('idt', $id_tournoi, PDO::PARAM_INT);
if (!$query->execute()) {
	echo 'ERREUR SQL COUNT LB3';
	exit;
} else {
	$nbr_lb3 = $query->fetch(PDO::FETCH_ASSOC);
	$nbr_lb3 = $nbr_lb3['nbr'];
}
echo '<h1>Finales de ' . $tournoi['nomTournoi'] . '</h1>';
echo 'Cliquez ici pour voir les <a href="tournois.php?id=' . $id_tournoi . '">QUALIFICATIONS</a><br>';
if ($nbr_lb2 > 0)
	echo 'Cliquez ici pour voir les <a href="finales.php?id=' . $id_tournoi . '&lb=2">FINALES DES LOSERS (silver)</a><br>';
if ($nbr_lb3 > 0)
	echo 'Cliquez ici pour voir les <a href="finales.php?id=' . $id_tournoi . '&lb=3">FINALES DES ULTRA NOOBS (bronze)</a><br>';

echo '<br>';
$nbrmatch = 0;
if( $tournoi['joueurParTeam'] > 1)
	include_once('tournoisPools.php');
else
	include_once('tournoisRounds.php');

?>