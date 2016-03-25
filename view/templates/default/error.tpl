{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="default/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/error.css" />
    </head>
    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}
        <div id="container" class="container-fluid">
            <div id="contenu" class="row">
                
                <h1>ERREUR {$id}</h1>
                <p>Message : {$msg}</p>
                
            </div>			
        </div>
        
        {include file="default/footer.tpl"}

    </body>
</html>