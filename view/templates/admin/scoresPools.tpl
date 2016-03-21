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
            </div>
        </div>

        
	{include file="admin/footer.tpl"}

        <script type="text/javascript" src="{#domain#}/lib/baconjs/Bacon-1ab32ffb.min.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/lodash/lodash-2.2.1.min.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/live/live.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/handlebars/handlebars.1.0.0.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.group.min.js"></script>

        <script>
            $('#editor').group({
                save: function(state) {
                  // Write your storage code here, now just display JSON above
                  $('pre').text(JSON.stringify(state, undefined, 2));
                  // Reconstruct read-only version by initializing it with received state
                  $('#view').empty().group({
                    init: state
                  });
                }
            });
        </script>

    </body>
</html>