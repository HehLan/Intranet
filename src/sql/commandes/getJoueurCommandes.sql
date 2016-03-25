SELECT  c.id_commande, c.comment, c.total, C.disponible, c.date,
	c.id_joueur, c.paye, c.commanded
	FROM commandes AS c
    WHERE id_joueur=:idj;