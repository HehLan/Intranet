SELECT me.id_match
	FROM matchs_equipes AS me
    LEFT JOIN equipes_groupes AS eg
		ON eg.id_equipe=me.id_equipe
	WHERE me.id_equipe IN (:idt1,:idt2)
	AND eg.id_groupe=:idg
	GROUP BY me.id_match 
	HAVING COUNT(*) > 1;