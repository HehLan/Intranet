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




$id_tournoi = 0;
$looser = 0;
$creer = false;


if(isset($_GET['id_tournoi']))
{
    $id_tournoi=$_GET['id_tournoi'];
}
if(isset($_GET['looser']))
{
    $looser = $_GET['looser'];
}

if(isset($_POST['id_tournoi']))
{
    if(isset($_POST['petite_finale']))
    {
        $petite_finale = true;
    }
    else
    {
        $petite_finale = false;
    }
    $id_tournoi = $_POST['id_tournoi'];	
    $looser = $_POST['looser'];	
    $creer = true;
    if(isset($_POST['qualifs']))
    {
        $nbr_qualifs = $_POST['qualifs'];	
    }
    else
    {
        $nbrgroupes = $_POST['nbrgroupes'];
        $tgroupes = $_POST['tgroupes'];
    }
}

$sql = 'SELECT * FROM tournoi WHERE id_tournoi=:id';


$query = new Query($database, $sql);
$query->bind('id', $id_tournoi, PDO::PARAM_INT);	
if($query->execute())
{
    $tournoi = $query->getResult();
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

if($creer)
{	
    if($jpt>1)
    {
        if($nbr_qualifs!=2 && $nbr_qualifs!=4 && $nbr_qualifs!=8 && $nbr_qualifs!=16 && $nbr_qualifs!=32 &&  $nbr_qualifs!=64 &&  $nbr_qualifs!=128)
        {
            if($nbr_qualifs==192) 
            {			
                $tour2=$nbr_qualifs%128;
                $nbr_match=128;
            }
            else if ($nbr_qualifs==96)
            {
                $tour2=$nbr_qualifs%64;
                $nbr_match=64;
            }
            else if ($nbr_qualifs==48)
            {
                $tour2=$nbr_qualifs%32;
                $nbr_match=32;
            }
            else if ($nbr_qualifs==24)
            {
                $tour2=$nbr_qualifs%16;
                $nbr_match=16;
            }
            else if ($nbr_qualifs==12)
            {
                $tour2=$nbr_qualifs%8;
                $nbr_match=8;
            }
            else if ($nbr_qualifs==6)
            {
                $tour2=$nbr_qualifs%4;
                $nbr_match=4;
            }
            else if ($nbr_qualifs==3)
            {
                $tour2=$nbr_qualifs%2;
                $nbr_match=2;
            }	
            else
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERROR - Number of qualified is not supported';
                }
                exit; 
            }
			
            $sql = 'DELETE FROM matchs WHERE id_groupe IS NULL AND id_tournoi=:id AND looser_bracket=:looser';
            $query = new Query($database, $sql);
            $query->bind('id', $id_tournoi, PDO::PARAM_INT);
            $query->bind('looser', $looser, PDO::PARAM_INT);
            if(!$query->execute())
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERREUR GROUPES SQL DELETE ';
                }
                exit;     
            }

            $first = true;
            $tour = 0;
            while($nbr_match>=2)
            {
                $tour++;
                if($tour!=2)
                {
                    $nbr_match = $nbr_match>>1;
                }
                for($i=0; $i<$nbr_match; $i++)
                {
                    if($tour==2 && $i>=$tour2)
                    {
                        $id_enfant[$i>>1][$i%2] = $id_enfant[$i][$i%2];
                        continue;
                    }
                    $sql = 'INSERT INTO matchs (id_tournoi,nbr_manche,teamParMatch,looser_bracket,heure,id_enfant1,id_enfant2)
                            VALUES (:idt,:nbr,:tpm,:looser,:h,:id1,:id2)';
                    $query = new Query($database, $sql);
                    $query->bind('idt', $id_tournoi, PDO::PARAM_INT);				
                    $query->bind('nbr', $tournoi['nombreManche'], PDO::PARAM_INT);				
                    $query->bind('tpm', $tournoi['teamParMatch'], PDO::PARAM_INT);				
                    $query->bind('looser', $looser, PDO::PARAM_INT);				
                    $query->bind('h', $tournoi['heure_finale_start'], PDO::PARAM_STR);	
                    if($first)
                    {
                        $query->bind('id1', NULL);	
                        $query->bind('id2', NULL);	
                    }
                    else
                    {
                        if($tour == 2)
                        {
                            $query->bind('id1', NULL);	
                        }
                        else
                        {
                            $query->bind('id1', $id_enfant[$i][0], PDO::PARAM_INT);													
                        }
                        $query->bind('id2', $id_enfant[$i][1], PDO::PARAM_INT);
                    }					
                    if(!$query->execute())
                    {
                        global $glob_debug;
                        if($glob_debug)
                        {
                            echo 'ERREUR INSERT MATCH ';
                        }
                        exit;  
                    }	
                    if($tour==1)
                    {
                        $id_enfant[$i][1] = $database->getConnection()->lastInsertId();	
                    }
                    else
                    {
                        $id_enfant[$i>>1][$i%2] = $database->getConnection()->lastInsertId();	
                    }					
                }
                if($nbr_match>1)
                {
                    $tournoi['heure_finale_start'] = ajouter_heures($tournoi['heure_finale_start'],$tournoi['duree_inter_match']);
                }
                $first = false;
            }		
        }
        else
        {
            $sql = 'DELETE FROM matchs WHERE id_groupe IS NULL AND id_tournoi=:id AND looser_bracket=:looser';
	    $query = new Query($database, $sql);
            $query->bind('id', $id_tournoi, PDO::PARAM_INT);
            $query->bind('looser', $looser, PDO::PARAM_INT);
            if(!$query->execute())
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERREUR GROUPES SQL DELETE ';
                }
                exit; 
            }		
            $nbr_match = $nbr_qualifs;
            $first = true;
            while($nbr_match >= 2)
            {
                $nbr_match = $nbr_match>>1;
                for($i=0; $i<$nbr_match; $i++)
                {			
                    $sql = 'INSERT INTO matchs (id_tournoi,nbr_manche,teamParMatch,looser_bracket,heure,id_enfant1,id_enfant2)
                            VALUES (:idt,:nbr,:tpm,:looser,:h,:id1,:id2)';
                    $query = new Query($database, $sql);
                    $query->bind('idt', $id_tournoi, PDO::PARAM_INT);				
                    $query->bind('nbr', $tournoi['nombreManche'], PDO::PARAM_INT);				
                    $query->bind('tpm', $tournoi['teamParMatch'], PDO::PARAM_INT);
                    $query->bind('looser', $looser, PDO::PARAM_INT);					
                    $query->bind('h', $tournoi['heure_finale_start'], PDO::PARAM_STR);
                    if($first)
                    {
                        $query->bind('id1', NULL);	
                        $query->bind('id2', NULL);	
                    }
                    else
                    {
                        $query->bind('id1', $id_enfant[$i][0], PDO::PARAM_INT);	
                        $query->bind('id2', $id_enfant[$i][1], PDO::PARAM_INT);					
                    }					
                    if(!$query->execute())
                    {
                        global $glob_debug;
                        if($glob_debug)
                        {
                            echo 'ERREUR INSERT MATCH ';
                        }
                        exit;    
                    }					
                    $id_enfant[$i>>1][$i%2] = $database->getConnection()->lastInsertId();						
                }
                if($nbr_match>1)
                {
                    $tournoi['heure_finale_start'] = ajouter_heures($tournoi['heure_finale_start'],$tournoi['duree_inter_match']);
                }
                $first = false;
            }
        }
		
        $sql = 'SELECT id_match,id_enfant1,id_enfant2 FROM matchs WHERE id_tournoi=:idt
        AND id_groupe IS NULL AND (id_enfant1 IS NOT NULL OR id_enfant2 IS NOT NULL)';
        $query = new Query($database, $sql);
        $query->bind('idt', $id_tournoi, PDO::PARAM_INT);	
        if(!$query->execute())
        {
            global $glob_debug;
            if($glob_debug)
            {
                echo 'ERREUR SELECT FINALES ';
            }
            exit;  
        }
        foreach($query->getResult() as $m)
        {
            $sql = 'UPDATE matchs SET id_parent=:idp WHERE id_match=:id1 OR id_match=:id2';
            $query2 = new Query($database, $sql);
            $query2->bind('idp', $m['id_match'], PDO::PARAM_INT);	
            $query2->bind('id1', $m['id_enfant1'], PDO::PARAM_INT);	
            $query2->bind('id2', $m['id_enfant2'], PDO::PARAM_INT);				
            if(!$query2->execute())
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERREUR SUPDATE PARENT ';
                }
                exit;  
            }				
        }
        if($petite_finale)
        {
            $sql = 'INSERT INTO matchs (id_tournoi,nbr_manche,teamParMatch,looser_bracket,heure)
                                VALUES (:idt,:nbr,:tpm,:looser,:h)';
            $query = new Query($database, $sql);     
            $query->bind('idt', $id_tournoi, PDO::PARAM_INT);				
            $query->bind('nbr', $tournoi['nombreManche'], PDO::PARAM_INT);				
            $query->bind('tpm', $tournoi['teamParMatch'], PDO::PARAM_INT);	
            $query->bind('looser', $looser, PDO::PARAM_INT);			
            $query->bind('h', $tournoi['heure_finale_start'], PDO::PARAM_STR);	
            if(!$query->execute())
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERREUR INSERT PETITE_FINALE ';
                }
                exit; 
            }	
        }					
    }
    else
    {
        $sql = 'DELETE FROM matchs WHERE id_groupe IS NULL AND id_tournoi=:id AND looser_bracket=:looser';
        $query = new Query($database, $sql); 
        $query->bind('id', $id_tournoi, PDO::PARAM_INT);
        $query->bind('looser', $looser, PDO::PARAM_INT);
        if(!$query->execute())
        {
            global $glob_debug;
            if($glob_debug)
            {
                echo 'ERREUR GROUPES SQL DELETE ';
            }
            exit;
        }		
        if($nbrgroupes!=1 && $nbrgroupes!=2 && $nbrgroupes!=4 && $nbrgroupes!=8 && $nbrgroupes!=16 && $nbrgroupes!=32 &&  $nbrgroupes!=64 &&  $nbrgroupes!=128)
        {
            echo 'Ce nombre de groupes n\'est pas supporté';
            exit;
        }
        else
        {
            $nbr_match = $nbrgroupes;
            $first = true;
            while($nbr_match >= 1)
            {				
                for($i=0; $i<$nbr_match; $i++)
                {				
                    $sql = 'INSERT INTO matchs (id_tournoi,nbr_manche,teamParMatch,looser_bracket,heure,id_enfant1,id_enfant2)
						VALUES (:idt,:nbr,:tpm,:looser,:h,:id1,:id2)';
                    $query = new Query($database, $sql);                     
                    $query->bind('idt', $id_tournoi, PDO::PARAM_INT);				
                    $query->bind('nbr', $tournoi['nombreManche'], PDO::PARAM_INT);				
                    $query->bind('tpm', $tgroupes, PDO::PARAM_INT);
                    $query->bind('looser', $looser, PDO::PARAM_INT);
                    $query->bind('h', $tournoi['heure_finale_start'], PDO::PARAM_STR);	
                    if($first)
                    {
                        $query->bind('id1', NULL);	
                        $query->bind('id2', NULL);	
                    }
                    else
                    {
                        $query->bind('id1', $id_enfant[$i][0], PDO::PARAM_INT);	
                        $query->bind('id2', $id_enfant[$i][1], PDO::PARAM_INT);					
                    }					
                    if(!$query->execute())
                    {
                        global $glob_debug;
                        if($glob_debug)
                        {
                            echo 'ERREUR INSERT MATCH ';
                        }
                        exit; 
                    }	
					
                    $id_enfant[$i>>1][$i%2] = $database->getConnection()->lastInsertId();				
                }
				
		if($nbr_match > 1)
                {
                    $tournoi['heure_finale_start'] = ajouter_heures($tournoi['heure_finale_start'],$tournoi['duree_inter_match']);
                    $first = false;
                    $nbr_match = $nbr_match >> 1;
                }

                $sql = 'SELECT id_match,id_enfant1,id_enfant2 FROM matchs WHERE id_tournoi=:idt
			AND id_groupe IS NULL AND (id_enfant1 IS NOT NULL OR id_enfant2 IS NOT NULL)';
		$query = new Query($database, $sql);
                $query->bind('idt', $id_tournoi, PDO::PARAM_INT);	
                if(!$query->execute())
                {
                    global $glob_debug;
                    if($glob_debug)
                    {
                        echo 'ERREUR SELECT FINALES ';
                    }
                    exit;                    
                }
            }
            foreach($query->getResult() as $m)
            {
                $sql = 'UPDATE matchs SET id_parent=:idp WHERE id_match=:id1 OR id_match=:id2';
                $query2 = new Query($database, $sql);
                $query2->bind('idp', $m['id_match'], PDO::PARAM_INT);	
                $query2->bind('id1', $m['id_enfant1'], PDO::PARAM_INT);	
                $query2->bind('id2', $m['id_enfant2'], PDO::PARAM_INT);				
                if(!$query2->execute())
                {
                    global $glob_debug;
                    if($glob_debug)
                    {
                        echo 'ERREUR SUPDATE PARENT ';
                    }
                    exit;  
                }				
            }
            if($petite_finale)
            {
                $sql = 'INSERT INTO matchs (id_tournoi,nbr_manche,teamParMatch,looser_bracket,heure)
                                    VALUES (:idt,:nbr,:tpm,:looser,:h)';
                $query = new Query($database, $sql);
                $query->bind('idt', $id_tournoi, PDO::PARAM_INT);				
                $query->bind('nbr', $tournoi['nombreManche'], PDO::PARAM_INT);				
                $query->bind('tpm', $tgroupes, PDO::PARAM_INT);
                $query->bind('looser', $looser, PDO::PARAM_INT);				
                $query->bind('h', $tournoi['heure_finale_start'], PDO::PARAM_STR);	
                if(!$query->execute())
                {
                    global $glob_debug;
                    if($glob_debug)
                    {
                        echo 'ERREUR INSERT PETITE_FINALE ';
                    }
                    exit;
                }	
            }
        }
    }
}



