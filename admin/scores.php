<?php

session_start();
require_once('../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');

$connected = false;
$allowed = false;
$database = new Database();
$smarty = new Smarty_HEHLan();

$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);

//	Test whether the user has admin privilege
if(!$connected && !$allowed)
{
    header('Location: '.DOCUMENT_ROOT.'/index.php');
} 

$nbrteam = 0;
$id_tournoi = 1;
if(isset($_GET['id_tournoi']))
{
    $id_tournoi = $_GET['id_tournoi'];
}

if($id_tournoi == 3)
{
    // Get the Tournoi information
    $sql = 'SELECT * FROM tournoi WHERE id_tournoi=:id';
    $query = new Query($database, $sql);
    $query->bind(':id', $id_tournoi, PDO::PARAM_INT);
    if($query->execute())
    {
        $tournoi = $query->getResult()[0];
    }
    else
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - SQL TOURNOI';
        }
        exit;     
    }
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
    if($glob_debug)
    {
        echo 'ERREUR - SQL GROUPES';
    }
    exit; 
}



//SQL Query to count the number of matchs for a tournament and a looser bracket
$sql = 'SELECT COUNT(*) AS nbr
        FROM matchs
        WHERE id_groupe IS NULL AND id_tournoi=:idt AND looser_bracket=2';
$query = new Query($database, $sql);
$query->bind(':idt', $id_tournoi, PDO::PARAM_INT);
if (!$query->execute())
{
    global $glob_debug;
    if($glob_debug)
    {
        echo 'ERREUR - SQL COUNT LB2';
    }
    exit;
}
else
{
    $nbr_lb2 = $query->getResult()[0];
    $nbr_lb2 = $nbr_lb2['nbr'];
}


// Setting the loser brackets
$nbr_lb2 = 0;
$nbr_lb3 = 0;

//SQL Query to count the number of matchs for a tournament and a double looser bracket
$sql = 'SELECT COUNT(*) AS nbr
        FROM matchs
        WHERE id_groupe IS NULL AND id_tournoi=:idt AND looser_bracket=3';
$query = new Query($database, $sql);
$query->bind(':idt', $id_tournoi, PDO::PARAM_INT);
if (!$query->execute())
{
    global $glob_debug;
    if($glob_debug)
    {
        echo 'ERREUR - SQL COUNT LB3';
    }
    exit;
}
else
{
    $nbr_lb3 = $query->getResult()[0];
    $nbr_lb3 = $nbr_lb3['nbr'];
}

// Select the Pool or Round mode
$tournoi = $database->getTournament($id_tournoi);



if ($tournoi['joueurParTeam'] > 1)
{
    include_once(DOCUMENT_ROOT.'/admin/modules/scoresPools.php');
}
else
{
    include_once(DOCUMENT_ROOT.'/admin/modules/scoresRounds.php');
}

?>
