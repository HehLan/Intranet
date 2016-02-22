SELECT *
FROM emplacement,joueurs
WHERE joueurs.id_emplacement = emplacement.id_emplacement
AND emplacement.id_emplacement != 0
