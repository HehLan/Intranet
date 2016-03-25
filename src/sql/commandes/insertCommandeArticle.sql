INSERT INTO commande_articles 
	(`id_commande`, `quantite`, `id_article_groupes_has_articles`) 
	VALUES (:idc, :quant, :idaga);
