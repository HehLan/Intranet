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



$sql = 'SELECT * FROM emplacement where id_emplacement!=0';
$database->setQuery($sql);
$database->getQuery()->execute();
while($location = $database->getQuery()->fetch(PDO::FETCH_ASSOC)) 
{
    $locations[] = $location;
}       	


$sql = 'SELECT * FROM emplacement,joueurs WHERE joueurs.id_emplacement=emplacement.id_emplacement and emplacement.id_emplacement!=0';
$database->setQuery($sql);
$database->getQuery()->execute();
while($location_1 = $database->getQuery()->fetch(PDO::FETCH_ASSOC)) 
{
    $locations_1[] = $location_1;
    $id_joueur = $location_1['id_joueur'];

    $sql = 'SELECT * FROM equipes,equipes_joueur where equipes_joueur.id_joueur='.$id_joueur.' and equipes.id_equipes=equipes_joueur.id_equipes';
    $database->setQuery($sql);
    $database->getQuery()->execute();
    $teams = array();
    while($location_2 = $database->getQuery()->fetch(PDO::FETCH_ASSOC)) 
    {
        $teams[] = $location_2['nom'];        
    }         
}



// Selection des pseudos
$sql = 'SELECT pseudo,id_emplacement FROM joueurs ORDER BY pseudo ASC';
$database->setQuery($sql);
$database->getQuery()->execute();
while($joueur = $database->getQuery()->fetch(PDO::FETCH_ASSOC)) 
{
    $joueurs[] = $joueur;
}

                

// Selection des équipes		
$sql = 'SELECT id_equipes,nom from equipes order by nom ASC';
$database->setQuery($sql);
$database->getQuery()->execute();
while($equipe = $database->getQuery()->fetch(PDO::FETCH_ASSOC)) 
{
    $equipes[] = $equipe;  						
}



$sql = 'SELECT * FROM emplacement';
$database->setQuery($sql);
$database->getQuery()->execute();
while($emplacement = $database->getQuery()->fetch(PDO::FETCH_ASSOC)) 
{
    $emplacements[] = $emplacement;
}


// Selection des pseudos			
$sql = 'SELECT pseudo FROM joueurs ORDER BY pseudo ASC';
$database->setQuery($sql);
$database->getQuery()->execute();
while($joueur_autre = $database->getQuery()->fetch(PDO::FETCH_ASSOC)) 
{
    $joueurs_autre[] = $joueur_autre;
}





// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('locations', $locations);
$smarty->assign('locations_1', $locations_1);

$smarty->assign('teams', $teams);
$smarty->assign('joueurs', $joueurs);
$smarty->assign('equipes', $equipes);
$smarty->assign('emplacements', $emplacements);
$smarty->assign('joueurs_autre', $joueurs_autre);








$smarty->display(DOCUMENT_ROOT.'/templates/default/admin/emplacements.tpl');	
?>