SELECT pseudo,numero 
	FROM emplacement,joueurs
	WHERE joueurs.id_emplacement=:idp 
		AND joueurs.id_emplacement=emplacement.id_emplacement;