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
                                            <div id="components">
                                                <div id="bracket-{$groupe['id_groupe']}"></div>
                                                <h4>Dates des matchs</h4>
                                                <ul>
                                                    <li>Round 1 : vendredi hh:mm</li>
                                                    <li>Round 2 : vendredi hh:mm</li>
                                                    <li>Round 3 : samedi hh:mm</li>
                                                </ul>
                                            </div> 
                                        </div>
                                    </div>
                            {/foreach}
                        </div>
                    {else}
                        <div class="row">
                            <div id="components">
                                <h2>Editeur</h2>
                                <div id="editor1"></div>
                                <h2>Vue de l'utilisateur</h2>
                                <div id="view1"></div>
                            </div>                                       
                        </div> 
                    {/if}
                </div>
            </div>
        </div>

        {include file="default/footer.tpl"}

          
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.group.min.js"></script>
     
        
        {foreach from=$groupes item=groupe}
            {include file="default/assets/js/tournoisPools-2.js.tpl"
                tournoi=$tournoi
                groupe=$groupe
            }
        {/foreach}
        
    </body>
</html>