<?php

function getNewsList() {
    global $connexion;
    //SQL query to select all news
    $sql = "SELECT * FROM news WHERE invisible=0 ORDER BY quand DESC";
    $query = $connexion->prepare($sql);

    $newsList = array();
    if ($query->execute()) {
        while ($news = $query->fetch(PDO::FETCH_ASSOC)) {
            $newsList[] = array(
                "titre" => $news['titre'],
                "texte" => nl2br($news['texte']),
                "quand" => get_jour_de_la_semaine($news['quand']) . ' à ' . get_heure($news['quand']),
                "id_news" => $news['id_news']);
        }
    } else
        echo 'ERREUR NEWS SQL';

    return $newsList;
}

?>