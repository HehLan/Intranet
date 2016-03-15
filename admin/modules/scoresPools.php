<?php

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
		global $glob_debug;
		if($glob_debug)
			echo 'ERREUR SQL EQUIPES'; 
		exit;
	}
}
//------------ KILL THEM BEFORE THEY LAY EGGS!!!!!!!!!!!! ------------

foreach($groupes as $keyGroupe => $groupe)
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
	$groupes[$keyGroupe]['nbrteam'] = $nbrteam;
	$groupes[$keyGroupe]['teams'] = $teams;
	
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
				if(is_null($ligne['score']))
				{
					$scores[$team['id']][$ligne['team2']]['score']='';
				}
				$matchs[$team['id']][$ligne['team2']]['score']=$ligne['score'];	
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
	$totaux=array();
	foreach($teams as $keyTeam=>$team)
	{
		$totaux[$team['id']]=0;				
		foreach($teams as $team2)
		{	
			if (!($team['id']==$team2['id']))
			{
				$couleur='same_';
				if(is_numeric($scores[$team['id']][$team2['id']]['score']))
				{
					$couleur='loose_';
					$matchs[$team['id']][$team2['id']]['score']=$scores[$team['id']][$team2['id']]['score'];
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
					$matchs[$team['id']][$team2['id']]['couleur'] = $couleur;
				}
				$matchs[$team['id']][$team2['id']]['heure'] = get_jour_de_la_semaine($matchs[$team['id']][$team2['id']]['heure']).' '.get_heure($matchs[$team['id']][$team2['id']]['heure']);
			}
		}
		$groupes[$keyGroupe]['teams'][$keyTeam]['total'] = $totaux[$team['id']];
	}
}

// send to the template
$smarty->assign("con", $connected);
$smarty->assign('participants', $participants);
$smarty->assign('tournoi', $tournoi);
$smarty->assign('groupes', $groupes);
$smarty->assign('matchs', $matchs);
$smarty->assign('totaux', $totaux);

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/scoresPools.tpl');
?>