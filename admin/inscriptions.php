<?php

session_start();
require_once('../common/utils.php');
require_once('../class/Smarty_HEHLan.class.php');
require_once('../class/Database.class.php');
require_once('../class/Auth.class.php');


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
$database->setQuery($sql);
$database->getQuery($sql)->execute();

$select = "SELECT e.*";
$lefton = " FROM  equipes e";
$i = 0;
while($tournoi = $database->getQuery()->fetch(PDO::FETCH_ASSOC))
{
    $tab[$i][1] = $tournoi['id_tournoi'];
    $tab[$i][2] = $tournoi['nomTournoi'];
    $select.=", et".$tournoi['id_tournoi'].".id_tournoi AS id_tournoi".$tournoi['id_tournoi'];
    $lefton.=" LEFT OUTER JOIN equipes_tournoi AS et".$tournoi['id_tournoi']." ON et".$tournoi['id_tournoi'].".id_equipe = e.id_equipes AND et".$tournoi['id_tournoi'].".id_tournoi = ".$tournoi['id_tournoi'];
    $i++;
}
$sql = $select.$lefton.' ORDER BY e.nom';
$database->setQuery($sql);
$database->getQuery()->execute();
$donnees = $database->getQuery()->fetchAll();



/**********************************
 *	tournois individuels
 **********************************/
$sql = 'SELECT id_tournoi, nomTournoi FROM tournoi WHERE joueurParTeam = 1';
$database->setQuery($sql);
$database->getQuery()->execute();

$select = "SELECT j.*";
$lefton = " FROM  joueurs j";
$i = 0;
while($tournoi = $database->getQuery()->fetch(PDO::FETCH_ASSOC))
{
    $tabJT[$i][1] = $tournoi['id_tournoi'];
    $tabJT[$i][2] = $tournoi['nomTournoi'];
    $select.=", jt".$tournoi['id_tournoi'].".id_tournoi AS id_tournoi".$tournoi['id_tournoi'].", jt".$tournoi['id_tournoi'].".pseudoJeux AS pseudoJeux".$tournoi['id_tournoi'];
    $lefton.=" LEFT OUTER JOIN joueurtournoi AS jt".$tournoi['id_tournoi']." ON jt".$tournoi['id_tournoi'].".id_joueur = j.id_joueur AND jt".$tournoi['id_tournoi'].".id_tournoi = ".$tournoi['id_tournoi'];
    $i++;
}
$sql2 = $select.$lefton.' ORDER BY j.pseudo';
$database->setQuery($sql);
$database->getQuery()->execute();
$donneesJT = $database->getQuery()->fetchAll();                             
				



// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('tab', $tab);
$smarty->assign('donnees', $donnees);
$smarty->assign('tabJT', $tabJT);
$smarty->assign('donneesJT', $donneesJT);



$smarty->display(DOCUMENT_ROOT.'/templates/default/admin/inscriptions.tpl');	
?>