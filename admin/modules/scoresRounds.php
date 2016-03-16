<?php

foreach($groupes as $groupe)
{
    $sql = 'SELECT j.id_joueur as id, j.pseudo as nom
            FROM joueurs as j, joueurs_groupes as g
            WHERE g.id_groupe=:idg and j.id_joueur=g.id_joueur';
    $query = new Query($database, $sql);
    $query->bind(':idg', $groupe['id_groupe'], PDO::PARAM_INT);
    if($query->execute())
    {
        $participants[$groupe['id_groupe']] = $query->getResult();
    }
    else 
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - SQL EQUIPES';
        }
        exit; 
    }		
}
//------------ KILL THEM BEFORE THEY LAY EGGS!!!!!!!!!!!! ------------

foreach($groupes as $keyGroupe => $groupe)
{
    //-----------------TOURNOI TYPE UT TRACKMANIA-----------------
    $sql = 'SELECT id_match,nbr_manche, heure FROM matchs WHERE id_groupe=:idg LIMIT 0,1';
    $query = new Query($database, $sql);
    $query->bind(':idg', $groupe['id_groupe'], PDO::PARAM_INT);
    if($query->execute())
    {
        if($nbr_manches = $query->getResult()[0])
        {
            $groupes[$keyGroupe]['id_match'] = $nbr_manches['id_match'];
            $groupes[$keyGroupe]['heure'] = get_jour_de_la_semaine($nbr_manches['heure']).' '.get_heure($nbr_manches['heure']);
            $groupes[$keyGroupe]['nbr_manches'] = $nbr_manches['nbr_manche'];
        }
        else
        {
            $groupes[$keyGroupe]['nbr_manches'] = $tournoi['nombreManche'];
        }
        $nbr_manches = $groupes[$keyGroupe]['nbr_manches'];
    }
    else 
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - SQL MANCHES'; 
        }
        exit;
    }	

	
    $sql = 'SELECT j.pseudo, mj.id_joueur, SUM(mj.score) as total
            FROM joueurs as j, manches_joueurs as mj, matchs as m 
            WHERE m.id_groupe=:idg AND mj.id_match=m.id_match and j.id_joueur=mj.id_joueur
            GROUP BY mj.id_joueur
            ORDER BY total DESC, j.pseudo';
    $query = new Query($database, $sql);
    $query->bind(':idg', $groupe['id_groupe'], PDO::PARAM_INT);
    if($query->execute())
    {
        $totaux = $query->getResult();
    }
    else 
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - SQL MANCHES'; 
        }
        exit;
    }									
	
    $sql = 'SELECT mj.id_joueur, mj.numero_manche, mj.score
            FROM manches_joueurs as mj, matchs as m 
            WHERE m.id_groupe=:idg AND mj.id_match=m.id_match 
            ORDER BY id_joueur';
    $query = new Query($database, $sql);
    $query->bind(':idg', $groupe['id_groupe'], PDO::PARAM_INT);
    if($query->execute())
    {
        foreach ($query->getResult() as $ligne)
        {
            $scores[$ligne['id_joueur']][$ligne['numero_manche']] = $ligne['score'];
        }
    }
    else 
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - SQL MANCHES';  
        }
        exit;
    }							
	
    $inscrits='';	
    foreach($participants[$groupe['id_groupe']]	as $joueur)
    {
        $inscrits[$joueur['id']]['nom'] = $joueur['nom'];
        $inscrits[$joueur['id']]['id'] = $joueur['id'];
        $inscrits[$joueur['id']]['ok'] = false;
    }
    foreach($totaux as $joueur)
    {
        for($i=1; $i<=$nbr_manches; $i++)
        {
            $valeur='';
            if(isset($scores[$joueur['id_joueur']][$i]))
            {
                $inscrits[$joueur['id_joueur']]['scores'][$i] = $scores[$joueur['id_joueur']][$i];
            }
        }
        $inscrits[$joueur['id_joueur']]['ok'] = true;
    }
    $groupes[$keyGroupe]['totaux'] = $totaux;
    $groupes[$keyGroupe]['inscrits'] = $inscrits;
}

// send to the template
$smarty->assign('con', $connected);
$smarty->assign('tournoi', $tournoi);
$smarty->assign('groupes', $groupes);

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/scoresRounds.tpl');
?>