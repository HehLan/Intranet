<?php
require_once('common/head.php');

$id_tournoi = 1;
$looser = 0;
if (isset($_GET['id']))
{
    $id_tournoi = $_GET['id'];
}
if (isset($_GET['lb']))
{
    $looser = $_GET['lb'];
}


$sql = 'SELECT * FROM tournoi WHERE id_tournoi=:id';
$query = new Query($database, $sql);
$query->bind('id', $id_tournoi, PDO::PARAM_INT);
if ($query->execute())
{
    $tournoi = $query->getResult()[0];
}
else
{
	global $glob_debug;
	if($glob_debug)
		echo 'ERREUR SQL TOURNOI';
    exit;
}

$nbr_lb2 = 0;
$nbr_lb3 = 0;
$sql = 'SELECT COUNT(*) as nbr FROM matchs WHERE id_groupe IS NULL AND id_tournoi=:idt AND looser_bracket=2';
$query = new Query($database, $sql);
$query->bind('idt', $id_tournoi, PDO::PARAM_INT);
if (!$query->execute())
{
    global $glob_debug;
	if($glob_debug)
		echo 'ERREUR SQL COUNT LB2';
    exit;
}
else
{
    $nbr_lb2 = $query->getResult()[0];
    $nbr_lb2 = $nbr_lb2['nbr'];
}


$sql = 'SELECT COUNT(*) as nbr FROM matchs WHERE id_groupe IS NULL AND id_tournoi=:idt AND looser_bracket=3';
$query = new Query($database, $sql);
$query->bind('idt', $id_tournoi, PDO::PARAM_INT);
if (!$query->execute())
{
    global $glob_debug;
	if($glob_debug)
		echo 'ERREUR SQL COUNT LB3';
    exit;
}
else
{
    $nbr_lb3 = $query->getResult()[0];
    $nbr_lb3 = $nbr_lb3['nbr'];
}




$smarty->assign("nbr_lb2", $nbr_lb2);
$smarty->assign("nbr_lb3", $nbr_lb3);

$nbrmatch = 0;
if( $tournoi['joueurParTeam'] > 1)

	include_once(DOCUMENT_ROOT.'/modules/finalesPools.php');
else
	include_once(DOCUMENT_ROOT.'/modules/finalesRounds.php');

?>