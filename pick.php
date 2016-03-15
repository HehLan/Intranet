<?php

session_start();
require_once('/class/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');

// Variables
$database = new Database();
$smarty = new Smarty_HEHLan();
$connexion = $database->getConnection();
$userId = $_GET['id'];
$matchId = $_GET['idMatch'];

$connected = Auth::isLogged();
if (!$connected) {
    echo "Get da fuck out !!!";
    die();
}

// recuperer les maps
$sql = "select * from hotsmaps";
$query = new Query($database, $sql);
if ($query->execute())
{
    $maps = $query->getResult();
}
else
{
    global $glob_debug;
    if($glob_debug)
    {
        echo 'ERREUR SQL MAPS';
    }
    exit; 
}

// get player nickname
$sql = 'SELECT pseudo FROM joueurs WHERE id_joueur=:userId';
$query = new Query($database, $sql);
$query->bind(':userId', $userId, PDO::PARAM_INT);

if ($query->execute())
{
    // Test if the user has a pseudo or not
    if ($query->getResult())
    {
        $playerNickname = $query->getResult()[0]['pseudo'];
    }
    else
    {
        $playerNickname = 'unknown';
    }
}
else
{
    global $glob_debug;
    if($glob_debug)
    {
        echo 'ERREUR SQL MAPS';
    }
    exit;
}

// Applying Template
$smarty->assign('con', $connected);
$smarty->assign('maps', $maps);
$smarty->assign('userId', $userId);
$smarty->assign('playerNickname', $playerNickname);
$smarty->assign('matchId', $matchId);

$smarty->display('default/pick.tpl');
?>