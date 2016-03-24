<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/scores.css" />
        <script type="text/javascript" src="{#adminAssets#}/js/scores.js"></script>
    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }	

        <div id="container">
            <div id="contenu">
                <h1>Qualifications {$tournoi['nomTournoi']}</h1>
                <form method="POST" action="modules/scores_save.php">
                    <input type="hidden" name="id_tournoi" value="{$tournoi.id_tournoi}">
                    <input type="SUBMIT" value="Enregistrer">
                    <br>
                    <!-- Début du caca cloné -->
                    {foreach from=$groupes item=groupe}
                        <table class="table_pool_tm">
                            <tr>
                                <th class="th_titre_pool_tm" colspan="{($groupe['nbr_manches']+2)}">
                                    {$groupe['nom_groupe']}<br />
                                    <a href="#" onclick="popup_heure({$groupe['id_match']})" >{$groupe['heure']}</a>
                                </th>
                            </tr>
                            <tr>
                                <th class="th_part_pool_tm">Participants</th>
                                    {for $i=1 to $groupe['nbr_manches']}
                                    <th class="th_manche_pool_tm">Manche {$i}<br></th>
                                    {/for}
                                <th class="th_score_pool_tm">Points</th>
                            </tr>

                            {foreach from=$groupe.totaux item=joueur}
                                <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">{$joueur['pseudo']}</th>
                                        {for $i=1 to $groupe.nbr_manches}
                                        <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_{$groupe['id_match']}_ma_{$i}_p_{$joueur['id_joueur']}" value="1" 
                                                   onclick="active_score2({$groupe.id_match},{$i},{$joueur['id_joueur']})"> 
                                            <input type="text" name="score_m_{$groupe.id_match}_ma_{$i}_p_{$joueur['id_joueur']}" 
                                                   id="score_m_{$groupe['id_match']}_ma_{$i}_p_{$joueur['id_joueur']}" 

                                                   {if isset($groupe.inscrits[$joueur['id_joueur']]['scores'][$i])}
                                                       value="{$groupe.inscrits[$joueur['id_joueur']]['scores'][$i]}"
                                                   {else}
                                                       value=""
                                                   {/if}
                                                   size="4" disabled="disabled">								
                                        </td>
                                    {/for}
                                    <td class="td_total_pool_tm">{$joueur['total']}</td>
                                </tr>
                            {/foreach}
                            {foreach from=$groupe.inscrits item=inscrit}
                                {if !$inscrit.ok}
                                    <tr>
                                        <td class="td_pseudo_pool_tm">{$inscrit.nom}</td>
                                        {for $i=1 to $groupe.nbr_manches}
                                            <td class="td_score_pool_tm">
                                                <input type="checkbox" name="cb_m_{$groupe['id_match']}_ma_{$i}_p_{$inscrit['id']}" 
                                                       value="1" onclick="active_score2({$groupe['id_match']},{$i},{$inscrit['id']})"> 
                                                <input type="text" name="score_m_{$groupe['id_match']}_ma_{$i}_p_{$inscrit['id']}" 
                                                       id="score_m_{$groupe['id_match']}_ma_{$i}_p_{$inscrit['id']}" value="" size="4" disabled="disabled">
                                            </td>
                                        {/for}
                                        <td class="td_total_pool_tm"></td>
                                    </tr>
                                {/if}
                            {/foreach}
                        </table>
                        <br><br>
                    {/foreach}
                    <!-- Fin du caca cloné -->
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
            <form method="POST" action="{#domain#}/admin/modules/modifier_heure.php">
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