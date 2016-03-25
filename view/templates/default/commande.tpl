{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="default/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/downloads.css" />
    </head>
    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}
        <div id="container" class="container-fluid">
            <div class="row" id="contenu">
                <h2>Commande</h2>
                <div id="commandList">
                    <div class="panel-group" id="commandesList">
							Aucune commande trouvée
					</div>
                </div>
            </div>
        </div>                

        {include file="default/footer.tpl"}

    </body>
</html>