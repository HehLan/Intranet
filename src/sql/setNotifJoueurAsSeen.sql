UPDATE joueurs_notifications 
SET seen = TRUE
WHERE id_joueurs=:idj AND id_notifications=:idn;