SELECT nomTournoi
FROM joueurtournoi, tournoi
WHERE joueurtournoi.id_joueur = :idPlayer
    AND tournoi.id_tournoi = joueurtournoi.id_tournoi
