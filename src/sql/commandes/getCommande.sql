SELECT ca.id_commande_articles, ca.quantite, 
	aga.prix, 
    a.nom, a.description,
    ag.nom
FROM commande_articles AS ca
LEFT JOIN article_groupes_has_articles AS aga
	ON aga.id_article_groupes_has_articles = ca.id_article_groupes_has_articles
LEFT JOIN articles AS a
	ON a.id_article = aga.id_article
LEFT JOIN article_groupes AS ag
	ON ag.id_article_groupes = aga.id_article_groupes
WHERE ca.id_commande =:idc;