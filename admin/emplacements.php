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


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 



$sql = 'SELECT * FROM emplacement where id_emplacement!=0';
$query = new Query($database, $sql);
$query->execute();
$locations = $query->getResult();     	


$sql = 'SELECT * FROM emplacement,joueurs WHERE joueurs.id_emplacement=emplacement.id_emplacement and emplacement.id_emplacement!=0';
$query = new Query($database, $sql);
$query->execute();

foreach ($query->getResult() as $location_1)
{
    $locations_1[] = $location_1;
    $id_joueur = $location_1['id_joueur'];

    $sql_2 = 'SELECT * FROM equipes,equipes_joueur where equipes_joueur.id_joueur='.$id_joueur.' and equipes.id_equipes=equipes_joueur.id_equipes';
    $query_2 = new Query($database, $sql_2);
    $query_2->execute();
    $teams = array();
    foreach ($query_2->getResult() as $location_2)
    {
        $teams[] = $location_2['nom'];        
    }         
}



// Selection des pseudos
$sql = 'SELECT pseudo,id_emplacement FROM joueurs ORDER BY pseudo ASC';
$query = new Query($database, $sql);
$query->execute();
$joueurs = $query->getResult();

                

// Selection des équipes		
$sql = 'SELECT id_equipes,nom from equipes order by nom ASC';
$query = new Query($database, $sql);
$query->execute();
$equipes = $query->getResult();



$sql = 'SELECT * FROM emplacement';
$query = new Query($database, $sql);
$query->execute();
$emplacements = $query->getResult();



// Selection des pseudos			
$sql = 'SELECT pseudo FROM joueurs ORDER BY pseudo ASC';
$query = new Query($database, $sql);
$query->execute();
$joueurs_autre = $query->getResult();



// send to the template
$smarty->assign('con', $connected);
$smarty->assign('chat', $chatIsActive);
$smarty->assign('locations', $locations);
$smarty->assign('locations_1', $locations_1);

$smarty->assign('teams', $teams);
$smarty->assign('joueurs', $joueurs);
$smarty->assign('equipes', $equipes);
$smarty->assign('emplacements', $emplacements);
$smarty->assign('joueurs_autre', $joueurs_autre);

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/emplacements.tpl');	
?>