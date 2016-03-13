<?php

foreach($groupes as $groupe)
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
//------------ KILL THEM BEFORE THEY LAY EGGS!!!!!!!!!!!! ------------

foreach($groupes as $groupe)
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

// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('participants', $participants);
$smarty->assign('tournois', $tournois);

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/scores.tpl');
?>