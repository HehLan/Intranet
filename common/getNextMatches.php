<?php

function getNextMatches() {
    global $con;
    global $connexion;

    if (!$con)
        return '';

    $sql = file_get_contents('sql/selectMatches.sql');
    $query = $connexion->prepare($sql);
    $query->bindValue('idj', $_SESSION['id_joueur'], PDO::PARAM_INT);

    if ($query->execute())
        $next_matches = $query->fetchAll(PDO::FETCH_ASSOC);
    else {
        echo 'ERREUR SQL NEXT MATCHES';
        exit;
    }
    $nm = array();
    foreach ($next_matches as $next_match) {
        $nm[] = array("jour" => get_jour_de_la_semaine($next_match['heure']),
            "heure" => get_heure($next_match['heure']),
            "nom" => $next_match['nomTournoi']);
    }

    return $nm;
}

?>
