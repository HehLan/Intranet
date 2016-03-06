SELECT * FROM joueurs as j
RIGHT JOIN emplacement as e 
ON e.id_emplacement = j.id_emplacement 
WHERE j.id_emplacement != 0;
