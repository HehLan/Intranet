<?php

function getNavTournois()
{
    global $database;
    
    //SQL Query to select all tournament names
    $sql = "SELECT id_tournoi, nomTournoi FROM tournoi";    
    $database->query($sql);
    $database->getQuery()->execute();

    $nt = array();
    while ($data = $database->getQuery()->fetch(PDO::FETCH_ASSOC))
    {
        $nt[] = array("idTournoi" => $data['id_tournoi'],
            "nomTournoi" => $data['nomTournoi']);
    }

    return $nt;
}

?>