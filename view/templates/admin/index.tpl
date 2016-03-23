{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/index.css" >		
    </head>
    <body role="document">	
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }

        <div id="container" class="container">

            <div id="contenu" class="row">
                <h2>Overview</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{$url_games_players_piegraph}" />
                    </div>
                    <div class="col-lg-4">
                        <img src="{$url_games_teams_piegraph}" />
                    </div>
                    <div class="col-lg-4">
                        <img src="{$url_games_bargraph}" />
                    </div>
                </div>
            </div>
            
        </div>

        <!-- gap to have the footer in the bottom of the window -->
        <div style="height: 180px;"></div>
        
        {include file="admin/footer.tpl"}

    </body>
</html>