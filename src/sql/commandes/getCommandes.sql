SELECT  c.id_commande, c.comment, c.total, C.disponible, c.date,
	c.id_joueur, c.paye
	FROM commandes AS c;