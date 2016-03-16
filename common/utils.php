<?php

//Get the day of the week
function get_jour_de_la_semaine($chaine)
{
    $y = substr($chaine, 0, 4);
    $m = substr($chaine, 5, 2);
    $d = substr($chaine, 8, 2);
    $timestamp = mktime(0, 0, 0, $m, $d, $y);
    $jsem = date("w", $timestamp);
    switch ($jsem)
    {
        case '0' : $jsem = 'dimanche';
            break;
        case '1' : $jsem = 'lundi';
            break;
        case '2' : $jsem = 'mardi';
            break;
        case '3' : $jsem = 'mercredi';
            break;
        case '4' : $jsem = 'jeudi';
            break;
        case '5' : $jsem = 'vendredi';
            break;
        case '6' : $jsem = 'samedi';
            break;
    }
    return $jsem;
}

//Get the date
function get_date($chaine)
{
    $y = substr($chaine, 0, 4);
    $m = substr($chaine, 5, 2);
    $d = substr($chaine, 8, 2);
    $timestamp = mktime(0, 0, 0, $m, $d, $y);
    $jsem = date("w", $timestamp);
    switch ($jsem)
    {
        case '0' : $jsem = 'dimanche';
            break;
        case '1' : $jsem = 'lundi';
            break;
        case '2' : $jsem = 'mardi';
            break;
        case '3' : $jsem = 'mercredi';
            break;
        case '4' : $jsem = 'jeudi';
            break;
        case '5' : $jsem = 'vendredi';
            break;
        case '6' : $jsem = 'samedi';
            break;
    }
    switch ($m)
    {
        case '01' : $m = 'janvier';
            break;
        case '02' : $m = 'février';
            break;
        case '03' : $m = 'mars';
            break;
        case '04' : $m = 'avril';
            break;
        case '05' : $m = 'mai';
            break;
        case '06' : $m = 'juin';
            break;
        case '07' : $m = 'juillet';
            break;
        case '08' : $m = 'aout';
            break;
        case '09' : $m = 'septembre';
            break;
        case '10' : $m = 'octobre';
            break;
        case '11' : $m = 'novembre';
            break;
        case '12' : $m = 'décembre';
            break;
    }
    return $jsem . ' ' . $d . ' ' . $m . ' ' . $y;
}

//Get custom hour for UI
function get_heure($chaine)
{
    $h = substr($chaine, 11, 2);
    $m = substr($chaine, 14, 2);
    return $h . 'h' . $m;
}

//Test if group handle exists
function existe_manche_de_groupe($database, $idt, $jpt)
{
    if ($jpt > 1)
    {
        //SQL query to count ???
        $sql_func = 'SELECT COUNT(*) as nbr
                FROM manches_equipes as me, matchs as m
                WHERE m.id_tournoi=:idt AND m.id_groupe IS NOT NULL AND me.id_match=m.id_match';
    }
    else
    {
        //SQL query to count ???
        $sql_func = 'SELECT COUNT(*) as nbr
                FROM manches_joueurs as mj, matchs as m
                WHERE m.id_tournoi=:idt AND m.id_groupe IS NOT NULL AND mj.id_match=m.id_match';
    }
    $query_func = new Query($database, $sql_func);
    $query_func->bind(':idt', $idt, PDO::PARAM_INT);
    if ($query->execute())
    {
        $nbr = $query_func->getResult()[0];
    }
    else
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - EXISTE MANCHE GROUPE TEAM SQL';
        }
        exit; 
    }
    $nbr = $nbr['nbr'];
    if ($nbr == 0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

//Test if final handle exists
function existe_manche_de_finale($database, $idt, $jpt, $lb)
{
    if ($jpt > 1)
    {
        //SQL query to count ???
        $sql_func = 'SELECT COUNT(*) as nbr
                FROM manches_equipes as me, matchs as m
                WHERE m.id_tournoi=:idt AND m.id_groupe IS NULL AND me.id_match=m.id_match AND m.looser_bracket=:lb';
    }
    else
    {
        //SQL query to count ???
        $sql_func = 'SELECT COUNT(*) as nbr
                FROM manches_joueurs as mj, matchs as m
                WHERE m.id_tournoi=:idt AND m.id_groupe IS NULL AND mj.id_match=m.id_match AND m.looser_bracket=:lb';
    }
    $query_func = new Query($databse, $sql_func);
    $query_func->bind(':idt', $idt, PDO::PARAM_INT);
    $query_func->bind(':lb', $lb, PDO::PARAM_INT);
    if ($query_func->execute())
    {
        $nbr = $query_func->fetch(PDO::FETCH_ASSOC);
    }
    else
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - EXISTE MANCHE GROUPE TEAM SQL';
        }
        exit; 
    }
    $nbr = $nbr['nbr'];
    if ($nbr == 0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

//Test if it is registered for the final
function inscrits_en_finale($database, $idt, $jpt, $lb)
{
    if ($jpt > 1)
    {
        $sql_func = 'SELECT COUNT(*) as nbr
                        FROM matchs_equipes as me, matchs as m
                        WHERE m.id_tournoi=:idt AND m.id_groupe IS NULL AND me.id_match=m.id_match AND m.looser_bracket=:lb';
    }
    else
    {
        $sql_func = 'SELECT COUNT(*) as nbr
                        FROM matchs_joueurs as mj, matchs as m
                        WHERE m.id_tournoi=:idt AND m.id_groupe IS NULL AND mj.id_match=m.id_match AND m.looser_bracket=:lb';
    }
    $query_func = new Query($database, $sql_func);
    $query_func->bind(':idt', $idt, PDO::PARAM_INT);
    $query_func->bind(':lb', $lb, PDO::PARAM_INT);
    if ($query->execute())
    {
        $nbr = $query_func->getResult()[0];
    }
    else
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - EXISTE MATCH en FINALE TEAM SQL';
        }
        exit; 
    }
    $nbr = $nbr['nbr'];
    if ($nbr == 0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

//Test match
 function existe_match($database,$idt,$reset,$looser_bracket)
 {
    if($reset == 'group')
    {
        $sql_func = 'SELECT COUNT(*) as nbr
                        FROM matchs as m
                        WHERE m.id_tournoi=:idt AND m.id_groupe IS NOT NULL AND m.looser_bracket=:looser_bracket';
    }
    else
    {
        $sql_func = 'SELECT COUNT(*) as nbr
                        FROM matchs as m
                        WHERE m.id_tournoi=:idt AND m.id_groupe IS NULL AND m.looser_bracket=:looser_bracket';
    }
    $query_func = new Query($database, $sql_func);
    $query_func->bind(':idt', $idt, PDO::PARAM_INT);
    $query_func->bind(':looser_bracket', $looser_bracket, PDO::PARAM_INT);
    if($query_func->execute())
    {
        $nbr = $query_func->getResult()[0];
    }
    else
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR -  EXISTE MANCHE GROUPE TEAM SQL';
        }
        exit;
    }
    $nbr = $nbr['nbr'];
    if($nbr == 0)
    {
        return false;
    }
    else
    {
        return true;		
    }
 }

