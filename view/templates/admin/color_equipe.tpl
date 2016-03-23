{* Smarty *}
<script type='text/javascript'>
	{foreach from=$emplacements item=emplacement}
		$('#{$emplacement["id_emplacement"]}').css( { background : '#337ab7' } );
	{/foreach}
	$('#dialogInfo_equipe').css( { display:'block' } );
</script>
<center><u>Information equipe :</u></center>
<u>Team :</u>{$nomequipe}
<br>
<u>Pseudo Joueur :</u>{$pseudo}
<br>
<u>Tournoi :</u>{$nomtournoi}
</script>