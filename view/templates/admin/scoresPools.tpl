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
                            <li role="presentation" class="active"><a href="#tab-group-1" aria-controls="tab-group-1" role="tab" data-toggle="tab">Groupe 1</a></li>
                            <li role="presentation"><a href="#tab-group-2" aria-controls="tab-group-2" role="tab" data-toggle="tab">Groupe 2</a></li>
                        </ul>
                    </div>                
                    <div class="tab-content">
                        <!-- tab-group-1 -->
                        <div role="tabpanel" class="tab-pane active" id="tab-group-1">
                            <div class="row">
                                <div id="components" class="col-lg-6">
                                    <h2>Editeur</h2>
                                    <div id="editor1"></div>
                                    <h2>Vue de l'utilisateur</h2>
                                    <div id="view1"></div>
                                </div>  
                                <div id="data1" class="col-lg-6">
                                    <h2>Code JSON</h2>
                                    <p>Code JSON pour le stockage dans la base de données.</p>
                                    <pre id="state1">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                                </div>                                      
                            </div> 
                        </div>
                        <!-- tab-group-2 -->
                        <div role="tabpanel" class="tab-pane" id="tab-group-2">
                            <div class="row">
                                <div id="components" class="col-lg-6">
                                    <h2>Editeur</h2>
                                    <div id="editor2"></div>
                                    <h2>Vue de l'utilisateur</h2>
                                    <div id="view2"></div>
                                </div>  
                                <div id="data2" class="col-lg-6">
                                    <h2>Code JSON</h2>
                                    <p>Code JSON pour le stockage dans la base de données.</p>
                                    <pre id="state2">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                                </div>                                      
                            </div> 
                        </div>
                    </div>
                {else}
                    <div class="row">
                        <div id="components" class="col-lg-6">
                            <h2>Editeur</h2>
                            <div id="editor1"></div>
                            <h2>Vue de l'utilisateur</h2>
                            <div id="view1"></div>
                        </div>  
                        <div id="data1" class="col-lg-6">
                            <h2>Code JSON</h2>
                            <p>Code JSON pour le stockage dans la base de données.</p>
                            <pre id="state1">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
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

        {include file="admin/scoresPools.js.tpl"
            tournoi=$tournoi
        }

    </body>
</html>