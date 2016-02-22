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
$allowed = Auth::isAllowed(5);


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 


$sql = 'SELECT id_equipes, nom FROM equipes ORDER BY nom';  
$database->setQuery($sql);
$database->getQuery()->execute();

try
{
    while($team = $database->getQuery()->fetch(PDO::FETCH_ASSOC)) 
    {
        $teams[] = $team;        
    }
}
catch(PDOException $e)
{
    echo 'Base de données est indisponible pour le moment!';
    exit;
}





// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('teams', $teams);



$smarty->display(DOCUMENT_ROOT.'/templates/default/admin/index.tpl');	
?>