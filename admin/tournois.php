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
$allowed = Auth::isAllowed(3);


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 



$sql = 'SELECT * FROM tournoi ORDER BY nomTournoi';
$database->setQuery($sql);
if($database->getQuery()->execute())
{
    while($tournoi = $database->getQuery()->fetch(PDO::FETCH_ASSOC)) 
    {
        $tournois[] = $tournoi;
        if($tournoi['joueurParTeam']==1)
        {
            $sql = 'SELECT COUNT(*) as nbr FROM joueurtournoi WHERE id_tournoi=:idt';
        }
        else
        {
            $sql = 'SELECT COUNT(*) as nbr FROM equipes_tournoi WHERE id_tournoi=:idt';
        }
        $database->setQuery($sql);
        $database->bindValue('idt', $tournoi['id_tournoi'], PDO::PARAM_STR);
        if($database->getQuery()->execute())
        {
            $participants = $database->getQuery()->fetch(PDO::FETCH_ASSOC);
        }
        else
        {
            echo 'ERREUR TOURNOI SQL';
            exit;            
        }
	/*--------------------
        rajouter la modif des parametres
        activer ou pas les boutons en fonction de :
        pas de modif s'il y a deja des matchs joués -> des manches
        pas de groupes si idem (manche de groupe)
        pas de finales si idem (manche de finale)

        prévoir cration d'un tournoi //

        et de tournoi sans pool
        ---------------------*/  
        $sql = 'SELECT COUNT(*) as nbr FROM groupes_pool WHERE id_tournoi=:idt';
        $database->setQuery($sql);
        $database->getQuery();
        $database->bindValue('idt', $tournoi['id_tournoi'], PDO::PARAM_STR);
        if($database->getQuery()->execute())
        {
            $groupes_exist = $database->getQuery()->fetch(PDO::FETCH_ASSOC);
        }
        else
        {
            echo 'ERREUR COUNT GROUPE SQL';
            exit;
        }
        
        
        
        //TRUC 1  --------------------------------------------------------------------------
        
        if (!existe_manche_de_groupe($connexion,$tournoi['id_tournoi'],$tournoi['joueurParTeam']))
        {
            echo '<input type="button" value="Créer" onclick="go_groupes('.$tournoi['id_tournoi'].','.$participants['nbr'].')"/>';					
        }	
        echo ' <a href="scores.php?id_tournoi='.$tournoi['id_tournoi'].'">Scores</a></td>
                <td>';
        //if (!existe_manche_de_finale($connexion,$tournoi['id_tournoi'],$tournoi['joueurParTeam'],0) && $groupes_exist['nbr']>0)
        if (!existe_manche_de_finale($connexion,$tournoi['id_tournoi'],$tournoi['joueurParTeam'],0))
        {			
            if($tournoi['joueurParTeam']>1)
            {
                echo '<input type="button" value="Créer" onclick="go_finales('.$tournoi['id_tournoi'].','.$participants['nbr'].',0)"/>';                    
            }
            else
            {
                echo '<input type="button" value="Créer" onclick="go_finales2('.$tournoi['id_tournoi'].','.$participants['nbr'].',0)"/>';
            }
            echo '<a href="finales.php?id_tournoi='.$tournoi['id_tournoi'].'&looser=0">Modifier</a>';	
        }
        else
        {
            if(inscrits_en_finale($connexion,$tournoi['id_tournoi'],$tournoi['joueurParTeam'],0))
            {
                echo '<a href="finales.php?id_tournoi='.$tournoi['id_tournoi'].'&looser=0">Scores</a>';
            }
        }
        
        //-----------------------------------------------------------------------------------------------------------
        
        
        // TRUC 2 ---------------------------------------------------------------------------------------------------

        if (!existe_manche_de_finale($connexion,$tournoi['id_tournoi'],$tournoi['joueurParTeam'],2) )
        {
            if($tournoi['joueurParTeam']>1)
            {
                echo '<input type="button" value="Créer" onclick="go_finales('.$tournoi['id_tournoi'].','.$participants['nbr'].',2)"/>';
            }
            else
            {
                echo '<input type="button" value="Créer" onclick="go_finales2('.$tournoi['id_tournoi'].','.$participants['nbr'].',2)"/>';
            }
            echo '<a href="finales.php?id_tournoi='.$tournoi['id_tournoi'].'&looser=2">Modifier</a>';	
        }
        else
        {
            if(inscrits_en_finale($connexion,$tournoi['id_tournoi'],$tournoi['joueurParTeam'],2))
            {
                echo '<a href="finales.php?id_tournoi='.$tournoi['id_tournoi'].'&looser=2">Scores</a>';
            }
        }							
      
        // TRUC 3 ----------------------------------------------------------------------------------------------------------------------
        if (!existe_manche_de_finale($connexion,$tournoi['id_tournoi'],$tournoi['joueurParTeam'],3) )
        {
            if($tournoi['joueurParTeam']>1)
            {
                echo '<input type="button" value="Créer" onclick="go_finales('.$tournoi['id_tournoi'].','.$participants['nbr'].',3)"/>';
            }
            else
            {
                echo '<input type="button" value="Créer" onclick="go_finales2('.$tournoi['id_tournoi'].','.$participants['nbr'].',3)"/>';
            }
            echo '<a href="finales.php?id_tournoi='.$tournoi['id_tournoi'].'&looser=3">Modifier</a>';
        }
        else
        {
            if(inscrits_en_finale($connexion,$tournoi['id_tournoi'],$tournoi['joueurParTeam'],3))
            {
                echo '<a href="finales.php?id_tournoi='.$tournoi['id_tournoi'].'&looser=3">Scores</a>';
            }
        }							
 
        //--------------------------------------------------------------------------------------------------------------------------------
    
    }     
}
else
{
    echo 'ERROR TOURNOI SQL';
    exit;
}



				
                                
				






// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('tournois', $tournois);





$smarty->display(DOCUMENT_ROOT.'/templates/default/admin/tournois.tpl');	
?>