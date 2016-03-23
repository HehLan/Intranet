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
            <div class="row">
                <h2>Commande</h2>
				<div id="commandList">
					{include file="default/commandeList.tpl"}
				</div>
            </div>
        </div>                
                
        {include file="default/footer.tpl"}
        
    </body>
</html>