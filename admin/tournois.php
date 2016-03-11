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
    header('Location: '.DOCUMENT_ROOT.'/index.php');
} 



$sql = 'SELECT * FROM tournoi ORDER BY nomTournoi';
$query = new Query($database, $sql);
if($query->execute())
{
    foreach ($query->getResult() as $tournoi)
    {
        if($tournoi['joueurParTeam']==1)
        {
            $sql_2 = 'SELECT COUNT(*) as nbr FROM joueurtournoi WHERE id_tournoi=:idt';
        }
        else
        {
            $sql_2 = 'SELECT COUNT(*) as nbr FROM equipes_tournoi WHERE id_tournoi=:idt';
        }
        $query_2 = new Query($database, $sql_2);
        $query_2->bind('idt', $tournoi['id_tournoi'], PDO::PARAM_STR);
        if($query_2->execute())
        {
            $participants = $query_2->getResult()[0];
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
        $sql_3 = 'SELECT COUNT(*) as nbr FROM groupes_pool WHERE id_tournoi=:idt';
        $query_3 = new Query($database, $sql_3);
        $query_3->bind('idt', $tournoi['id_tournoi'], PDO::PARAM_STR);
        if($query_3->execute())
        {
            $groupes_exist = $query_3->getResult();
        }
        else
        {
            echo 'ERREUR COUNT GROUPE SQL';
            exit;
        }
        
        //MANAGE POOLS  --------------------------------------------------------------------------
        $connexion = $database->getConnection();
		$tournoi['exist_manche_qualif0'] = existe_match($connexion,$tournoi['id_tournoi'],'group',0);
		$tournoi['exist_manche_final0'] = existe_match($connexion,$tournoi['id_tournoi'],'final',0);
        
        // MANAGE FINALS ---------------------------------------------------------------------------------------------------

        $tournoi['exist_manche_final2']= existe_match($connexion,$tournoi['id_tournoi'],'looser1',2);
      
        // LOOSER BRACKETS ----------------------------------------------------------------------------------------------------------------------
        $tournoi['exist_manche_final3'] = existe_match($connexion,$tournoi['id_tournoi'],'looser2',3);
        //--------------------------------------------------------------------------------------------------------------------------------
		$tournois[] = $tournoi;
	}     
}
else
{
	global $glob_debug;
	if($glob_debug)
		echo 'ERREUR TOURNOI SQL';
    exit;
}

// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('participants', $participants);
$smarty->assign('tournois', $tournois);

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/tournois.tpl');	
?>