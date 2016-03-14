{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/finalesRounds.css" >
        <script type="text/javascript" src="{#domain#}/src/js/admin-finales.js"></script>
	<script type="text/javascript" src="{#domain#}/src/js/bracket/jquery.gracket.js"></script> 
    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }	
        
        <div id="container">
            <div id="contenu">
		<h1>Finales de {$tournoi['nomTournoi']} {$gsb[$looser]}</h1>
                <form>
                    {if {$matches|@count} > 0}
                        <table>
                            <tr>
                                {for $c=$niveau to 0 step -1}
                                        <th> Round {1+$niveau-$c} </th>
                                {/for}
                            </tr>
                            <tr>
                                {for $c=$niveau to 0 step -1}
                                    <td>
                                        <table>
                                            {for $m=1 to $match_par_niveau[$c]}
                                                {for $j=1 to $matches[$tablo[$c][$m]]['maxj']}
                                                    {if $j==1}
                                                        {if $c==0 && $m==1}
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="{$matches[$tablo[$c][$m]]['nbr_manche'] + 4}">
                                                                    FINALE<br>
                                                                    <a href="#" onclick="popup_heure({$tablo[$c][$m]})">{$matches[$tablo[$c][$m]]['heure']}</a>
                                                                </td>
                                                            </tr>
                                                        {elseif $c==0 && $m==2}
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="{$matches[$tablo[$c][$m]]['nbr_manche'] + 4}">
                                                                    Petite Finale<br>
                                                                    <a href="#" onclick="popup_heure({$tablo[$c][$m]})">{$matches[$tablo[$c][$m]]['heure']}</a>
                                                                </td>
                                                            </tr>
                                                        {else}
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="{$matches[$tablo[$c][$m]]['nbr_manche'] + 4}">
                                                                    <a href="#" onclick="popup_heure({$tablo[$c][$m]})">{$matches[$tablo[$c][$m]]['heure']}</a>
                                                                </td>
                                                            </tr>
                                                        {/if}
                                                        <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur
                                                                <input type="checkbox"
                                                                    name="cb_{$tablo[$c][$m]}" id="cb_{$tablo[$c][$m]}"
                                                                    onclick="active_groupe({$tablo[$c][$m]},{$matches[$tablo[$c][$m]]['nbr_manche']},{$matches[$tablo[$c][$m]]['maxj']})">
                                                            </th>
                                                            {for $ma=1 to $matches[$tablo[$c][$m]]['nbr_manche']}
                                                                <th class="th_arbre_joueur">M{$ma}</th>
                                                            {/for}
                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                    {/if}
                                                    <tr>
                                                        {if $j==1}	
                                                            <td class="td_arbre_gauche" rowspan="{$matches[$tablo[$c][$m]]['maxj']}">#{$tablo[$c][$m]}</td>
                                                        {/if}
                                                        {if isset($matches[$tablo[$c][$m]][$j]['nom'])}
                                                            <td class="td_arbre_joueur">{$matches[$tablo[$c][$m]][$j]['nom']}</td>
                                                        {else}
                                                            <td class="td_arbre_joueur">TBA</td>
                                                        {/if}
                                                        <td class="td_arbre_joueur{$clr[$j]}">{$nom[$j]}</td>
                                                        
                                                        {for $ma=1 to $matches[$tablo[$c][$m]]['nbr_manche']}
                                                            {if isset($scores[$tablo[$c][$m]][$j]['scores'][$ma])}
                                                                <td class="td_arbre_joueur_score">{$scores[$tablo[$c][$m]][$j]['scores'][$ma]}</td>
                                                            {else}
                                                                <td class="td_arbre_joueur_score">-</td>
                                                            {/if}
                                                            <td class="td_arbre_joueur_score{$clr[$j]}">
                                                                <input type="text" name="s_{$tablo[$c][$m]}_{$j}_{$ma}"
                                                                    id="s_{$tablo[$c][$m]}_{$j}_{$ma}"
                                                                    value="{$score_ma}" size="4" disabled="disabled">
                                                            </td>
                                                        {/for}
                                                        
                                                        <td class="td_arbre_joueur_total{$clr[$j]}">
                                                            <input type="hidden" name="s_{$tablo[$c][$m]}_{$j}_id" 
                                                                id="s_{$tablo[$c][$m]}_{$j}_id" value="{$id_score[$j]}">
                                                            {$score[$j]}
                                                        </td>
                                                        
                                                        {if isset($matches[$tablo[$c][$m]][$j]['score'])}	
                                                            <td class="td_arbre_joueur_total">{$matches[$tablo[$c][$m]][$j]['score']}</td>
                                                        {else}
                                                            <td class="td_arbre_joueur_total">0</td>
                                                        {/if}
                                                        {if $j==1}	
                                                            <td class="td_arbre_droite" rowspan="{$matches[$tablo[$c][$m]]['maxj']}">
                                                                {$matches[$tablo[$c][$m]]['fleche']} {$matches[$tablo[$c][$m]]['id_parent']}
                                                            </td>                                                            
                                                        {/if}
                                                    </tr>
                                                {/for}
                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="{$matches[$tablo[$c][$m]]['nbr_manche'] + 4}"></td>
                                                </tr>  
                                            {/for}
                                        </table>
                                    </td>
                                {/for}
                            </tr>
                        </table>
                    {else}  
                        Ce tournoi n'est pas encore encodé dans la base de données du site.
                    {/if}
                </form>
            </div>
        </div>
        <!-- gap to have the footer in the bottom of the window -->
	<div style="height: 450px;">
	
	</div>
        {include file="admin/footer.tpl"}
        
        <div id="shadowing"></div>

	<div id="div_popup" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="modifier_heure.php">
            <input type="hidden" name="id_match" id="input_id_match" value="0" />
            <input type="hidden" name="id_tournoi" value="{$id_tournoi}" />
            <input type="hidden" name="looser" value="{$looser}" />
            <input type="hidden" name="page" value="finales" />
            vendredi <input type="radio" name="jour" value="vendredi">
            / samedi <input type="radio" name="jour" value="samedi">
            / dimanche <input type="radio" name="jour" value="dimanche">
            <br>
            Heure :
            <select name="heure">
                {for $i=0 to 23}
                    <option>
                        {if $i<10}
                            0
                        {else}
                            {$i}
                        {/if}
                    </option>
                {/for}
            </select>
            h
            <select name="minute">
                 {for $i=0 to 59 step 5}
                    <option>
                        {if $i<10}
                            0
                        {else}
                            {$i}
                        {/if}
                    </option>
                {/for}
            </select>
            <br>
            <input type="submit" value="Modifier" /><br>
	</div>
    </body>
</html>