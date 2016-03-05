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

$sql = 'SELECT id_joueur, pseudo FROM joueurs ORDER BY pseudo';
$query = new Query($database, $sql);
if($query->execute())
{
    $joueurs = $query->getResult();    
}
else
{
    echo 'ERROR';
    exit;
}






// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('joueurs', $joueurs);

$smarty->display(DOCUMENT_ROOT.'/templates/default/admin/joueurs.tpl');	
?>