SELECT e.id_equipes AS id, e.nom AS nom
FROM equipes AS e, equipes_groupes AS g
WHERE g.id_groupe=:idGroup AND e.id_equipes=g.id_equipe
