SELECT me.id_match,m.heure, SUM(me.score) AS score, 
(
    SELECT mte2.id_equipe
    FROM matchs_equipes AS mte2
    WHERE mte2.id_match=m.id_match AND mte2.id_equipe<>:ide
    LIMIT 0,1
) AS team2								
FROM (matchs_equipes AS mte, matchs AS m) 
LEFT JOIN (manches_equipes AS me)
ON (me.id_match=m.id_match AND me.id_equipe=:ide)
WHERE m.id_groupe=:idg AND mte.id_match=m.id_match AND mte.id_equipe=:ide
GROUP BY m.id_match
