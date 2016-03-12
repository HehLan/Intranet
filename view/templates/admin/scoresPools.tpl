<!DOCTYPE html>
<html lang="fr">
<head>
	<?php require_once('../includes/_meta.php'); ?> 
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/getXhr.js"></script>
    <script type="text/javascript">
	function active_score(idm,idt)
	{
		if(document.getElementById('score_m_'+idm+'_p_'+idt).disabled)
		{
			document.getElementById('score_m_'+idm+'_p_'+idt).disabled=false;
		}
		else
		{
			document.getElementById('score_m_'+idm+'_p_'+idt).disabled=true;
		}
	}
	function active_score2(idm,m,idt)
	{
		if(document.getElementById('score_m_'+idm+'_ma_'+m+'_p_'+idt).disabled)
		{
			document.getElementById('score_m_'+idm+'_ma_'+m+'_p_'+idt).disabled=false;
		}
		else
		{
			document.getElementById('score_m_'+idm+'_ma_'+m+'_p_'+idt).disabled=true;
		}
	}
	function popup_heure(idm)
	{
		document.getElementById('input_id_match').value=idm;
		document.getElementById('shadowing').style.display='block';
		document.getElementById('div_popup').style.visibility='visible';

	}
	function popup_close()
	{
		document.getElementById('shadowing').style.display='none';
		document.getElementById('div_popup').style.visibility='hidden';			
	}	
	</script>
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
				{foreach from=$groupes item=groupe}
					<table class="table_pool_lol">
						<tr>
							<th class="th_titre_pool_lol" colspan="'.($nbrteam+2).'">'.$groupe['nom_groupe'].'<th>
						</tr>
						<tr>
							<td class="td_vide_pool_lol"></td>
							{for $i=0 to $groupe['nbrteam']}
								<th class="th_team2_pool_lol">{$teams[$i]['nom']}</th>
							{/for}
							<th class="th_score_pool_lol">score</th>
						</tr>
				
				<td class="td_score_pool_lol">'.$totaux[$team['id']].'</td>	
				</tr>
				</table>
				<br><br>
				{/foreach}
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