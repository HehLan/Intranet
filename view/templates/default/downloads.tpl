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
                <h2>Downloads</h2>	
                <ul class ="fa-ul">
                    {foreach from=$downloads item=download}
                        <li>
                            <a href="{#src#}/{$download.src}"><i class="fa-li fa fa-download"></i>{$download.title}</a>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>                
                
        {include file="default/footer.tpl"}
        
    </body>
</html>