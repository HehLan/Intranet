{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/tournoisRounds.css" />
    </head>
    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}

        <!-- Header and Rules -->
        {if isset($tournoi.header)}
            <div id="headerTournoi">
                <img id="headerTournoiImg" src="{#domain#}/src/{$tournoi.header}" alt="{$tournoi.nomTournoi}" />
            </div>
        {/if}
        {if isset($tournoi.reglement)}
            <div id="reglementTournoi">
                Pour consulter le règlement de ce tournoi, <a href="{#domain#}/src/{$tournoi.reglement}"> cliquez ici </a>
            </div>
        {/if}

        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div class="col-lg-offset-1 col-lg-10">
                    
                    <h1>Groupes de qualifications de {$tournoi.nomTournoi}</h1>
                    
                    <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}">FINALES DES PGM'S (gold)</a></p>
                    {if $nbr_lb2>0}
                        <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=2">FINALES DES LOSERS (silver)</a></p>
                    {/if}
                    {if $nbr_lb3>0}
                        <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=3">FINALES DES NOOBS (bronze)</a></p>
                    {/if}
 
   
                    <div id="bloc_tab">
                        <ul class="nav nav-tabs" role="tablist">
                            {foreach name=playerLoop from=$groupes item=groupe}
                                {if $smarty.foreach.playerLoop.first}
                                    <li role="presentation" id="nav-tab-{$groupe['id_groupe']}" class="active"><a href="#tab-{$groupe['id_groupe']}" aria-controls="tab-{$groupe['id_groupe']}" role="tab" data-toggle="tab">{$groupe['nom_groupe']}</a></li>
                                {else}  
                                    <li role="presentation" id="nav-tab-{$groupe['id_groupe']}"><a href="#tab-{$groupe['id_groupe']}" aria-controls="tab-{$groupe['id_groupe']}" role="tab" data-toggle="tab">{$groupe['nom_groupe']}</a></li>
                                {/if}
                            {/foreach}
                        </ul>
                    </div> 
                    
                    
                    <div class="tab-content">
                        {foreach name=playerLoop from=$groupes item=groupe}
                            {if $smarty.foreach.playerLoop.first}
                                <div role="tabpanel" class="tab-pane active" id="tab-{$groupe['id_groupe']}">     
                            {else}                            
                                <div role="tabpanel" class="tab-pane" id="tab-{$groupe['id_groupe']}">
                            {/if} 
                            <div class="row">
                                <h2>Classements et manches</h2>
                                <table class="table_round">
                                    <tr>
                                        <th class="title_round" colspan="{$tournoi.nombreManche+2}">
                                            {$groupe.nom_groupe} ( {$groupe.jour} {$groupe.heure} )
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="th_manche_round" >
                                            Participants
                                        </th>
                                        {for $idManche=1 to $tournoi.nombreManche}
                                            <th class="th_manche_round">Manche {$idManche}</th>
                                            {/for}
                                        <th class="th_points_round">Points</th>
                                    </tr>
                                    {foreach from=$groupe.joueurs item=joueur}
                                        <tr>
                                            <td class="td_pseudo_round">{$joueur.pseudo}</td>
                                            {for $idManche=1 to $tournoi.nombreManche}
                                                <td class="td_score_round">{$joueur.scores[$idManche]}</td>
                                            {/for}
                                            <td class="td_total_round">{$joueur.total}</td>
                                        </tr>
                                    {/foreach}
                                </table>                                
                            </div>
                        </div>
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
        {include file="default/footer.tpl"}
    </body>
</html>