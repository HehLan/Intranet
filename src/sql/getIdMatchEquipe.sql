SELECT me.id_match FROM matchs_equipes AS me, equipes_groupes AS eg
WHERE me.id_equipe IN (:idt1,:idt2)
AND eg.id_groupe=:idg
AND me.id_equipe = eg.id_equipe
GROUP BY me.id_match 
HAVING COUNT(*) > 1;