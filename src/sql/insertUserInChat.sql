INSERT INTO tchat_users (id_joueur,pseudo,lastcon)
VALUES (:id,:pseudo,NOW())
ON DUPLICATE KEY UPDATE lastcon=NOW()
