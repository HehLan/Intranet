<?php
require_once('../common/head.php');

$id_equipes = $_POST['id_equipes'];

$sql = "SELECT j.pseudo, empl.id_emplacement, e.nom
	FROM `equipes_joueur` AS `ej` , `joueurs` AS `j` , `equipes` AS `e` , `emplacement` AS `empl`
	WHERE ej.id_joueur = j.id_joueur
	AND ej.id_equipes = :id_equipes
	AND ej.id_equipes = e.id_equipes
	AND j.id_emplacement = empl.id_emplacement";
$query = new Query($database, $sql);
$query->bind('id_equipes', $id_equipes, PDO::PARAM_INT);
if ($query->execute())
{
    $emplacements = $query->getResult();
}
else
{
	global $glob_debug;
	if($glob_debug)
		echo 'ERREUR SQL EMPLACEMENTS EQUIPE';
    exit;
}


$pseudo = array();
$nomequipes = array();
$sql = "SELECT pseudo,equipes.nom 
	FROM equipes_joueur,joueurs,equipes 
	WHERE joueurs.id_joueur=equipes_joueur.id_joueur 
	AND equipes_joueur.id_equipes=:id_equipes 
	AND equipes.id_equipes=equipes_joueur.id_equipes 
	ORDER BY pseudo ASC ";
$query = new Query($database, $sql);
$query->bind('id_equipes', $id_equipes, PDO::PARAM_INT);
if ($query->execute())
{
    $equipes = $query->getResult();
	foreach($equipes as $equipe) {
		$nomequipes[] = $equipe['nom'];
		$pseudo[] = $equipe['pseudo'];
	}
}
else
{
	global $glob_debug;
	if($glob_debug)
		echo 'ERREUR SQL PSEUDO EQUIPE';
    exit;
}


$nomTournoi = array();
$sql = "SELECT nomTournoi 
	FROM equipes_tournoi, tournoi 
	WHERE equipes_tournoi.id_equipe=:id_equipes 
	AND tournoi.id_tournoi=equipes_tournoi.id_tournoi";
$query = new Query($database, $sql);
$query->bind('id_equipes', $id_equipes, PDO::PARAM_INT);
if ($query->execute())
{
    $tournois = $query->getResult();
	foreach($tournois as $tournoi) {
		$nomTournoi[] = $tournoi['nomTournoi'];
	}
}
else
{
	global $glob_debug;
	if($glob_debug)
		echo 'ERREUR SQL TOURNOIS EQUIPE';
    exit;
}


$smarty->assign('emplacements',$emplacements);
$smarty->assign('nomequipe',$nomequipes[0]);
$smarty->assign('pseudo',implode(', ', $pseudo));
$smarty->assign('nomtournoi',implode(', ', $nomTournoi));

$smarty->display('admin/color_equipe.tpl');
?>