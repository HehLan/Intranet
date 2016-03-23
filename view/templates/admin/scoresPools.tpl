{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/scores.css" />
        <link type="text/css" rel="stylesheet" href="{#domain#}/lib/jQuery/jquery.group.min.css" />
    </head>
    <body role="document">
	{include file="admin/header.tpl" con=$con }
	{include file="admin/nav.tpl"  con=$con }	
	
        <div id="container" class="container-fluid">
            <div id="contenu" class="row">
                
                <h1>Qualifications de {$tournoi['nomTournoi']}</h1> 
                

                {if $tournoi.id_tournoi != 2}                    
                    <div id="bloc_tab">
                        <ul class="nav nav-tabs" role="tablist">
                            {foreach name=groupLoop from=$groupes item=groupe}
                                {if $smarty.foreach.groupLoop.first}
                                    <!-- DO NOT set the tab active because we need to click on the tab to load its content otherwise others tabs will be empty -->
                                    {* <li role="presentation" id="nav-tab-{$groupe['id_groupe']}" class="active"><a href="#tab-{$groupe['id_groupe']}" aria-controls="tab-{$groupe['id_groupe']}" role="tab" data-toggle="tab">{$groupe['nom_groupe']}</a></li> *}
                                    <li role="presentation" id="nav-tab-{$groupe['id_groupe']}"><a href="#tab-{$groupe['id_groupe']}" aria-controls="tab-{$groupe['id_groupe']}" role="tab" data-toggle="tab">{$groupe['nom_groupe']}</a></li>
                                {else}  
                                    <li role="presentation" id="nav-tab-{$groupe['id_groupe']}"><a href="#tab-{$groupe['id_groupe']}" aria-controls="tab-{$groupe['id_groupe']}" role="tab" data-toggle="tab">{$groupe['nom_groupe']}</a></li>
                                {/if}
                            {/foreach}
                        </ul>
                    </div>                          
                            
                    <div class="tab-content">
                        {foreach name=groupLoop from=$groupes item=groupe}
                            {if $smarty.foreach.groupLoop.first}
                                <!-- DO NOT set the tab active because we need to click on the tab to load its content otherwise others tabs will be empty -->
                                {* <div role="tabpanel" class="tab-pane active" id="tab-{$groupe['id_groupe']}"> *}
                                <div role="tabpanel" class="tab-pane" id="tab-{$groupe['id_groupe']}">
                            {else}                            
                                <div role="tabpanel" class="tab-pane" id="tab-{$groupe['id_groupe']}">
                            {/if}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h2>Liste des équipes sélectionnables</h2>
                                            <ul>
                                            {foreach from=$groupe.teams item=team}
                                                <li>{$team.nom}</li>
                                            {/foreach}
                                            </ul>
                                            <div id="components">
                                                <h2>Editeur</h2>
                                                <div id="editor-{$groupe['id_groupe']}"></div>
                                                <h2>Aperçu</h2>
                                                <div id="view-{$groupe['id_groupe']}"></div>
                                            </div>
                                        </div>
                                        <div id="data-{$groupe['id_groupe']}" class="col-lg-6">
                                            <h2>Code JSON</h2>
                                            <p>Code JSON pour le stockage dans la base de données.</p>
                                            <pre id="state-{$groupe['id_groupe']}">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                                        </div>
                                    </div>
                                </div>
                        {/foreach}
                    </div>
                {else}
                    <div class="row">
                        <div id="components" class="col-lg-6">
                            <h2>Editeur</h2>
                            <div id="editor"></div>
                            <h2>Vue de l'utilisateur</h2>
                            <div id="view"></div>
                        </div>  
                        <div id="data" class="col-lg-6">
                            <h2>Code JSON</h2>
                            <p>Code JSON pour le stockage dans la base de données.</p>
                            <pre id="state">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                        </div>                                      
                    </div> 
                {/if}
            </div>
        </div>
        
	{include file="admin/footer.tpl"}

        <script type="text/javascript" src="{#domain#}/lib/baconjs/Bacon-1ab32ffb.min.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/lodash/lodash-2.2.1.min.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/live/live.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/handlebars/handlebars.1.0.0.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.group.min.js"></script>

        
            {include file="admin/assets/js/scoresPools.js.tpl"
                tournoi=$tournoi
                groupes=$groupes
            }
        

    </body>
</html>