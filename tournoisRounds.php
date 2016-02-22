<?php

// Listing players for this tournament
foreach ($groupes as $groupe) {    
	$sql = 'SELECT j.id_joueur AS id, j.pseudo AS pseudo
				FROM joueurs AS j, joueurs_groupes AS g
				WHERE g.id_groupe=:idg AND j.id_joueur=g.id_joueur';
	$query = $connexion->prepare($sql);
	$query->bindValue(':idg', $groupe['id_groupe'], PDO::PARAM_INT);
	if ($query->execute())
		$participants[$groupe['id_groupe']] = $query->fetchAll(PDO::FETCH_ASSOC);
	else {
		echo 'ERREUR SQL JOUEURS';
		exit;
	}
}

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
	$sql = "SELECT nbr_manche, heure FROM matchs WHERE id_groupe=:idg LIMIT 0,1";
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
	
	// Initialize every player's row
	foreach ($participants[$groupe['id_groupe']] as $joueur) {
		$groupes[$itGroupe]['joueurs'][$joueur['id']]['pseudo'] = $joueur['pseudo'];
		$groupes[$itGroupe]['joueurs'][$joueur['id']]['ok'] = false;
		$groupes[$itGroupe]['joueurs'][$joueur['id']]['total'] = 0;
		$groupes[$itGroupe]['joueurs'][$joueur['id']]['scores'] =  array_fill(1, $tournoi['nombreManche'], "-");
	}
	//var_dump($groupes[$itGroupe]);
	
	$sql = "SELECT j.pseudo, mj.id_joueur, SUM(mj.score) as total
		FROM joueurs as j, manches_joueurs as mj, matchs as m 
		WHERE m.id_groupe=:idg AND mj.id_match=m.id_match and j.id_joueur=mj.id_joueur
		GROUP BY mj.id_joueur
		ORDER BY total DESC, j.pseudo";
	$query = $connexion->prepare($sql);
	$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
	if ($query->execute())
	{
		$totaux = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach ($totaux as $total)
		{
			$groupes[$itGroupe]['joueurs'][$total['id_joueur']]['total'] = $total['total']; 
		}
	}
	else 
	{
		echo 'ERREUR SQL MANCHES';
		exit;
	}

	$sql = "SELECT mj.id_joueur, mj.numero_manche, mj.score
		FROM manches_joueurs as mj, matchs as m 
		WHERE m.id_groupe=:idg AND mj.id_match=m.id_match 
		ORDER BY id_joueur";
	$query = $connexion->prepare($sql);
	$query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
	if ($query->execute()) {
		while ($ligne = $query->fetch(PDO::FETCH_ASSOC)) {
			$groupes[$itGroupe]['joueurs'][$ligne['id_joueur']]['scores'][$ligne['numero_manche']] = $ligne['score'];
		}
	} else {
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

//$smarty->display('templates/default/tournoisRounds.tpl');
$smarty->display('tournoisRounds.tpl');

?>