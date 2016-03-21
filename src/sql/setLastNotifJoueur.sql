UPDATE joueurs 
SET lastSeenNotif  = NOW()
WHERE id_joueurs=:id;