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
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);

//	Test whether the user has admin privilege
if(!$connected && !$allowed)
{
    header('Location: '.DOCUMENT_ROOT.'/index.php');
} 

$id_tournoi=1;
if(isset($_GET['id_tournoi'])) $id_tournoi=$_GET['id_tournoi'];

$connexion = $database->getConnection();

//	Get the Tournoi information
$sql="SELECT * FROM tournoi WHERE id_tournoi=:id";
$query=$connexion->prepare($sql);
$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);
if($query->execute())
{
	$tournoi = $query->fetch(PDO::FETCH_ASSOC);
}
else 
{
	global $glob_debug
	if($glob_debug)
		echo 'ERREUR SQL TOURNOI'; 
	exit;
}

//	Get the Groupes information relative to its Tournoi
$groupes='';
$sql="SELECT * FROM groupes_pool WHERE id_tournoi=:id";
$query=$connexion->prepare($sql);
$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);
if($query->execute())
{
	$groupes = $query->fetchAll(PDO::FETCH_ASSOC);
}
else 
{
	global $glob_debug
	if($glob_debug)
		echo 'ERREUR SQL GROUPES'; 
	exit;
}

foreach($groupes as $groupe)
{
	$sql="SELECT e.id_equipes as id, e.nom as nom FROM equipes as e, equipes_groupes as g WHERE g.id_groupe=:idg and e.id_equipes=g.id_equipe";
	$query=$connexion->prepare($sql);
	$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
	if($query->execute())
	{
		$participants[$groupe['id_groupe']] = $query->fetchAll(PDO::FETCH_ASSOC);
	}
	else 
	{
		global $glob_debug
		if($glob_debug)
			echo 'ERREUR SQL EQUIPES'; 
		exit;
	}
}
//------------ KILL THEM BEFORE THEY LAY EGGS!!!!!!!!!!!! ------------

foreach($groupes as $groupe)
{
	//-----------------TOURNOI TYPE LOL COD-----------------
	$nbrteam=0;
	$teams='';
	$scores='';
	foreach($participants[$groupe['id_groupe']] as $team)
	{
		$teams[$nbrteam]['nom']=$team['nom'];
		$teams[$nbrteam]['id']=$team['id'];
		$nbrteam++;
	}

	$heures='';

	
	foreach($teams as $team)
	{

		$sql="SELECT m.id_match,m.heure, SUM(me.score) as score, 
			(SELECT mte2.id_equipe FROM matchs_equipes as mte2 WHERE mte2.id_match=m.id_match AND mte2.id_equipe<>:ide LIMIT 0,1) as team2								
			FROM (matchs_equipes as mte, matchs as m) 
			LEFT JOIN (manches_equipes as me)
			ON (me.id_match=m.id_match AND me.id_equipe=:ide)
			WHERE m.id_groupe=:idg AND mte.id_match=m.id_match AND mte.id_equipe=:ide
			GROUP BY m.id_match";
		$query=$connexion->prepare($sql);
		$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
		$query->bindValue('ide', $team['id'], PDO::PARAM_INT);
		if($query->execute())
		{
			while($ligne=$query->fetch(PDO::FETCH_ASSOC))
			{
				if(!is_null($ligne['score']))
				{
					$scores[$team['id']][$ligne['team2']]['score']=$ligne['score'];
				}	
				$matchs[$team['id']][$ligne['team2']]['heure']=$ligne['heure'];
				$matchs[$team['id']][$ligne['team2']]['id_match']=$ligne['id_match'];
			}
		}
		else 
		{
			global $glob_debug;
			if($glob_debug)
				echo 'ERREUR SQL SCORES TEAM 1'; 
			exit;
		}
	}
	$totaux='';
	foreach($teams as $team)
	{
		$totaux[$team['id']]=0;				
		foreach($teams as $team2)
		{	
			if (!($team['id']==$team2['id']))
			{
				$couleur='same_';
				$valeur='';
				if(isset($scores[$team['id']][$team2['id']]['score']))
				{
					$couleur='loose_';
					$valeur=$scores[$team['id']][$team2['id']]['score'];
					if ($scores[$team['id']][$team2['id']]['score']>$scores[$team2['id']][$team['id']]['score']) 
					{
						$totaux[$team['id']]+=3;
						$couleur='win_';
					}	
					if ($scores[$team['id']][$team2['id']]['score']==$scores[$team2['id']][$team['id']]['score']) 
					{
						$totaux[$team['id']]+=1;
						$couleur='same_';
					}			
				}	
				$heure=get_jour_de_la_semaine($matchs[$team['id']][$team2['id']]['heure']).' '.get_heure($matchs[$team['id']][$team2['id']]['heure']);
			}
		}
	}
}

// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('participants', $participants);
$smarty->assign('tournois', $tournois);

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/scoresPools.tpl');
?>