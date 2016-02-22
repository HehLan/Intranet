SELECT j.pseudo, mj.id_joueur, SUM(mj.score) AS total
FROM joueurs AS j, manches_joueurs AS mj, matchs AS m 
WHERE m.id_groupe=:idg AND mj.id_match=m.id_match AND j.id_joueur=mj.id_joueur
GROUP BY mj.id_joueur
ORDER BY total DESC, j.pseudo
