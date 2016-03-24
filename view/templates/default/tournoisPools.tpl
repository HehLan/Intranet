{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="default/meta.tpl"}  
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/tournoisPools.css" />
        <link type="text/css" rel="stylesheet" href="{#domain#}/lib/jQuery/jquery.group.min.css" />
    </head>
    <body>
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
                    
                    <h1>
                        {if $tournoi.id_tournoi != 2}
                            Groupes de qualifications de {$tournoi.nomTournoi}
                        {else}
                            Championnat de {$tournoi.nomTournoi}
                        {/if}                        
                    </h1>
                    
                    {if $tournoi.id_tournoi != 2}
                        <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}">FINALES DES PGM'S (gold)</a></p>
                        {if $nbr_lb2>0}
                            <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=2">FINALES DES LOSERS (silver)</a></p>
                        {/if}
                        {if $nbr_lb3>0}
                            <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=3">FINALES DES NOOBS (bronze)</a></p>
                        {/if}
                    {/if}
                    
                    
                    
                    
                    {if $tournoi.id_tournoi != 2}                    
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
                                            <div id="components" class="col-lg-4">
                                                <h4>Classement et résultats</h4>
                                                <div id="bracket-{$groupe['id_groupe']}"></div>                                            
                                            </div>
                                            <div class="col-lg-8">
                                                <h4>Informations pratiques</h4>  
                                                <ul> 
                                                    {$i = 0}
                                                    {section name=sec1 loop=$groupe.teams}                                                        
                                                        {section name=sec2 loop=$groupe.teams}
                                                            {if $groupe.teams[sec1].id > $groupe.teams[sec2].id}
                                                                {$i = $i + 1}
                                                                <li> Round {$i} : {$groupe.resultTeams[sec1][sec2].valeur}</li>                                                                
                                                            {/if}                                                            
                                                        {/section}                                                 
                                                    {/section}
                                                </ul>
                                                <h4>Matches</h4>
                                                <table class="col-lg-12 table_pool">
                                                    <tr>
                                                        <th class="th_title_pool"></th>
                                                        {section name=sec1 loop=$groupe.teams}
                                                            <th class="th_team2_pool">{$groupe.teams[sec1].nom}</th>
                                                        {/section}
                                                    </tr>
                                                    {section name=sec1 loop=$groupe.teams}
                                                        <tr class="tr_pool">
                                                            <th class="th_team_pool">{$groupe.teams[sec1].nom}</th>
                                                            {section name=sec2 loop=$groupe.teams}
                                                                {if $groupe.teams[sec1].id == $groupe.teams[sec2].id}
                                                                    <td class="td_x_pool">X</td>
                                                                {else}
                                                                    <td class="td_{$groupe.resultTeams[sec1][sec2].couleur}pool">
                                                                        {$groupe.resultTeams[sec1][sec2].valeur}

                                                                        <!-- manage link to access the pick -->
                                                                        {if $groupe.resultTeams[sec1][sec2].isPickActive && 
                                                                            ($groupe.teams[sec1].nom == $peekData.teamName 
                                                                            || $groupe.teams[sec2].nom == $peekData.teamName)}
                                                                            <div>
                                                                                <a target="_blank" href="pick.php?id={$peekData.userId}&idMatch={$groupe.resultTeams[sec1][sec2].id_match}">Pick !</a>
                                                                            </div>
                                                                        {/if}
                                                                    </td>
                                                                {/if}
                                                            {/section}
                                                        </tr>
                                                    {/section}
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                            {/foreach}
                        </div>
                    {else}
                        <div class="row">
                            <div id="components" class="col-lg-4">
                                <h4>Classement et matchs</h4>
                                <div id="bracket"></div>                                            
                            </div>
                            <div class="col-lg-4">
                                <h4>Informations pratiques</h4>  
                                <ul>
                                    <li>Round 1 : vendredi hh:mm</li>
                                    <li>Round 2 : vendredi hh:mm</li>
                                    <li>Round 3 : samedi hh:mm</li>
                                </ul>
                            </div>
                        </div>
                    {/if}
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>

        {include file="default/footer.tpl"}

          
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.group.min.js"></script>
     
        
        {foreach from=$groupes item=groupe}
            {include file="default/assets/js/tournoisPools.js.tpl"
                tournoi=$tournoi
                groupe=$groupe
            }
        {/foreach}
        
    </body>
</html>