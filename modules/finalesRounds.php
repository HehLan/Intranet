<?php
//------------------------------TOURNOI TYPE TM UT--------------------------------------

/*	Set Matches information	*/

$sql = "SELECT m.id_match,m.nom_match,m.heure,m.id_parent,m.id_enfant1, m.id_enfant2, 
	m.nbr_manche, m.teamParMatch as mtpm, t.teamParMatch as ttpm
	FROM matchs as m, tournoi as t
	WHERE m.id_tournoi=:idt AND t.id_tournoi=:idt AND m.id_groupe IS NULL AND m.looser_bracket=:looser
	ORDER BY m.id_parent";
$query = $connexion->prepare($sql);
$query->bindValue('idt', $id_tournoi, PDO::PARAM_INT);
$query->bindValue('looser', $looser, PDO::PARAM_INT);
$finale = 0;
$petite_finale = 0;

if ($query->execute()) {
	while ($match = $query->fetch(PDO::FETCH_ASSOC)) {
		$nbrmatch++;
		$matches[$match['id_match']]['id'] = $match['id_match'];
		$matches[$match['id_match']]['heure'] = get_jour_de_la_semaine($match['heure']).' '.get_heure($match['heure']);
		$matches[$match['id_match']]['nom'] = $match['nom_match'];
		$matches[$match['id_match']]['id_parent'] = $match['id_parent'];
		$matches[$match['id_match']]['id_enfant1'] = $match['id_enfant1'];
		$matches[$match['id_match']]['id_enfant2'] = $match['id_enfant2'];
		$matches[$match['id_match']]['nbr_manche'] = $match['nbr_manche'];
		$matches[$match['id_match']]['mtpm'] = $match['mtpm'];
		$matches[$match['id_match']]['ttpm'] = $match['ttpm'];
		if (is_null($match['id_parent'])) {
			if (is_null($match['id_enfant1']) and is_null($match['id_enfant2']))
				$petite_finale = $match['id_match'];
			else
				$finale = $match['id_match'];
		}

		/*	For every Match proceeded, get the Joueurs corresponding	*/
		$sql2 = "SELECT mtj.id_joueur,j.pseudo,
			(SELECT SUM(ma.score) FROM manches_joueurs as ma 
			WHERE ma.id_match=:idm AND ma.id_joueur=mtj.id_joueur
			GROUP BY ma.id_joueur) as score
			FROM matchs_joueurs as mtj, joueurs as j 
			WHERE mtj.id_match=:idm and j.id_joueur=mtj.id_joueur
			ORDER BY score DESC";
		$query2 = $connexion->prepare($sql2);
		$query2->bindValue('idm', $match['id_match'], PDO::PARAM_INT);
		if ($query2->execute()) {
			$cpt = 0;
			while ($team = $query2->fetch(PDO::FETCH_ASSOC)) {
				$cpt++;
				$matches[$match['id_match']][$cpt]['id'] = $team['id_joueur'];
				$matches[$match['id_match']][$cpt]['nom'] = $team['pseudo'];
				$matches[$match['id_match']][$cpt]['score'] = $team['score'];
				
				/*	For every Match and Joueur proceeded, get the Manches corresponding	*/
				$sql3 = "SELECT mj.numero_manche, mj.score
					FROM manches_joueurs as mj
					WHERE mj.id_match=:idm
					AND mj.id_joueur=:idj";
				$query3 = $connexion->prepare($sql3);
				$query3->bindValue('idm', $match['id_match'], PDO::PARAM_INT);
				$query3->bindValue('idj', $team['id_joueur'], PDO::PARAM_INT);
				if ($query3->execute()) {

					while ($ligne = $query3->fetch(PDO::FETCH_ASSOC)) {
						$scores[$match['id_match']][$cpt]['scores'][$ligne['numero_manche']] = $ligne['score'];
					}
				}
				else {
					GLOBAL $glob_debug;
					if ($glob_debug)
						echo 'ERREUR SQL MANCHES';
					exit;
				}
			}
			$matches[$match['id_match']]['nbr_joueurs'] = $cpt;
		} else {
			GLOBAL $glob_debug;
			if ($glob_debug)
				echo 'ERREUR SQL JOUEURS';
			exit;
		}
	}
}
else {
	GLOBAL $glob_debug;
	if ($glob_debug)
		echo 'ERREUR SQL MATCHES';
	exit;
}
if ($nbrmatch == 1) {
	$finale = $petite_finale;
	$petite_finale = 0;
}
if ($nbrmatch != 0) {
	$esc = 0;
	$niveau = 0;
	$tablo = '';
	$match_par_niveau = '';
	$tablo[$niveau][1] = $matches[$finale]['id'];
	$match_par_niveau[0] = 1;
	$niveau++;
	$match_par_niveau_max = 1;

	while ($esc == 0) {
		$match_par_niveau[$niveau] = 0;
		$mpn2 = 1;
		for ($mpn = 1; $mpn <= $match_par_niveau[$niveau - 1]; $mpn++) {
			$tablo[$niveau][$mpn2] = $matches[$tablo[$niveau - 1][$mpn]]['id_enfant1'];
			if (!is_null($tablo[$niveau][$mpn2]))
				$mpn2++;
			$tablo[$niveau][$mpn2] = $matches[$tablo[$niveau - 1][$mpn]]['id_enfant2'];
			if (!is_null($tablo[$niveau][$mpn2]))
				$mpn2++;
		}

		$match_par_niveau[$niveau] = $mpn2 - 1;
		if ($match_par_niveau[$niveau] > $match_par_niveau[$niveau - 1])
			$match_par_niveau_max = $match_par_niveau[$niveau];
		$ok = true;
		for ($mpn = 1; $mpn <= $match_par_niveau[$niveau]; $mpn++) {
			if (!is_null($matches[$tablo[$niveau][$mpn]]['id_enfant1']) or ! is_null($matches[$tablo[$niveau][$mpn]]['id_enfant2']))
				$ok = false;
		}
		if ($ok) {
			$esc = 1;
		}
		$niveau++;
	}
	$niveau--;

	if ($petite_finale != 0) {
		$tablo[0][2] = $matches[$petite_finale]['id'];
		$match_par_niveau[0] = 2;
	}
	/////////////// extract me

	for ($c = $niveau; $c >= 0; $c--) {
		for ($m = 1; $m <= $match_par_niveau[$c]; $m++) {
			$maxj = $matches[$tablo[$c][$m]]['nbr_joueurs'];
			if ($matches[$tablo[$c][$m]]['mtpm'] > $matches[$tablo[$c][$m]]['nbr_joueurs'])
				$maxj = $matches[$tablo[$c][$m]]['mtpm'];
			$matches[$tablo[$c][$m]]['maxj'] = $maxj;
			for ($j = 1; $j <= $maxj; $j++) {
				$nom[$j] = 'TBD';
				$score[$j] = '';

				if (isset($matches[$tablo[$c][$m]][$j]['id'])) {
					$nom[$j] = $matches[$tablo[$c][$m]][$j]['nom'];
					$score[$j] = $matches[$tablo[$c][$m]][$j]['score'];
				}

				$fleche = '->';

				if ($j == 1) {
					if ($c == 0) { 
						$fleche = '';
					}
				}
				for ($ma = 1; $ma <= $matches[$tablo[$c][$m]]['nbr_manche']; $ma++) {
					if (isset($matches[$tablo[$c][$m]][$j]['id'])) {
						$idj = $matches[$tablo[$c][$m]][$j]['id'];
						if (!isset($scores[$tablo[$c][$m]][$idj]['scores'][$ma]))
							$scores[$tablo[$c][$m]][$idj]['scores'][$ma] = '-';;
					}
					$matches[$tablo[$c][$m]]['fleche'] = $fleche;
				}
			}
		}
	}
}

// Applying Template
$smarty->assign('niveau',$niveau);
$smarty->assign('scores',$scores);
$smarty->assign('match_par_niveau',$match_par_niveau);
$smarty->assign('matches',$matches);
$smarty->assign('tablo',$tablo);
$smarty->assign("con", $con);
$smarty->assign("next_matches", $database->getNextMatches($con));
$smarty->assign("navTournois", $database->getNavTournois());
$smarty->assign("tournoi", $tournoi);
$smarty->assign("nbr_lb2", $nbr_lb2);
$smarty->assign("nbr_lb3", $nbr_lb3);

$smarty->display('default/finalesRounds.tpl');

?>