<?php

session_start();
require_once('common/utils.php');
require_once('class/Smarty_HEHLan.class.php');
require_once('class/Database.class.php');
require_once('class/Auth.class.php');

// Variables
$connected = true;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();
$connexion = $database->getConnection();

// ******************** test purposals -> don't touch!!!! **********************
//
//$sql = 'SELECT * FROM groupes_pool WHERE id_tournoi=:id';
//$query = new Query($database, $sql);
//$query->bind(':id', $id_tournoi, PDO::PARAM_INT);
//if ($query->execute())
//{
//    $groupes = $query->getResult();
//}
//else
//{
//    echo 'ERREUR SQL GROUPES';
//    exit;
//}
//
// *****************************************************************************

// recuperer les maps
$sql = "select * from hotsmaps";
$query = new Query($database, $sql);
 
if($query->execute()){
    $maps = $query->getResult();
}
else
{
    echo 'ERREUR SQL MAPS';
    exit;
}

$connected = Auth::isLogged();

// Applying Template
$smarty->assign('con', $connected);
$smarty->assign('chat', $chatIsActive);
$smarty->assign('maps', $maps);
$smarty->display('default/pick.tpl');
?>