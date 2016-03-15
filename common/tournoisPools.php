<?php

if (is_array($groupes)) {
    foreach ($groupes as $groupe) {
        $sql = 'SELECT e.id_equipes AS id, e.nom AS nom
				FROM equipes AS e, equipes_groupes AS g
				WHERE g.id_groupe=:idg AND e.id_equipes=g.id_equipe';
        $query = $connexion->prepare($sql);
        $query->bindValue(':idg', $groupe['id_groupe'], PDO::PARAM_INT);
        if ($query->execute())
            $participants[$groupe['id_groupe']] = $query->fetchAll(PDO::FETCH_ASSOC);
        else {
            global $glob_debug;
            if ($glob_debug)
                echo 'ERREUR SQL EQUIPES';
            exit;
        }
    }
}
else {
	global $glob_debug;
	if($glob_debug)
		echo 'groupes is not an array';
    exit;
}

$totaux = array();

foreach ($groupes as $itGroupe => $groupe) {
    //-----------------TOURNOI TYPE LOL COD HOTS-----------------	
    $resultTeams = array();
    $nbrteam = 0;
    $teams = '';
    $scores = '';
    if (is_array($participants)) {
        foreach ($participants[$groupe['id_groupe']] as $team) {
			$teams[$nbrteam]['nom'] = $team['nom'];
			$teams[$nbrteam]['id'] = $team['id'];

            // This part needs to be debugged
            // This does not give an array
            //$teams[$nbrteam]['nom'] = $team['nom'];
            //$teams[$nbrteam]['id'] = $team['id'];
            //
                // try to test this below but teams is still not an array
            //$teams[$nbrteam][] = $team;

            $nbrteam++;
        }
    } else {
        echo 'ERROR - participants is not an array';
        exit;
    }
    $groupes[$itGroupe]['teams'] = $teams;

    $heures = '';
    if (is_array($teams)) {
        foreach ($teams as $team) {
            $sql = "SELECT m.heure, SUM(me.score) as score, 
				(SELECT mte2.id_equipe FROM matchs_equipes as mte2 WHERE mte2.id_match=m.id_match AND mte2.id_equipe<>:ide LIMIT 0,1) as team2								
			FROM (matchs_equipes as mte, matchs as m) 
			LEFT JOIN (manches_equipes as me)
			ON (me.id_match=m.id_match AND me.id_equipe=:ide)
			WHERE m.id_groupe=:idg AND mte.id_match=m.id_match AND mte.id_equipe=:ide
			GROUP BY m.id_match";

            $query = $connexion->prepare($sql);
            $query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
            $query->bindValue('ide', $team['id'], PDO::PARAM_INT);
            if ($query->execute()) {
                while ($ligne = $query->fetch(PDO::FETCH_ASSOC)) {
                    if (!is_null($ligne['score'])) {
                        $scores[$team['id']][$ligne['team2']]['score'] = $ligne['score'];
						
                    }
                    $heures[$team['id']][$ligne['team2']] = $ligne['heure'];
                }
            } else {
                global $glob_debug;
                if ($glob_debug)
                    echo 'ERREUR SQL SCORES TEAM 1';
                exit;
            }
        }
    }
    else {
		global $glob_debug;
		if($glob_debug)
			echo 'ERROR - teams is not an array';
        exit;
    }
    // A supprimer mais warning:undefined index
    foreach ($teams as $team) {
        $totaux[$team['id']] = 0;
        $resultTeam = array();
        foreach ($teams as $team2) {
            if ($team['id'] != $team2['id']) {
                $couleur = 'same_';
                $valeur = '';
                $isPickActive = '';

                if (isset($scores[$team['id']][$team2['id']])) {
                    $couleur = 'loose_';
                    $valeur = $scores[$team['id']][$team2['id']]['score'] . '-' . $scores[$team2['id']][$team['id']]['score'];
                    if ($scores[$team['id']][$team2['id']]['score'] > $scores[$team2['id']][$team['id']]['score']) {
                        $totaux[$team['id']]+=3;
                        $couleur = 'win_';
                    }
                    if ($scores[$team['id']][$team2['id']]['score'] == $scores[$team2['id']][$team['id']]['score']) {
                        $totaux[$team['id']]+=1;
                        $couleur = 'same_';
                    }
                    $isPickActive = false;
                }
                if ($valeur == '') {
                    if (isset($heures[$team['id']][$team2['id']])) {
                        $valeur = get_jour_de_la_semaine($heures[$team['id']][$team2['id']]) . ' ' . get_heure($heures[$team['id']][$team2['id']]);

                        // recuperer le dateTime du match
                        $dateTime_DebutMatch = $heures[$team['id']][$team2['id']];
                        // chequer en fct du temps si on peut afficher le link (1h avant que match commence)
                        $isPickActive = checkIsPickActive($dateTime_DebutMatch);
                        
                        // recuperer l'id du match --> nop ça foire!!! --> need Youness help here
                        //$idMatch = $scores[$team['id']][$ligne['team2']]['id_match'];
                    }
                }
				
				$resultTeam[] = array(
					"id_match" => $database->getIdMatchEquipe($groupe['id_groupe'],$team['id'],$team2['id']),
					"couleur" => $couleur,
					"valeur" => $valeur,
                    "isPickActive" => $isPickActive);
            } else
                $resultTeam[] = array();
        }
        if (!empty($resultTeam))
            $resultTeams[] = $resultTeam;
    }
    $groupes[$itGroupe]['resultTeams'] = $resultTeams;
}

// ***************************************************************************
$userId = $_GET['id'];
// faire la fonc ici qui va aller recuperer cette info dans la db
$isChiefOfTeam = true; // pour l'intant true pour les tests
// faire la fonc qui va aller recuperer le nom de la team du gars en fct de son ID
$teamName = 'BIT1';

$peekData = array(
    "userId" => $userId,
    "isChief" => $isChiefOfTeam,
    "teamName" => $teamName);
// ***************************************************************************

// Applying Template
$smarty->assign("con", $con);
$smarty->assign("next_matches", $database->getNextMatches($con));
$smarty->assign("navTournois", $database->getNavTournois());
$smarty->assign("tournoi", $tournoi);
$smarty->assign("nbr_lb2", $nbr_lb2);
$smarty->assign("nbr_lb3", $nbr_lb3);
$smarty->assign("nbrteam", $nbrteam);
$smarty->assign("groupes", $groupes);
$smarty->assign("resultTeams", $resultTeams);
$smarty->assign("totaux", $totaux);
$smarty->assign("peekData", $peekData);

//$smarty->display('templates/default/tournoisPools.tpl');
$smarty->display('default/tournoisPools.tpl');
?>