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

$id_tournoi=1;
if(isset($_GET['id_tournoi'])) $id_tournoi=$_GET['id_tournoi'];

$connexion = $database->getConnection();

$sql="SELECT * FROM tournoi WHERE id_tournoi=:id";
$query=$connexion->prepare($sql);
$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);
if($query->execute())
{
	$tournoi = $query->fetch(PDO::FETCH_ASSOC);
}
else {echo 'ERREUR SQL TOURNOI'; exit;}

$groupes='';
$sql="SELECT * FROM groupes_pool WHERE id_tournoi=:id";
$query=$connexion->prepare($sql);
$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);
if($query->execute())
{
	$groupes = $query->fetchAll(PDO::FETCH_ASSOC);
}
else {echo 'ERREUR SQL GROUPES'; exit;}

$jpt=$tournoi['joueurParTeam'];

foreach($groupes as $groupe)
{
	if($jpt>1)
	{
		$sql="SELECT e.id_equipes as id, e.nom as nom FROM equipes as e, equipes_groupes as g WHERE g.id_groupe=:idg and e.id_equipes=g.id_equipe";
		$query=$connexion->prepare($sql);
		$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
		if($query->execute())
		{
			$participants[$groupe['id_groupe']] = $query->fetchAll(PDO::FETCH_ASSOC);
		}
		else {echo 'ERREUR SQL EQUIPES'; exit;}
	}
	else
	{
		$sql="SELECT j.id_joueur as id, j.pseudo as nom FROM joueurs as j, joueurs_groupes as g WHERE g.id_groupe=:idg and j.id_joueur=g.id_joueur";
		$query=$connexion->prepare($sql);
		$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
		if($query->execute())
		{
			$participants[$groupe['id_groupe']] = $query->fetchAll(PDO::FETCH_ASSOC);
		}
		else {echo 'ERREUR SQL JOUEURS'; exit;}	
	}
}
//------------ KILL THEM BEFORE THEY LAY EGGS!!!!!!!!!!!! ------------

