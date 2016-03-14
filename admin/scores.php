<?php

session_start();
require_once('../class/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');

$connected = false;
$allowed = false;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();

$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);

//	Test whether the user has admin privilege
if(!$connected && !$allowed)
{
    header('Location: '.DOCUMENT_ROOT.'/index.php');
} 

$id_tournoi=1;
if(isset($_GET['id_tournoi'])) $id_tournoi=$_GET['id_tournoi'];

$connexion = $database->getConnection();

//	Get the Tournoi information
$sql="SELECT * FROM tournoi WHERE id_tournoi=:id";
$query=$connexion->prepare($sql);
$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);
if($query->execute())
{
	$tournoi = $query->fetch(PDO::FETCH_ASSOC);
}
else {echo 'ERREUR SQL TOURNOI'; exit;}

//	Get the Groupes information relative to its Tournoi
$groupes='';
$sql="SELECT * FROM groupes_pool WHERE id_tournoi=:id";
$query=$connexion->prepare($sql);
$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);
if($query->execute())
{
	$groupes = $query->fetchAll(PDO::FETCH_ASSOC);
}
else {echo 'ERREUR SQL GROUPES'; exit;}

if ($tournoi['joueurParTeam']>1)
	include_once(DOCUMENT_ROOT.'/admin/modules/scoresPools.php');
else
	include_once(DOCUMENT_ROOT.'/admin/modules/scoresRounds.php');

?>