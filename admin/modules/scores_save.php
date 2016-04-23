<?php


session_start();
require_once('../../common/var.conf.php');
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


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 

$id_tournoi = 1;

if(isset($_POST['id_tournoi']))
{
    $id_tournoi = $_POST['id_tournoi'];
}
else
{
    exit;
}

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
        echo 'ERREUR SQL TOURNOI';
    }
    exit;   
}

$jpt = $tournoi['joueurParTeam'];

if($jpt > 1)
{
    $manches = '';
    $sql = 'SELECT m.nbr_manche,m.id_match,me.id_equipe
            FROM matchs as m,matchs_equipes as me 
            WHERE m.id_tournoi=:idt AND m.id_groupe IS NOT NULL AND me.id_match=m.id_match';
    $query = new Query($database, $sql);
    $query->bind(':idt', $id_tournoi, PDO::PARAM_INT);
    if($query->execute())
    {
        $manches = $query->getResult();
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
    
    foreach($manches as $manche)
    {
        if(isset($_POST['score_m_'.$manche['id_match'].'_p_'.$manche['id_equipe']]))
        {
            $sql = 'INSERT INTO manches_equipes (id_match, numero_manche, id_equipe,score) VALUES (:idm,:nm,:ide,:sc)
                    ON DUPLICATE KEY UPDATE score=:sc';
            $query = new Query($database, $sql);
            $query->bind(':idm', $manche['id_match'], PDO::PARAM_INT);
            $query->bind(':nm', 1, PDO::PARAM_INT);
            $query->bind(':ide', $manche['id_equipe'], PDO::PARAM_INT);
            $query->bind(':sc', $_POST['score_m_'.$manche['id_match'].'_p_'.$manche['id_equipe']], PDO::PARAM_INT);
            if(!$query->execute())
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERREUR SQL INSERT SCORE TEAM';
                }
                exit;
            }
        }
    }
}
else
{
    $manches = '';
    $sql = 'SELECT m.nbr_manche,m.id_match,mj.id_joueur
            FROM matchs as m,matchs_joueurs as mj 
            WHERE m.id_tournoi=:idt AND m.id_groupe IS NOT NULL AND mj.id_match=m.id_match';
    $query = new Query($database, $sql);
    $query->bind(':idt', $id_tournoi, PDO::PARAM_INT);
    if($query->execute())
    {
        $manches = $query->getResult();
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

    foreach($manches as $manche)
    {
        for($i=1; $i<=$manche['nbr_manche']; $i++)
        {
				print $_POST['score_m_'.$manche['id_match'].'_ma_'.$i.'_p_'.$manche['id_joueur']];
            if(isset($_POST['score_m_'.$manche['id_match'].'_ma_'.$i.'_p_'.$manche['id_joueur']]))
            {
                $sql = 'INSERT INTO manches_joueurs (id_match, numero_manche, id_joueur,score)
                        VALUES (:idm,:nm,:idj,:sc)
                        ON DUPLICATE KEY UPDATE score=:sc';
                $query = new Query($database, $sql);
                $query->bind(':idm', $manche['id_match'], PDO::PARAM_INT);
                $query->bind(':nm', $i, PDO::PARAM_INT);
                $query->bind(':idj', $manche['id_joueur'], PDO::PARAM_INT);
                $query->bind(':sc', $_POST['score_m_'.$manche['id_match'].'_ma_'.$i.'_p_'.$manche['id_joueur']], PDO::PARAM_INT);
                if(!$query->execute())
                {
                    global $glob_debug;
                    if($glob_debug)
                    {
                        echo 'ERREUR - SQL INSERT SCORE TEAM';
                    }
                    exit; 
                }
            }
        }
    }
}

header('Location: ../scores.php?id_tournoi='.$id_tournoi);

?>