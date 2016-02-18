SELECT DISTINCT m.id_match, m.heure, t.nomTournoi 
FROM
    (
        matchs as m,
        tournoi as t,
        matchs_joueurs as mj,
        matchs_equipes as me,
        equipes_joueur as ej
    )
WHERE
    t.id_tournoi=m.id_tournoi AND 
    (
        (mj.id_joueur=:idj AND m.id_match=mj.id_match)
        OR
        (ej.id_joueur=:idj AND me.id_equipe=ej.id_equipes AND m.id_match=me.id_match)
    )
    AND m.heure>NOW()
ORDER BY m.heure
LIMIT 0,3
