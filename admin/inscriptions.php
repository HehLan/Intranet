<?php

session_start();
require_once('../common/utils.php');
require_once('../class/Smarty_HEHLan.class.php');
require_once('../class/Database.class.php');
require_once('../class/Auth.class.php');
require_once('../class/Query.class.php');



$connected = false;
$allowed = false;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 


/**********************************
 *	tournois avec equipes
 **********************************/
$sql = 'SELECT id_tournoi, nomTournoi FROM tournoi WHERE joueurParTeam = 5';
$query = new Query($database, $sql);
$query->execute();

$select = "SELECT e.*";
$lefton = " FROM  equipes e";
$i = 0;
foreach($query->getResult() as $tournoi)
{
    $tab[$i][1] = $tournoi['id_tournoi'];
    $tab[$i][2] = $tournoi['nomTournoi'];
    $select.=", et".$tournoi['id_tournoi'].".id_tournoi AS id_tournoi".$tournoi['id_tournoi'];
    $lefton.=" LEFT OUTER JOIN equipes_tournoi AS et".$tournoi['id_tournoi']." ON et".$tournoi['id_tournoi'].".id_equipe = e.id_equipes AND et".$tournoi['id_tournoi'].".id_tournoi = ".$tournoi['id_tournoi'];
    $i++;
}
$sql = $select.$lefton.' ORDER BY e.nom';
$query = new Query($database, $sql);
$query->execute();
$donnees = $query->getResult();



/**********************************
 *	tournois individuels
 **********************************/
$sql = 'SELECT id_tournoi, nomTournoi FROM tournoi WHERE joueurParTeam = 1';
$query = new Query($database, $sql);
$query->execute();

$select = "SELECT j.*";
$lefton = " FROM  joueurs j";
$i = 0;
foreach($query->getResult() as $tournoi)
{
    $tabJT[$i][1] = $tournoi['id_tournoi'];
    $tabJT[$i][2] = $tournoi['nomTournoi'];
    $select.=", jt".$tournoi['id_tournoi'].".id_tournoi AS id_tournoi".$tournoi['id_tournoi'].", jt".$tournoi['id_tournoi'].".pseudoJeux AS pseudoJeux".$tournoi['id_tournoi'];
    $lefton.=" LEFT OUTER JOIN joueurtournoi AS jt".$tournoi['id_tournoi']." ON jt".$tournoi['id_tournoi'].".id_joueur = j.id_joueur AND jt".$tournoi['id_tournoi'].".id_tournoi = ".$tournoi['id_tournoi'];
    $i++;
}
$sql = $select.$lefton.' ORDER BY j.pseudo';
$query = new Query($database, $sql);
$query->execute();
$donneesJT = $query->getResult();                             
				



// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('tab', $tab);
$smarty->assign('donnees', $donnees);
$smarty->assign('tabJT', $tabJT);
$smarty->assign('donneesJT', $donneesJT);



$smarty->display(DOCUMENT_ROOT.'/templates/default/admin/inscriptions.tpl');	
?>