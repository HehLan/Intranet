<?php

function getNavTournois() {
    global $connexion;
    //SQL Query to select all tournament names
    $sql = "SELECT id_tournoi, nomTournoi FROM tournoi";
    $query = $connexion->prepare($sql);
    $query->execute();

    $nt = array();
    while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
        $nt[] = array("idTournoi" => $data['id_tournoi'],
            "nomTournoi" => $data['nomTournoi']);
    }

    return $nt;
}

?>