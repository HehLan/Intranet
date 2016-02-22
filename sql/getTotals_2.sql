SELECT mj.id_joueur, mj.numero_manche, mj.score
FROM manches_joueurs AS mj, matchs AS m 
WHERE m.id_groupe=:idg AND mj.id_match=m.id_match 
ORDER BY id_joueur
