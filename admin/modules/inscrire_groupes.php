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



if(isset($_POST['id_tournoi']))
{
    $id_tournoi=$_POST['id_tournoi'];
}
else
{
    exit;
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
    global $glob_debug;
    if($glob_debug)
    {
        echo 'ERREUR TOURNOI SQL';
    }
    exit;    
}

$jpt = $tournoi['joueurParTeam'];
$nomt = $tournoi['nomTournoi'];

$sql = 'SELECT * FROM groupes_pool WHERE id_tournoi=:id ORDER BY nom_groupe';
$query = new Query($database, $sql);
$query->bind('id', $id_tournoi, PDO::PARAM_INT);	
if($query->execute())
{
    $groupes = $query->getResult();
}
else
{
    global $glob_debug;
    if($glob_debug)
    {
        echo 'ERREUR GROUPES READ SQL';
    }
    exit; 
}
$nbr_groupes = count($groupes);



foreach($groupes  as $groupe)
{

    $sql = 'DELETE FROM matchs WHERE id_tournoi=:idt AND id_groupe=:idg';
    $query = new Query($database, $sql);
    $query->bind('idt', $id_tournoi, PDO::PARAM_INT);	
    $query->bind('idg', $groupe['id_groupe'], PDO::PARAM_INT);	
    if(!$query->execute())
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR MATCHS DELETE SQL';
        }
        exit; 
    }

    if($jpt>1)
    {
        $sql = 'DELETE FROM equipes_groupes WHERE id_groupe=:idg';
        $query = new Query($database, $sql);	
        $query->bind('idg', $groupe['id_groupe'], PDO::PARAM_INT);	
	
        if(!$query->execute())
        {
            global $glob_debug;
            if($glob_debug)
            {
                echo 'ERREUR EQUIPE_GROUPE DELETE SQL';
            }
            exit; 
        }	
	
        $sql = 'SELECT et.id_equipe as id FROM equipes_tournoi as et
        WHERE et.id_tournoi=:id';
        $query = new Query($database, $sql);
        $query->bind('id', $id_tournoi, PDO::PARAM_INT);	
        if($query->execute())
        {
            $participants = $query->getResult();
        }
        else
        {
            global $glob_debug;
            if($glob_debug)
            {
                echo 'ERREUR PARTICIPANTS TEAM SQL';
            }
            exit;            
        }
		
        foreach($participants as $parti)
        {
            if(isset($_POST['parti_'.$parti['id']]))
            {
                if ($_POST['parti_'.$parti['id']] == $groupe['id_groupe'])
                {
                    $sql = 'INSERT INTO equipes_groupes (id_equipe,id_groupe)
                    VALUES (:ide,:idg)';
                    $query = new Query($database, $sql);
                    $query->bind('ide', $parti['id'], PDO::PARAM_INT);	
                    $query->bind('idg', $groupe['id_groupe'], PDO::PARAM_INT);                  
                    if(!$query->execute())
                    {
                        global $glob_debug;
                        if($glob_debug)
                        {
                            echo 'ERREUR INSERT PARTICIPANTS GROUPE';
                        }
                        exit;  
                    }
                }
            }
        }

        $sql = 'SELECT id_equipe as id FROM equipes_groupes WHERE id_groupe=:idg';
        $query = new Query($database, $sql);
        $query->bind('idg', $groupe['id_groupe'], PDO::PARAM_INT);		
        if($query->execute()) 
        {
            $equipes = $query->getResult();
        }
        else
        {
            global $glob_debug;
            if($glob_debug)
            {
                echo 'ERREUR SELECT PARTICIPANTS GROUPE';
            }
            exit;            
        }
		
        $nbr_equipes = count($equipes);
		
        $h_start = $tournoi['heure_groupe_start'];
        
        switch($nbr_equipes)
        {
            case 2 :
                creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[1]['id']);

                                    break;
            case 3 :
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[1]['id']);			
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[2]['id']);	
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[1]['id'],$equipes[2]['id']);													
                                    break;
            case 4 :
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[1]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[2]['id'],$equipes[3]['id']);
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[2]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[1]['id'],$equipes[3]['id']);
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[3]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[1]['id'],$equipes[2]['id']);						
                                    break;
            case 5 :
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[1]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[2]['id'],$equipes[3]['id']);
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);	

                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[1]['id'],$equipes[2]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[4]['id'],$equipes[3]['id']);
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);

                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[4]['id'],$equipes[2]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[3]['id']);
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);

                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[4]['id'],$equipes[0]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[1]['id'],$equipes[3]['id']);
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);

                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[2]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[1]['id'],$equipes[4]['id']);

                                    break;
            case 6 :
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[1]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[2]['id'],$equipes[3]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[4]['id'],$equipes[5]['id']);											
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);

                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[1]['id'],$equipes[2]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[4]['id'],$equipes[3]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[5]['id']);											
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);

                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[3]['id'],$equipes[5]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[1]['id'],$equipes[4]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[2]['id'],$equipes[0]['id']);											
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);

                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[2]['id'],$equipes[5]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[0]['id'],$equipes[4]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[1]['id'],$equipes[3]['id']);											
                                    $h_start=ajouter_heures($h_start,$tournoi['duree_inter_match']);

                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[2]['id'],$equipes[4]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[1]['id'],$equipes[5]['id']);
                                    creer_match_equipe($database,$id_tournoi,$groupe['id_groupe'],$tournoi['nombreManche'],$tournoi['teamParMatch'],
                                                                            $h_start,$equipes[3]['id'],$equipes[0]['id']);											

                                    break;						

        }
		
	}
	else
	{
            $sql = 'DELETE FROM joueurs_groupes WHERE id_groupe=:idg';
            
            $query = new Query($database, $sql);
            $query->bind('idg', $groupe['id_groupe'], PDO::PARAM_INT);
            
            if(!$query->execute())
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERREUR JOUEUR_GROUPE DELETE SQL';
                }
                exit;                
            }	
	
            $sql = 'SELECT jt.id_joueur as id FROM joueurtournoi as jt
		WHERE jt.id_tournoi=:id';
            $query = new Query($database, $sql);
            $query->bind('id', $id_tournoi, PDO::PARAM_INT);

            if($query->execute())
            {
                $participants = $query->getResult();
            }
            else
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERREUR PARTICIPANTS TEAM SQL';
                }
                exit;                
            }		
		

            foreach($participants as $parti)
            {
                if(isset($_POST['parti_'.$parti['id']]))
                {
                    if ($_POST['parti_'.$parti['id']] == $groupe['id_groupe'])
                    {
                        $sql = 'INSERT INTO joueurs_groupes (id_joueur,id_groupe)
                        VALUES (:idj,:idg)';
                        $query = new Query($database, $sql);
                        $query->bind('idj', $parti['id'], PDO::PARAM_INT);	
                        $query->bind('idg', $groupe['id_groupe'], PDO::PARAM_INT);
                        if(!$query->execute())
                        {
                            global $glob_debug;
                            if($glob_debug)
                            {
                                echo 'ERREUR INSERT PARTICIPANTS GROUPE';
                            }
                            exit; 
                        }
                    }
                }
            }	
		
            $sql = 'INSERT INTO matchs (id_tournoi,nbr_manche,teamParMatch,heure,id_groupe)
		VALUES (:idt,:nbrm,:tpm,:heure,:idg)';
            $query = new Query($database, $sql);
            $query->bind('idt', $id_tournoi, PDO::PARAM_INT);	
            $query->bind('idg', $groupe['id_groupe'], PDO::PARAM_INT);	
            $query->bind('nbrm', $tournoi['nombreManche'], PDO::PARAM_INT);	
            $query->bind('tpm', $tournoi['teamParMatch'], PDO::PARAM_INT);	
            $query->bind('heure', $tournoi['heure_groupe_start'], PDO::PARAM_INT);
            if(!$query->execute())
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERREUR INSERT MATCHS (JOUEURS)';
                }
                exit;               
            }	
	
            
            $id_match = $connexion->lastInsertId();

            $sql = 'INSERT INTO matchs_joueurs (id_match,id_joueur)
			SELECT :idm,jg.id_joueur FROM 
			joueurs_groupes as jg WHERE jg.id_groupe=(
			SELECT m.id_groupe FROM matchs as m WHERE m.id_match=:idm)';
            $query = new Query($database, $sql);
            $query->bind('idm', $id_match, PDO::PARAM_INT);				
            if(!$query->execute())
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERREUR INSERT MATCHS_JOUEURS';
                }
                exit; 
            }
	}
	
}
//header('Location: tournois.php');

?>