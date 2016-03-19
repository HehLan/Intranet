{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="default/meta.tpl"} 
        <!--<link rel="stylesheet" type="text/css" href="{#assets#}/css/downloads.css" />-->
    </head>
    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}
        <div id="container" class="container-fluid">
            <div class="row">
                <h1>Downloads</h1>	
                
            </div>			
        </div>
                
                
        {include file="default/footer.tpl"}
        <!--<script type="text/javascript" src="{#assets#}/js/downloads.js"></script>-->
    </body>
</html>