<?php

if($id_tournoi != 5) //si pas HS
{
if (is_array($groupes))
{
    foreach ($groupes as $groupe)
    {
	
		if($id_tournoi != 5) //si pas HS
		{
			$sql = 'SELECT e.id_equipes AS id, e.nom AS nom
                FROM equipes AS e, equipes_groupes AS g
                WHERE g.id_groupe=:idg AND e.id_equipes=g.id_equipe';
			$query = new Query($database, $sql);
			$query->bind(':idg', $groupe['id_groupe'], PDO::PARAM_INT);
			if ($query->execute())
			{
				$participants[$groupe['id_groupe']] = $query->getResult();
			}
			else
			{
				global $glob_debug;
				if ($glob_debug)
				{
					echo 'ERREUR SQL EQUIPES';
				}
				exit;
			}
		}
		else
		{ //si HS
		
			$sql = 'SELECT j.id_joueur AS id, j.pseudo AS nom
					FROM joueurs AS j, joueurs_groupes AS g
					WHERE g.id_groupe=:idg AND j.id_joueur=g.id_equipes';
			$query = new Query($database, $sql);
			$query->bind(':idg', $groupe['id_groupe'], PDO::PARAM_INT);
			if ($query->execute())
			{
				$participants[$groupe['id_groupe']] = $query->getResult();
			}
			else
			{
				global $glob_debug;
				if ($glob_debug)
				{
					echo 'ERREUR SQL joueur'; //erroroororooror
				}
				exit;
			}
		
		}
		
		
    }
}
else
{
    global $glob_debug;
    if ($glob_debug)
    {
        echo 'ERROR - groupes is not an array';
    }
    exit;
}

}

