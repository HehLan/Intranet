SELECT COUNT(*) AS nbr
FROM matchs
WHERE id_groupe IS NULL
AND id_tournoi=:idTournament
AND looser_bracket=:looserBracket
