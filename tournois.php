<?php

session_start();
require_once('common/utils.php');
require_once('common/connect.php');
require_once('class/Smarty_HEHLan.class.php');
require_once('class/Database.class.php');
require_once('class/Query.class.php');


$con = false;
$nbrteam = 0;
$database = new Database();
$smarty = new Smarty_HEHLan();


if (isset($_SESSION['id_joueur']))
{
    if (($_SESSION['id_joueur'] != 0))
    {
        $con = true;
    }
}

$id_tournoi = 1;
if (isset($_GET['id']))
{
    $id_tournoi = $_GET['id'];
}


//SQL Query to select pools for this tournament
$groupes = '';
$sql = 'SELECT * FROM groupes_pool WHERE id_tournoi=:id';
$query = new Query($database, $sql);
$query->bind(':id', $id_tournoi, PDO::PARAM_INT);
if ($query->execute())
{
    $groupes = $query->getResult();
}
else
{
	global $glob_debug;
	if ($glob_debug)
		echo 'ERREUR SQL GROUPES';
    exit;
}

$tournoi = $database->getTournament($id_tournoi);

if( $tournoi['joueurParTeam'] > 1)
{
    include_once(DOCUMENT_ROOT.'/common/tournoisPools.php');
}
else
{
    include_once(DOCUMENT_ROOT.'/common/tournoisRounds.php');
}

?>