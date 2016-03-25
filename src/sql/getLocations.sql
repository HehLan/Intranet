SELECT emplacement.id_emplacement AS id_emplacement,
top,
xy_left,
width,
height,
numero,
joueurs.id_joueur AS id_joueur
FROM emplacement 
LEFT JOIN joueurs ON emplacement.id_emplacement = joueurs.id_emplacement
WHERE emplacement.id_emplacement != 0
ORDER BY numero ASC;
