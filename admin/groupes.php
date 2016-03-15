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

$id_tournoi = 0;


if(isset($_GET['id_tournoi']))
{
    $id_tournoi = $_GET['id_tournoi'];
}

if(isset($_POST['id_tournoi']) && isset($_POST['nbrgroupes']) )
{
    $nbr_grp = $_POST['nbrgroupes'];
    $id_tournoi = $_POST['id_tournoi'];

    $sql = 'DELETE FROM groupes_pool WHERE id_tournoi=:id';
    $query = new Query($database, $sql);
    $query->bind('id', $id_tournoi, PDO::PARAM_INT);


    if(!$query->execute())
    {
        echo 'ERREUR GROUPES SQL DELETE ';
        exit;  
    }


    for($i=0; $i<$nbr_grp; $i++)
    {
        $sql = 'INSERT INTO groupes_pool (id_tournoi,nom_groupe) VALUES (:id,:nom)';
        $query = new Query($database, $sql);
        $query->bind('id', $id_tournoi, PDO::PARAM_INT);
        $query->bind('nom', 'Groupe '.($i+1), PDO::PARAM_STR);
        if(!$query->execute())
        {
            echo 'ERREUR GROUPES SQL INSERTION '.$i;
            exit;
        }
    }
}

$sql = 'SELECT * FROM tournoi WHERE id_tournoi=:id';
$query = new Query($database, $sql);
$query->bind('id', $id_tournoi, PDO::PARAM_INT);	
if($query->execute())
{
    $tournoi = $query->getResult()[0];
}
else
{
    echo 'ERREUR TOURNOI SQL';
    exit;
}

$jpt = $tournoi['joueurParTeam'];
$nomt = $tournoi['nomTournoi'];


$participants = '';
if($jpt > 1)
{
    $sql = 'SELECT et.id_equipe, e.nom FROM equipes_tournoi as et, equipes as e
    WHERE et.id_tournoi=:id AND e.id_equipes=et.id_equipe
    ORDER BY e.nom';
    $query = new Query($database, $sql);
    $query->bind('id', $id_tournoi, PDO::PARAM_INT);	
    if($query->execute())
    {
        $i = 0;
        foreach($query->getResult() as $li)
        {
            $participants[$i]['id'] = $li['id_equipe'];
            $participants[$i]['nom'] = $li['nom'];
            $i++;
        }
    }
    else
    {
        echo 'ERREUR PARTICIPANTS TEAM SQL';
        exit;
    }
}
else
{
    $sql = 'SELECT jt.id_joueur, j.pseudo FROM joueurtournoi as jt, joueurs as j
    WHERE jt.id_tournoi=:id AND j.id_joueur=jt.id_joueur
    ORDER BY j.pseudo';
    $query = new Query($database, $sql);
    $query->bind('id', $id_tournoi, PDO::PARAM_INT);
    if($query->execute())
    {
        $i = 0;
        foreach($query->getResult() as $li)
        {
            $participants[$i]['id'] = $li['id_joueur'];
            $participants[$i]['nom'] = $li['pseudo'];
            $i++;
        }
    }
    else
    {
        echo 'ERREUR PARTICIPANTS JOUEUR SQL';
        exit;
    }				
}


$sql = 'SELECT * FROM groupes_pool WHERE id_tournoi=:id ORDER BY nom_groupe';
$query = new Query($database, $sql);
$query->bind('id', $id_tournoi, PDO::PARAM_INT);	
if($query->execute())
{
    $groupes = $query->getResult();
}
else
{
    echo 'ERREUR GROUPES READ SQL';
    exit;
}
$nbr_groupes = count($groupes);









// send to the template
$smarty->assign('con', $connected);
$smarty->assign('chat', $chatIsActive);
$smarty->assign('tournoi', $tournoi);
$smarty->assign('groupes', $groupes);
$smarty->assign('participants', $participants);
$smarty->assign('nbr_groupes', $nbr_groupes);






$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/groupes.tpl');	


?>

