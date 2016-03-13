<!DOCTYPE html>
<html lang="fr">
<head>
	{include file="admin/meta.tpl"}
	<link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/score.css" />
	<script type="text/javascript" src="{#domain#}/src/js/score_state.js"></script>
</head>
<body role="document">
	{include file="admin/header.tpl" con=$con }
	{include file="admin/nav.tpl"  con=$con }	
	
	<div id="container">
		<div id="contenu">
			<h1>Qualifications {$tournoi['nomTournoi']}</h1>
			<form method="POST" action="scores_save.php">
				<input type="hidden" name="id_tournoi" value="{$tournoi.id_tournoi}">
				<input type="SUBMIT" value="Enregistrer">
				<br>
	
			<!-- Insérer le reste du caca ici-->
			</form>
		</div>
	</div>
    <!-- gap to have the footer in the bottom of the window -->
	<div style="height: 55px;">
	
	</div>
	{include file="admin/footer.tpl"}
	<div id="shadowing"></div>

	<div id="div_popup" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
		<input type="button" value="annuler" onclick="popup_close()" />
		<form method="POST" action="modifier_heure.php">
		<input type="hidden" name="id_match" id="input_id_match" value="0" />
		<input type="hidden" name="id_tournoi" value="<?php echo $id_tournoi; ?>" />
		<input type="hidden" name="page" value="scores" />
		vendredi <input type="radio" name="jour" value="vendredi"> / samedi <input type="radio" name="jour" value="samedi"> / dimanche <input type="radio" name="jour" value="dimanche"><br>
		Heure : <select name="heure">
		{for $i=0 to 24}
			<option>
				{if $i<10}0{/if}
				{$i}
			</option>
		{/for}
		</select>h<select name="minute">
		{for $i=0 to 60 step 5}
			<option>
				{if $i<10}0{/if}
				{$i}
			</option>
		{/for}
		</select>
		<br />
		<input type="submit" value="Modifier" /><br>
	</div>
</body>
</html>