if($id_tournoi != 5)
{
$nbr_lb2 = 0;
$nbr_lb3 = 0;

//SQL Query to count the number of matchs for a tournament and a looser bracket of 2
$sql = 'SELECT COUNT(*) AS nbr
        FROM matchs
        WHERE id_groupe IS NULL AND id_tournoi=:idt AND looser_bracket=2';
$query = new Query($database, $sql);
$query->bind(':idt', $id_tournoi, PDO::PARAM_INT);
if (!$query->execute())
{
    global $glob_debug;
    if ($glob_debug)
    {
        echo 'ERREUR SQL COUNT LB2';
    }
    exit;
}
else
{
    $nbr_lb2 = $query->getResult()[0];
    $nbr_lb2 = $nbr_lb2['nbr'];
}

//SQL Query to count the number of matchs for a tournament and a looser bracket of 3
$sql = 'SELECT COUNT(*) AS nbr
        FROM matchs
        WHERE id_groupe IS NULL AND id_tournoi=:idt AND looser_bracket=3';
$query = new Query($database, $sql);
$query->bind(':idt', $id_tournoi, PDO::PARAM_INT);
if (!$query->execute())
{
    global $glob_debug;
    if ($glob_debug)
    {
        echo 'ERREUR SQL COUNT LB3';
    }
    exit;
}
else
{
    $nbr_lb3 = $query->getResult()[0];
    $nbr_lb3 = $nbr_lb3['nbr'];
}

$totaux = array();

foreach ($groupes as $itGroupe => $groupe)
{
    //-----------------TOURNOI TYPE LOL COD HOTS-----------------	
    $resultTeams = array();
    $nbrteam = 0;
    $teams = '';
    $scores = '';

    if (is_array($participants))
    {
        foreach ($participants[$groupe['id_groupe']] as $team)
        {
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
    }
    else
    {
        global $glob_debug;
        if ($glob_debug)
        {
            echo 'ERROR - participants is not an array';
        }
        exit;
    }
    $groupes[$itGroupe]['teams'] = $teams;

    $heures = '';
    if (is_array($teams))
    {
        foreach ($teams as $team)
        {
            $sql = 'SELECT m.id_match,m.heure, SUM(me.score) as score, 
				(SELECT mte2.id_equipe FROM matchs_equipes as mte2 WHERE mte2.id_match=m.id_match AND mte2.id_equipe<>:ide LIMIT 0,1) as team2 
			FROM (matchs_equipes as mte, matchs as m) 
			LEFT JOIN (manches_equipes as me)
			ON (me.id_match=m.id_match AND me.id_equipe=:ide)
			WHERE m.id_groupe=:idg AND mte.id_match=m.id_match AND mte.id_equipe=:ide
			GROUP BY m.id_match';
            $query = new Query($database, $sql);
            $query->bind(':idg', $groupe['id_groupe'], PDO::PARAM_INT);
            $query->bind(':ide', $team['id'], PDO::PARAM_INT);
            if ($query->execute())
            {
                foreach ($query->getResult() as $ligne)
                {
                    if (!is_null($ligne['score']))
                    {
                        $scores[$team['id']][$ligne['team2']]['score'] = $ligne['score'];
                        $scores[$team['id']][$ligne['team2']]['id_match'] = $ligne['id_match'];
                    }
                    $heures[$team['id']][$ligne['team2']] = $ligne['heure'];
                }
            }
            else
            {
                global $glob_debug;
                if ($glob_debug)
                {
                    echo 'ERREUR SQL SCORES TEAM 1';
                }
                exit;
            }
        }
    }
    else
    {
        global $glob_debug;
        if ($glob_debug)
        {
            echo 'ERROR - teams is not an array';
        }
        exit;
    }

    // A supprimer mais warning:undefined index
    foreach ($teams as $team)
    {
        $totaux[$team['id']] = 0;
        $resultTeam = array();
        foreach ($teams as $team2)
        {
            if ($team['id'] != $team2['id'])
            {
                $couleur = 'same_';
                $valeur = '';
                $isPickActive = '';
                $idMatch = '';

                if (isset($scores[$team['id']][$team2['id']]))
                {
                    $couleur = 'loose_';
                    $valeur = $scores[$team['id']][$team2['id']]['score'] . '-' . $scores[$team2['id']][$team['id']]['score'];
                    if ($scores[$team['id']][$team2['id']]['score'] > $scores[$team2['id']][$team['id']]['score'])
                    {
                        $totaux[$team['id']]+=3;
                        $couleur = 'win_';
                    }
                    if ($scores[$team['id']][$team2['id']]['score'] == $scores[$team2['id']][$team['id']]['score'])
                    {
                        $totaux[$team['id']]+=1;
                        $couleur = 'same_';
                    }
                    $isPickActive = false;
                }
                if ($valeur == '')
                {
                    if (isset($heures[$team['id']][$team2['id']]))
                    {
                        $valeur = get_jour_de_la_semaine($heures[$team['id']][$team2['id']]) . ' ' . get_heure($heures[$team['id']][$team2['id']]);

                        // recuperer le dateTime du match
                        $dateTime_DebutMatch = $heures[$team['id']][$team2['id']];
                        // chequer en fct du temps si on peut afficher le link (1h avant que match commence)
                        $isPickActive = false; //checkIsPickActive($dateTime_DebutMatch);
                    }
                }
                // recuperer l'id du match
                if (isset($scores[$team2['id']][$team['id']]['id_match']))
                {
                    $id_match = $scores[$team2['id']][$team['id']]['id_match'];
                }
                else
                {
                    $id_match = 0;
                }
                $resultTeam[] = array(
                    "id_match" => $database->getIdMatchEquipe($groupe['id_groupe'], $team['id'], $team2['id']),
                    "couleur" => $couleur,
                    "valeur" => $valeur,
                    "isPickActive" => $isPickActive);
            }
            else
            {
                $resultTeam[] = array();
            }
        }
		$resultTeams[] = $resultTeam;
    }
    $groupes[$itGroupe]['resultTeams'] = $resultTeams;
}


// ***************************************************************************
//$userId = $_GET['user'];  //debug
$userId = $_SESSION['id_joueur'];

// faire la fonc ici qui va aller recuperer cette info dans la db
$isChiefOfTeam = true; //isChiefOfTeam($_SESSION['level']); //pour l'intant true pour les tests

// faire la fonc qui va aller recuperer le nom de la team du gars en fct de son ID
$teamName = getTeamName($userId, $database);

$peekData = array(
    "userId" => $userId,
    "isChief" => $isChiefOfTeam,
    "teamName" => $teamName,
    "idTournoi" => $id_tournoi);
// ***************************************************************************
// Applying Template
$smarty->assign("con", $connected);
$smarty->assign("next_matches", $database->getNextMatches($connected));
$smarty->assign("navTournois", $database->getNavTournois());
$smarty->assign("tournoi", $tournoi);
$smarty->assign("nbr_lb2", $nbr_lb2);
$smarty->assign("nbr_lb3", $nbr_lb3);
$smarty->assign("nbrteam", $nbrteam);
$smarty->assign("groupes", $groupes);
$smarty->assign("resultTeams", $resultTeams);
$smarty->assign("totaux", $totaux);
$smarty->assign("peekData", $peekData);


}
else{
$smarty->assign("con", $connected);
$smarty->assign("next_matches", $database->getNextMatches($connected));
$smarty->assign("navTournois", $database->getNavTournois());
$smarty->assign("tournoi", $tournoi);
$smarty->assign("groupes", $groupes);
}


$smarty->display('default/tournoisPools.tpl');
?>