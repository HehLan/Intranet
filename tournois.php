<?php

session_start();
require_once('/class/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


$connected = false;
$nbrteam = 0;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();

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
    include_once(DOCUMENT_ROOT.'/modules/tournoisPools.php');
}
else
{
    include_once(DOCUMENT_ROOT.'/modules/tournoisRounds.php');
}

?>