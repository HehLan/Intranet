SELECT  c.id_commande, c.comment, c.total, C.disponible, c.date
	FROM commandes AS c
    WHERE id_joueur=:idj;