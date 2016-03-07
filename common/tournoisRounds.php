<?php

// Setting second and third loser brackets
$nbr_lb2 = 0;
$nbr_lb3 = 0;

//SQL Query to count the number of matchs for a tournament and a looser bracket of 2
$sql = 'SELECT COUNT(*) AS nbr
			FROM matchs
			WHERE id_groupe IS NULL AND id_tournoi=:idt AND looser_bracket=2';
$query = $connexion->prepare($sql);
$query->bindValue(':idt', $id_tournoi, PDO::PARAM_INT);
if (!$query->execute()) {
    echo 'ERREUR SQL COUNT LB2';
    exit;
} else {
    $nbr_lb2 = $query->fetch(PDO::FETCH_ASSOC);
    $nbr_lb2 = $nbr_lb2['nbr'];
}

//SQL Query to count the number of matchs for a tournament and a looser bracket of 3
$sql = 'SELECT COUNT(*) AS nbr
			 FROM matchs
			 WHERE id_groupe IS NULL AND id_tournoi=:idt AND looser_bracket=3';
$query = $connexion->prepare($sql);
$query->bindValue(':idt', $id_tournoi, PDO::PARAM_INT);
if (!$query->execute()) {
    echo 'ERREUR SQL COUNT LB3';
    exit;
} else {
    $nbr_lb3 = $query->fetch(PDO::FETCH_ASSOC);
    $nbr_lb3 = $nbr_lb3['nbr'];
}


foreach ($groupes as $itGroupe => $groupe) {
	//-----------------TOURNOI TYPE UT TRACKMANIA-----------------
	
	// Get time and number of rounds for each group
	$sql = "SELECT heure, nbr_manche FROM matchs WHERE id_groupe=:idg LIMIT 0,1";
	$query = $connexion->prepare($sql);
	$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
	$heure = '';
	if ($query->execute()) {
		if ($nbr_manches = $query->fetch(PDO::FETCH_ASSOC)) 
		{
			$groupes[$itGroupe]['jour'] = get_jour_de_la_semaine($nbr_manches['heure']);
			$groupes[$itGroupe]['heure'] = get_heure($nbr_manches['heure']);
			$tournoi['nombreManche'] = $nbr_manches['nbr_manche'];
		}
	}
	else {
		echo 'ERREUR SQL MANCHES';
		exit;
	}
	
	
	$sql = "SELECT j.pseudo, j.id_joueur, SUM(mj.score) as total
		FROM joueurs_groupes as jg
		RIGHT JOIN joueurs as j ON jg.id_joueur = j.id_joueur
		LEFT JOIN manches_joueurs as mj ON j.id_joueur=mj.id_joueur
		WHERE jg.id_groupe=:idg 
		GROUP BY j.id_joueur";
	$query = $connexion->prepare($sql);
	$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
	if ($query->execute())
	{
		while ($ligne = $query->fetch(PDO::FETCH_ASSOC))
		{
			$groupes[$itGroupe]['joueurs'][$ligne['id_joueur']]['pseudo'] = $ligne['pseudo'];
			$groupes[$itGroupe]['joueurs'][$ligne['id_joueur']]['ok'] = false;
			$groupes[$itGroupe]['joueurs'][$ligne['id_joueur']]['scores'] =  array_fill(1, $tournoi['nombreManche'], "-");
			if(isset($ligne['total']))
				$groupes[$itGroupe]['joueurs'][$ligne['id_joueur']]['total'] = $ligne['total'];
			else
				$groupes[$itGroupe]['joueurs'][$ligne['id_joueur']]['total'] = 0;
			
			$scores_querying = 
				"SELECT score, numero_manche
				FROM manches_joueurs
				WHERE id_joueur=:idj";
			$query_score = $connexion->prepare($scores_querying);
			$query_score->bindValue('idj', $ligne['id_joueur'], PDO::PARAM_INT);
			if($query_score->execute())
				while($score = $query_score->fetch(PDO::FETCH_ASSOC))
				{
					$groupes[$itGroupe]['joueurs'][$ligne['id_joueur']]['scores'][$score['numero_manche']] = $score['score'];
				}
		}
	}
	else 
	{
		echo 'ERREUR SQL MANCHES';
		exit;
	}
}

// Applying Template
$smarty->assign("con", $con);
$smarty->assign("next_matches", $database->getNextMatches($con));
$smarty->assign("navTournois", $database->getNavTournois());
$smarty->assign("tournoi", $tournoi);
$smarty->assign("nbr_lb2", $nbr_lb2);
$smarty->assign("nbr_lb3", $nbr_lb3);
$smarty->assign("groupes", $groupes);

$smarty->display('default/tournoisRounds.tpl');

?>