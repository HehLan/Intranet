SELECT *
FROM equipes, equipes_joueur
WHERE equipes_joueur.id_joueur = :idPlayer
AND equipes.id_equipes = equipes_joueur.id_equipes
