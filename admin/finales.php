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
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 



$looser = 0;
$creer = false;


if(isset($_GET['id_tournoi']))
{
    $id_tournoi = $_GET['id_tournoi'];
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




if( $tournoi['joueurParTeam'] > 1)
{
    include_once('modules/finalesPools.php');
}
else
{
    include_once('/modules/finalesRounds.php');
}

?>