$gsb[0] = 'GOLD';
$gsb[2] = 'SILVER';
$gsb[3] = 'BRONZE';
			




$nbrmatch = 0;
if($jpt>1)
{
    //-----------------TOURNOI TYPE LOL COD-----------------

    $sql = 'SELECT e.nom, e.id_equipes as id FROM equipes as e, equipes_tournoi as et
        WHERE et.id_tournoi=:idt AND e.id_equipes=et.id_equipe ORDER BY e.nom';
    $query = new Query($database, $sql);
    $query->bind('idt', $id_tournoi, PDO::PARAM_INT);
    if(!$query->execute())
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR SQL TEAMS';
        }
        exit;        
    }    
    else				
    {
        $equipes = $query->getResult();
    }
    $sql = 'SELECT m.id_match,m.nom_match,m.heure,m.id_parent,m.id_enfant1, m.id_enfant2, m.nbr_manche
        FROM matchs as m
        WHERE m.id_tournoi=:idt AND m.id_groupe IS NULL AND m.looser_bracket=:looser
        ORDER BY m.id_parent';
    $query = new Query($database, $sql);
    $query->bind('idt', $id_tournoi, PDO::PARAM_INT);
    $query->bind('looser', $looser, PDO::PARAM_INT);
    $finale = 0;
    $petite_finale = 0;
    if($query->execute())
    {
        
        foreach($query->getResult() as $match)
        {
            $matches[$match['id_match']]['id'] = $match['id_match'];
            $matches[$match['id_match']]['heure'] = $match['heure'];
            $matches[$match['id_match']]['nom'] = $match['nom_match'];
            $matches[$match['id_match']]['id_parent'] = $match['id_parent'];
            $matches[$match['id_match']]['id_enfant1'] = $match['id_enfant1'];
            $matches[$match['id_match']]['id_enfant2'] = $match['id_enfant2'];
            $matches[$match['id_match']]['nbr_manche'] = $match['nbr_manche'];
            if (is_null($match['id_parent']))
            {
                if(is_null($match['id_enfant1']) and is_null($match['id_enfant2']))
                {
                    $petite_finale = $match['id_match'];
                }
                else
                {
                    $finale = $match['id_match'];
                }                        
            }
            $nbrmatch++;
            $sql2 = 'SELECT mte.id_equipe,e.nom,
                    (SELECT SUM(ma.score) FROM manches_equipes as ma 
                            WHERE ma.id_match=:idm AND ma.id_equipe=mte.id_equipe
                            GROUP BY ma.id_equipe) as score
            FROM matchs_equipes as mte, equipes as e 
            WHERE mte.id_match=:idm and e.id_equipes=mte.id_equipe';
            $query2 = new Query($database, $sql2);
            $query2->bind('idm', $match['id_match'], PDO::PARAM_INT);
            if($query2->execute())
            {
                $cpt = 1;
                foreach($query2->getResult() as $team)
                {
                    $matches[$match['id_match']][$cpt]['id'] = $team['id_equipe'];
                    $matches[$match['id_match']][$cpt]['nom'] = $team['nom'];
                    $matches[$match['id_match']][$cpt]['score'] = $team['score'];
                    $cpt++;
                }
            }
            else
            {
                global $glob_debug;
                if($glob_debug)
                {
                    echo 'ERREUR SQL TEAMS';
                }
                exit;
            }      
        }
    }
    else
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR SQL MATCHES';
        }
        exit;
    }
    if($nbrmatch > 0)
    {
        $esc = 0;
        $niveau = 0;
        $tablo = '';
        $match_par_niveau = '';
        $tablo[$niveau][1] = $matches[$finale]['id'];
        $match_par_niveau[0] = 1;
        $niveau++;
        $match_par_niveau_max = 1; 
        while($esc == 0)
        {
            $match_par_niveau[$niveau] = 0;
            $mpn2 = 1;
            for($mpn=1;$mpn<=$match_par_niveau[$niveau-1];$mpn++)
            {
                $tablo[$niveau][$mpn2] = $matches[$tablo[$niveau-1][$mpn]]['id_enfant1'];
                if(!is_null($tablo[$niveau][$mpn2]))
                {
                    $mpn2++;
                }
                $tablo[$niveau][$mpn2] = $matches[$tablo[$niveau-1][$mpn]]['id_enfant2'];
                if(!is_null($tablo[$niveau][$mpn2]))
                {
                    $mpn2++;
                }
            }
            $match_par_niveau[$niveau] = $mpn2-1;
            if($match_par_niveau[$niveau] > $match_par_niveau[$niveau-1])
            {
                $match_par_niveau_max = $match_par_niveau[$niveau];
            }
            $ok = true;
            for($mpn=1; $mpn<=$match_par_niveau[$niveau]; $mpn++)
            {
                if(!is_null($matches[$tablo[$niveau][$mpn]]['id_enfant1']) or !is_null($matches[$tablo[$niveau][$mpn]]['id_enfant2']))
                {
                    $ok = false;
                }
            }
            if($ok)
            {
                $esc=1;
            }
            $niveau++;
        }
        $niveau--;
        if($petite_finale != 0)
        {
            $tablo[0][2] = $matches[$petite_finale]['id'];
            $match_par_niveau[0] = 2;
        }




// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('tournoi', $tournoi);
$smarty->assign('looser', $looser);
$smarty->assign('niveau', $niveau);








$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/finales.tpl');




?>