//Cretate a team match
function creer_match_equipe($database, $idt, $idg, $nbrm, $tpm, $heure, $ide1, $ide2)
{
    $sql_func = 'INSERT INTO matchs (id_tournoi,nbr_manche,teamParMatch,heure,id_groupe)
                    VALUES (:idt,:nbrm,:tpm,:heure,:idg)';
    $query_func = new Query($database, $sql_func);
    $query_func->bind(':idt', $idt, PDO::PARAM_INT);
    $query_func->bind(':idg', $idg, PDO::PARAM_INT);
    $query_func->bind(':nbrm', $nbrm, PDO::PARAM_INT);
    $query_func->bind(':tpm', $tpm, PDO::PARAM_INT);
    $query_func->bind(':heure', $heure, PDO::PARAM_INT);
    if (!$query_func->execute())
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - INSERT MATCHS (JOUEURS)';
        }
        exit;
    }
    $id_match = $database->getConnection()->lastInsertId();

    $sql_func = 'INSERT INTO matchs_equipes (id_match,id_equipe)
                    VALUES (:idm,:ide1),(:idm,:ide2)';
    $query_func = new Query($database, $sql_func);
    $query_func->bind(':idm', $id_match, PDO::PARAM_INT);
    $query_func->bind(':ide1', $ide1, PDO::PARAM_INT);
    $query_func->bind(':ide2', $ide2, PDO::PARAM_INT);
    if (!$query_func->execute())
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - INSERT MATCHS_JOUEURS';
        }
        exit;
    }
}

//Add hours
function ajouter_heures($h1, $nbr)
{
    $h = substr($nbr, 0, 2);
    $m = substr($nbr, 3, 2);
    $date = new DateTime($h1);
    $date->add(new DateInterval('PT' . $h . 'H' . $m . 'M'));
    return $date->format('Y-m-d H:i:s');
}

//Get variables
function get_variable($database, $nom)
{
    $sql_func = 'SELECT valeur FROM variables WHERE nom=:nom';
    $query_func = new Query($database, $sql_func);
    $query_func->bind(':nom', $nom, PDO::PARAM_STR);
    if (!$query_func->execute())
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - SELECT VALEUR';
        }
        exit;
    }
    $nom = $query_func->getResult()[0];
    return $nom['valeur'];
}

// Get only hour from string like "2016-03-13 18:38:38", ie --> 18
function get_hour_from_string($chaine)
{
    $h = substr($chaine, 11, 2);
    return $h;
}

// Get only date from string like "2016-03-13 13:38:38", ie --> 13
function get_day_from_string($chaine)
{
    $d = substr($chaine, 8, 2);
    return $d;
}

// va renvoyer une valeur bool en fonction de l'heure et du jour du match
// si match commence dans moins d'une heure, retourne True. else -> False
function checkIsPickActive($dateTime_DebutMatch)
{ 
    // ********************************** test proposals
                        return true;
    // *************************************************

    // recuperer les valeures des jours et des heures
    $dateTime_Maintenant = date('Y-m-j H:i:s');
    $heure_DebutMatch = get_hour_from_string($dateTime_DebutMatch);
    $heure_Maintenant = get_hour_from_string($dateTime_Maintenant);
    $jour_DebutMatch = get_day_from_string($dateTime_DebutMatch);
    $jour_Maintenant = get_day_from_string($dateTime_Maintenant);
    
    // logic here :)
    if($jour_Maintenant > $jour_DebutMatch)
    {
        return false;
    }
    else
    {
        if($heure_Maintenant > $heure_DebutMatch)
        {
            return false;
        }
        elseif($heure_Maintenant == $heure_DebutMatch - 1)
        {
            return true;
        }
    }
}


?>
 
