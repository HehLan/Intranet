<?php

session_start();
require_once('common/connect.php');
require_once('common/utils.php');
require_once('common/getNextMatches.php');
require_once('common/getNavTournois.php');
require_once('class/Smarty_HEHLan.class.php');

$con = false;
$nbrteam = 0;
$smarty = new Smarty_HEHLan();


if (isset($_SESSION['id_joueur'])) {
    if (($_SESSION['id_joueur'] != 0))
        $con = true;
}

//The tournament id is get from the url which is get by the href of navigation tabs
$id_tournoi = 1;
if (isset($_GET['id']))
    $id_tournoi = $_GET['id'];

//SQL Query to select data of the tournament
$sql = 'SELECT * FROM tournoi WHERE id_tournoi=:id';
$query = $connexion->prepare($sql);
$query->bindValue(':id', $id_tournoi, PDO::PARAM_INT);
if ($query->execute())
    $tournoi = $query->fetch(PDO::FETCH_ASSOC);
else {
    echo 'ERREUR SQL TOURNOI';
    exit;
}

//SQL Query to select pools for this tournament
$groupes = '';
$sql = 'SELECT * FROM groupes_pool WHERE id_tournoi=:id';
$query = $connexion->prepare($sql);
$query->bindValue(':id', $id_tournoi, PDO::PARAM_INT);
if ($query->execute())
    $groupes = $query->fetchAll(PDO::FETCH_ASSOC);
else {
    echo 'ERREUR SQL GROUPES';
    exit;
}

$jpt = $tournoi['joueurParTeam'];

foreach ($groupes as $groupe) {
    if ($jpt > 1) {
        $sql = 'SELECT e.id_equipes AS id, e.nom AS nom
					FROM equipes AS e, equipes_groupes AS g
					WHERE g.id_groupe=:idg AND e.id_equipes=g.id_equipe';
        $query = $connexion->prepare($sql);
        $query->bindValue(':idg', $groupe['id_groupe'], PDO::PARAM_INT);
        if ($query->execute())
            $participants[$groupe['id_groupe']] = $query->fetchAll(PDO::FETCH_ASSOC);
        else {
            echo 'ERREUR SQL EQUIPES';
            exit;
        }
    } else {
        $sql = 'SELECT j.id_joueur AS id, j.pseudo AS nom
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
}
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

$totaux = array();

foreach ($groupes as $itGroupe => $groupe) {
    if ($jpt > 1) {
        //-----------------TOURNOI TYPE LOL COD-----------------	
        $resultTeams = array();
        $nbrteam = 0;
        $teams = '';
        $scores = '';
        foreach ($participants[$groupe['id_groupe']] as $team) {
            $teams[$nbrteam]['nom'] = $team['nom'];
            $teams[$nbrteam]['id'] = $team['id'];
            $nbrteam++;
        }
        $groupes[$itGroupe]['teams'] = $teams;

        $heures = '';

        foreach ($teams as $team) {
            $sql = "SELECT me.id_match,m.heure, SUM(me.score) as score, 
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
                        $scores[$team['id']][$ligne['team2']]['id_match'] = $ligne['id_match'];
                    }
                    $heures[$team['id']][$ligne['team2']] = $ligne['heure'];
                }
            } else {
                echo 'ERREUR SQL SCORES TEAM 1';
                exit;
            }
        }
        // A supprimer mais warning:undefined index
        foreach ($teams as $team) {
            $totaux[$team['id']] = 0;
            $resultTeam = array();
            foreach ($teams as $team2) {
                if ($team['id'] != $team2['id']) {
                    $couleur = 'same_';
                    $valeur = '';
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
                    }
                    if ($valeur == '') {
                        if (isset($heures[$team['id']][$team2['id']]))
                            $valeur = get_jour_de_la_semaine($heures[$team['id']][$team2['id']]) . ' ' . get_heure($heures[$team['id']][$team2['id']]);
                    }
                    $resultTeam[] = array(
                        "couleur" => $couleur,
                        "valeur" => $valeur);
                } else
                    $resultTeam[] = array();
            }
            if (!empty($resultTeam))
                $resultTeams[] = $resultTeam;
        }
        $groupes[$itGroupe]['resultTeams'] = $resultTeams;
    }
    else {
        //-----------------TOURNOI TYPE UT TRACKMANIA-----------------

        $sql = "SELECT nbr_manche, heure FROM matchs WHERE id_groupe=:idg LIMIT 0,1";
        $query = $connexion->prepare($sql);
        $query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
        $heure = '';
        if ($query->execute()) {
            if ($nbr_manches = $query->fetch(PDO::FETCH_ASSOC)) {
                $heure = $nbr_manches['heure'];
                $nbr_manches = $nbr_manches['nbr_manche'];
            } else
                $nbr_manches = $tournoi['nombreManche'];
        }
        else {
            echo 'ERREUR SQL MANCHES';
            exit;
        }

        $sql = "SELECT j.pseudo, mj.id_joueur, SUM(mj.score) as total
			FROM joueurs as j, manches_joueurs as mj, matchs as m 
			WHERE m.id_groupe=:idg AND mj.id_match=m.id_match and j.id_joueur=mj.id_joueur
			GROUP BY mj.id_joueur
			ORDER BY total DESC, j.pseudo";
        $query = $connexion->prepare($sql);
        $query->bindValue('idg', $groupe['id_groupe'], PDO::PARAM_INT);
        if ($query->execute())
            $totaux = $query->fetchAll(PDO::FETCH_ASSOC);
        else {
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
                $totaux[$ligne['id_joueur']]['scores'][$ligne['numero_manche']] = $ligne['score'];
            }
        } else {
            echo 'ERREUR SQL MANCHES';
            exit;
        }

        $groupes[$itGroupe]['jour'] = get_jour_de_la_semaine($heure);
        $groupes[$itGroupe]['heure'] = get_heure($heure);

        $inscrits = '';
        foreach ($participants[$groupe['id_groupe']] as $joueur) {
            $inscrits[$joueur['id']]['nom'] = $joueur['nom'];
            $inscrits[$joueur['id']]['ok'] = false;
        }
        $joueurs = array();
        $inscrits = array();

        foreach ($totaux as $idJoueur => $joueur) {
            $inscrits[$joueur['id_joueur']]['ok'] = true;
        }
        $groupes[$itGroupe]['joueurs'] = $totaux;
        $groupes[$itGroupe]['inscrits'] = $inscrits;
    }
}

// Applying Template
$smarty->assign("con", $con);
$smarty->assign("next_matches", getNextMatches());
$smarty->assign("navTournois", getNavTournois());
$smarty->assign("tournoi", $tournoi);
$smarty->assign("nbr_lb2", $nbr_lb2);
$smarty->assign("nbr_lb3", $nbr_lb3);
$smarty->assign("nbrteam", $nbrteam);
$smarty->assign("jpt", $jpt);
$smarty->assign("groupes", $groupes);

if ($jpt > 1) {
    $smarty->assign("resultTeams", $resultTeams);
    $smarty->assign("totaux", $totaux);
} else {
    
}

$smarty->display('templates/default/tournois.tpl');
?>