foreach($groupes as $groupe)
{
	if($jpt>1)
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
			else {echo 'ERREUR SQL SCORES TEAM 1'; exit;}
			

		}

		 echo '<table class="table_pool_lol">
			<tr>
				<th class="th_titre_pool_lol" colspan="'.($nbrteam+2).'">'.$groupe['nom_groupe'].'<th>
			</tr>
			<tr>
				<td class="td_vide_pool_lol"></td>';
			for($i=0;$i<$nbrteam;$i++) echo '<th class="th_team2_pool_lol">'.$teams[$i]['nom'].'</th>';
			echo '<th class="th_score_pool_lol">score</th></tr>';
			$teams2=$teams;
			$totaux='';
		 foreach($teams as $team)
		 {
			$totaux[$team['id']]=0;
			echo '<tr class="tr_pool_lol">
					<th class="th_team_pool_lol">'.$team['nom'].'</th>';
					
			foreach($teams2 as $team2)
			{	
				

				if ($team['id']==$team2['id']) echo '<td class="td_X_pool_lol">X</td>';
				else
				{
					$couleur='same_';
					$valeur='';
					if(isset($scores[$team['id']][$team2['id']]['score']))
					{
						$couleur='loose_';
						$valeur=$scores[$team['id']][$team2['id']]['score'];
						//echo 'id'.$team['id'].' '.$team['id'].'<br>';
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


					echo '<td class="td_'.$couleur.'pool_lol"><a href="#" onclick="popup_heure('.$matchs[$team['id']][$team2['id']]['id_match'].')" >'.$heure.'</a><br>
					<input type="checkbox" name="cb_m_'.$matchs[$team['id']][$team2['id']]['id_match'].'_p_'.$team['id'].'" value="1" onclick="active_score('.$matchs[$team['id']][$team2['id']]['id_match'].','.$team['id'].')"> <input type="text" name="score_m_'.$matchs[$team['id']][$team2['id']]['id_match'].'_p_'.$team['id'].'" id="score_m_'.$matchs[$team['id']][$team2['id']]['id_match'].'_p_'.$team['id'].'" value="'.$valeur.'" size="4" disabled="disabled"></td>';
				}
				
			}
			echo '<td class="td_score_pool_lol">'.$totaux[$team['id']].'</td>	
				</tr>';
		 }
		echo '				 
		  </table><br><br>';
	}
	else
	{
		//-----------------TOURNOI TYPE UT TRACKMANIA-----------------
		$sql="SELECT id_match,nbr_manche, heure FROM matchs WHERE id_groupe=:idg LIMIT 0,1";
		$query=$connexion->prepare($sql);
		$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
		if($query->execute())
		{
			if($nbr_manches=$query->fetch(PDO::FETCH_ASSOC))
			{
				$id_match=$nbr_manches['id_match'];
				$heure=$nbr_manches['heure'];
				$nbr_manches=$nbr_manches['nbr_manche'];
			}
			else $nbr_manches=$tournoi['nombreManche'];
		}
		else {echo 'ERREUR SQL MANCHES'; exit;}	

		
		$sql="SELECT j.pseudo, mj.id_joueur, SUM(mj.score) as total
		FROM joueurs as j, manches_joueurs as mj, matchs as m 
		WHERE m.id_groupe=:idg AND mj.id_match=m.id_match and j.id_joueur=mj.id_joueur
		GROUP BY mj.id_joueur
		ORDER BY total DESC, j.pseudo";
		$query=$connexion->prepare($sql);
		$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
		if($query->execute())
		{
			$totaux = $query->fetchAll(PDO::FETCH_ASSOC);
		}
		else {echo 'ERREUR SQL MANCHES'; exit;}									
		
		$sql="SELECT mj.id_joueur, mj.numero_manche, mj.score
		FROM manches_joueurs as mj, matchs as m 
		WHERE m.id_groupe=:idg AND mj.id_match=m.id_match 
		ORDER BY id_joueur";
		$query=$connexion->prepare($sql);
		$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
		if($query->execute())
		{
			while($ligne=$query->fetch(PDO::FETCH_ASSOC))
			{
				$scores[$ligne['id_joueur']][$ligne['numero_manche']] = $ligne['score'];
			}
		}
		else {echo 'ERREUR SQL MANCHES'; exit;}							
		

		
		
		echo '<table class="table_pool_tm">
			<tr>
				<th  class="titre_pool_tm" colspan="'.($nbr_manches+2).'">'.$groupe['nom_groupe'].'<br>
				<a href="#" onclick="popup_heure('.$id_match.')" >'.get_jour_de_la_semaine($heure).' '.get_heure($heure).'</a></th>
			</tr>
			<tr>
				<th class="th_part_pool_tm">Participant</th>';
				for($i=1;$i<=$nbr_manches;$i++) echo '<th class="th_manche_pool_tm">Manche '.$i.'<br></th>';
				echo '<th class="th_points_pool_tm">Points</th>
			</tr>';
		$inscrits='';	
		foreach($participants[$groupe['id_groupe']]	as $joueur)
		{
			$inscrits[$joueur['id']]['nom']=$joueur['nom'];
			$inscrits[$joueur['id']]['id']=$joueur['id'];
			$inscrits[$joueur['id']]['ok']=false;
		}
		foreach($totaux	as $joueur)
		{
			echo '<tr>
			<td class="td_pseudo_pool_tm">'.$joueur['pseudo'].'</td>';
			for($i=1;$i<=$nbr_manches;$i++)
			{
				$valeur='';
				echo '<td class="td_score_pool_tm">';
				if(isset($scores[$joueur['id_joueur']][$i]))
					$valeur=$scores[$joueur['id_joueur']][$i];
				
				echo '<input type="checkbox" 
					name="cb_m_'.$id_match.'_ma_'.$i.'_p_'.$joueur['id_joueur'].'" value="1" 
					onclick="active_score2('.$id_match.','.$i.','.$joueur['id_joueur'].')"> 
					<input type="text" name="score_m_'.$id_match.'_ma_'.$i.'_p_'.$joueur['id_joueur'].'" 
					id="score_m_'.$id_match.'_ma_'.$i.'_p_'.$joueur['id_joueur'].'" value="'.$valeur.'" size="4" disabled="disabled">';								
				echo '</td>';
			}
			echo '<td class="td_total_pool_tm">'.$joueur['total'].'</td>
			</tr>';
			$inscrits[$joueur['id_joueur']]['ok']=true;
		}		
		foreach($inscrits	as $inscrit)
		{
			if(!$inscrit['ok'])
			{
				echo '<tr>
				<td class="td_pseudo_pool_tm">'.$inscrit['nom'].'</td>';
				for($i=1;$i<=$nbr_manches;$i++) echo '<td class="td_score_pool_tm">
					<input type="checkbox" name="cb_m_'.$id_match.'_ma_'.$i.'_p_'.$inscrit['id'].'" 
					value="1" onclick="active_score2('.$id_match.','.$i.','.$inscrit['id'].')"> 
					<input type="text" name="score_m_'.$id_match.'_ma_'.$i.'_p_'.$inscrit['id'].'" 
					id="score_m_'.$id_match.'_ma_'.$i.'_p_'.$inscrit['id'].'" value="" size="4" disabled="disabled">
				</td>';	

				echo '<td class="td_total_pool_tm"></td>
				</tr>';
			}
		}
			
		echo '</table><br><br>';	
		
	}
}

// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('participants', $participants);
$smarty->assign('tournois', $tournois);

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/scores.tpl');
?>