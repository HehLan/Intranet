SELECT j.id_joueur AS id, j.pseudo AS nom
FROM joueurs AS j, joueurs_groupes AS g
WHERE g.id_groupe=:idGroup AND j.id_joueur=g.id_joueur
