{* Smarty *}
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/tournois.css" >
        <script type="text/javascript" src="{#domain#}/src/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/src/js/getXhr.js"></script>
        <script type="text/javascript">
            /*function go_groupes(id)
            {
                    document.location='groupes.php?id='+id;
            }*/
            function go_finales(id,parts,lb)
            {
                    document.getElementById('input2_id_tournoi').value=id;
                    document.getElementById('input2_looser').value=lb;
                    document.getElementById('nbrpart2').innerHTML=parts;
                    document.getElementById('shadowing').style.display='block';
                    document.getElementById('div_popup2').style.visibility='visible';
            }	
            function go_finales2(id,parts,lb)
            {
                    document.getElementById('input3_id_tournoi').value=id;
                    document.getElementById('input3_looser').value=lb;
                    document.getElementById('nbrpart3').innerHTML=parts;
                    document.getElementById('shadowing').style.display='block';
                    document.getElementById('div_popup3').style.visibility='visible';
            }		
            function go_groupes(id,parts)
            {
                    document.getElementById('input_id_tournoi').value=id;
                    document.getElementById('nbrpart').innerHTML=parts;
                    document.getElementById('shadowing').style.display='block';
                    document.getElementById('div_popup').style.visibility='visible';

            }
            function popup_close()
            {
                    document.getElementById('shadowing').style.display='none';
                    document.getElementById('div_popup').style.visibility='hidden';		
                    document.getElementById('div_popup2').style.visibility='hidden';		
                    document.getElementById('div_popup3').style.visibility='hidden';		
            }

            function erase_tournoi(var idt)
            {
                    var r = confirm("Voulez-vous vraiment supprimer le tournoi ayant l'id "+idt+" ?");
                    if (r==true)
                    {

                    }
            }
	</script>
    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }	
	<div id="container">
            <div id="contenu">
                <table id="adm_tablo">
                    <tr>
                        <th>id</th>
                        <th>Tournoi</th>
                        <th>Participants</th>
                        <th>Joueurs par team</th>
                        <th>Teams par match</th>
                        <th>Nombre de manches</th>
                        <th>Heure des qualifications</th>
                        <th>Heure des finales</th>
                        <th>Durée intermatch</th>
                        <th>Gérer les Qualifications</th>
                        <th>Gérer les Finales</th>
                        <th>Looser Bracket 1</th>
                        <th>Looser Bracket 2</th>
                        <th>Supprimer</th>
                    </tr>
                    {foreach from=$tournois item=tournoi}
                        <tr>
                            <td>{$tournoi['id_tournoi']}</td>
                            <td>{$tournoi['nomTournoi']}</td>
                            <td><strong>{$participants['nbr']}</strong></td>
                            <td>{$tournoi['joueurParTeam']}</td>
                            <td>{$tournoi['teamParMatch']}</td>
                            <td>{$tournoi['nombreManche']}</td>
                            <td>{$tournoi['heure_groupe_start']}</td>
                            <td>{$tournoi['heure_finale_start']}</td>
                            <td>{$tournoi['duree_inter_match']}</td>
							
                            <!-- MANAGE POOLS -->
                            <td>                                
                                {if !($tournoi['exist_manche_qualif0'])}
									<input type="button" value="Créer" onclick="go_groupes({$tournoi['id_tournoi']},{$participants['nbr']})"/>
								{else}
									<input type="button" value="Gérer" onclick="document.location.href='scores.php?id_tournoi={$tournoi['id_tournoi']}'" />
									<input type="button" value="Effacer" onclick="reset_groupes({$tournoi['id_tournoi']},'group',0)"/>
								{/if}
							</td>
							<td>
								{if !($tournoi['exist_manche_final0'])}
									{if $tournoi['joueurParTeam']>1}
										<input type="button" value="Créer" onclick="go_finales({$tournoi['id_tournoi']},{$participants['nbr']},0)"/>
									{else}
										<input type="button" value="Créer" onclick="go_finales2({$tournoi['id_tournoi']},{$participants['nbr']},0)"/>
									{/if}
								{else}
									<input type="button" value="Gérer" onclick="document.location.href='finales.php?id_tournoi={$tournoi['id_tournoi']}&looser=0'" />
									<input type="button" value="Effacer" onclick="reset_groupes({$tournoi['id_tournoi']},'finale',0)"/>
								{/if}
							</td>                               
                            <!-- MANAGE FINALS -->
                            <td>
                                {if !($tournoi['exist_manche_final2'])}
									{if $tournoi['joueurParTeam']>1}
										<input type="button" value="Créer" onclick="go_finales({$tournoi['id_tournoi']},{$participants['nbr']},2)"/>
									{else}
										<input type="button" value="Créer" onclick="go_finales2({$tournoi['id_tournoi']},{$participants['nbr']},2)"/>
									{/if}
								{else}
									<input type="button" value="Gérer" onclick="document.location.href='finales.php?id_tournoi={$tournoi['id_tournoi']}&looser=2'" />
									<input type="button" value="Effacer" onclick="reset_groupes({$tournoi['id_tournoi']},'looser1',2)"/>
								{/if}
                            </td>
                            <!-- MANAGE LOOSER BRACKETS -->
                            <td>
                                {if !($tournoi['exist_manche_final3'])}
									{if $tournoi['joueurParTeam']>1}
										<input type="button" value="Créer" onclick="go_finales({$tournoi['id_tournoi']},{$participants['nbr']},3)"/>
									{else}
										<input type="button" value="Créer" onclick="go_finales2({$tournoi['id_tournoi']},{$participants['nbr']},3)"/>
									{/if}
								{else}
									<input type="button" value="Gérer" onclick="document.location.href=finales.php?id_tournoi={$tournoi['id_tournoi']}&looser=3'" />
									<input type="button" value="Effacer" onclick="reset_groupes({$tournoi['id_tournoi']},'looser2',3)"/>
								{/if}
                            </td>
							<!-- ERASE TOURNOI -->
                            <td>
                                <a href="tournois_management.php?del={$tournoi['id_tournoi']}">
                                    <img src="{#assets#}/img/cross_red.png" alt="Supprimer" />
                                </a>
                            </td>
                        </tr>
                    {/foreach}	
                </table>		
            </div>
	</div>
    <!-- gap to have the footer in the bottom of the window -->
	<div style="height: 390px;">
	
	</div>
    
	{include file="admin/footer.tpl"}
	
	
	<div id="shadowing"></div>

	<div id="div_popup" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
		<input type="button" value="annuler" onclick="popup_close()" />
		<form method="POST" action="groupes.php">
		<input type="hidden" name="id_tournoi" id="input_id_tournoi" value="0" />
		<input type="hidden" name="looser" id="input_looser" value="0" /><br>
		Nombre de participants : <span id="nbrpart"></span><br>
		Nombre de groupes : <input type="text" name="nbrgroupes" value="0" size="4"/><br>
		<input type="submit" value="Créer" /><br>
		</form>
	</div>
	<div id="div_popup2" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
		<input type="button" value="annuler" onclick="popup_close()" />
		<form method="POST" action="finales.php">
		<input type="hidden" name="id_tournoi" id="input2_id_tournoi" value="0" />
		<input type="hidden" name="looser" id="input2_looser" value="0" /><br>
		Nombre de participants : <span id="nbrpart2"></span><br>
		Petite finale ? : <input type="checkbox" name="petite_finale" value="1"/><br>
		Nombre de qualifiés : <select name="qualifs"><option>4<option>6<option>8<option>12<option>16<option>24<option>32<option>48<option>64<option>96<option>128</select><br>
		<input type="submit" value="Créer" /><br>
		</form>
	</div>	
	<div id="div_popup3" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
		<input type="button" value="annuler" onclick="popup_close()" />
		<form method="POST" action="finales.php">
		<input type="hidden" name="id_tournoi" id="input3_id_tournoi" value="0" />
		<input type="hidden" name="looser" id="input3_looser" value="0" /><br>
		Nombre de participants : <span id="nbrpart3"></span><br>
		Petite finale ? : <input type="checkbox" name="petite_finale" value="1"/><br>
		Nombre de groupes : <select name="nbrgroupes"><option>1<option>2<option>4<option>8<option>16</select><br>
		Taille des groupes : <input type="text" name="tgroupes" value="0"  size="4"/><br>
		<input type="submit" value="Créer" /><br>
		</form>
	</div>		
</body>
</html>