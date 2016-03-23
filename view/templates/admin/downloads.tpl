{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/downloads.css" >
    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }	
	<div id="container" class="container-fluid">
            <div id="contenu" class="row">
                
                <div id="bloc_add_downloads" class="col-lg-4 col-xs-12">		
                    <form class="well col-lg-12" method="POST" action="modules/downloads_save.php">
                        <legend>Nouveau download</legend>
                        <fieldset>
                            <input type="hidden" name="id_downloads" value="0">
                            <div class="form-group">
                                <label for="title">Titre : </label>
                                <input id="title" class="form-control" type="text" name="title" >  
                            </div>
                            <div class="form-group">
                                <label for="textarea">Source : </label>
                                <textarea id="textarea" type class="form-control" name="textarea"></textarea>  
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button> 
                        </fieldset>
                    </form>
                </div>
                
                
                <div id="bloc_update_downloads" class="col-lg-4 col-xs-12">
                    {foreach from=$downloads item=download}
                        {if $download['invisible']==0} 
                            <form class="well col-lg-12" method="POST" action="modules/downloads_save.php">
                                <legend>Published downloads</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="{$download['id_downloads']}">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="{$download['title']}">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Source : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">{$download['src']}</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/downloads_hide.php?invisible=1&id_downloads={$download['id_downloads']}">Hide</a> 
                                    <small><p class="pull-right">Last update : {$download['published_date']}</p></small>                                    
                                </fieldset>
                            </form>
                        {/if}
                    {/foreach}  
                </div>
                
                
                <div id="bloc_deleted_downloads" class="col-lg-4 col-xs-12">
                    {foreach from=$downloads item=download}
                        {if $download['invisible']==1} 
                            <form class="well col-lg-12" method="POST" action="modules/downloads_save.php">
                                <legend>Hidden downloads</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="{$download['id_downloads']}">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="{$download['title']}">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Source : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">{$download['src']}</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/downloads_hide.php?invisible=0&id_downloads={$download['id_downloads']}">Unhide</a> 
                                    <a class="btn btn-primary" href="modules/downloads_delete.php?id_downloads={$download['id_downloads']}">Delete</a> 
                                    <small><p class="pull-right">Last update : {$download['published_date']}</p></small>
                                </fieldset>
                            </form>
                        {/if}
                    {/foreach}  
                </div>  
                
                
                
                
            </div>
        </div>	
    
	{include file="admin/footer.tpl"}

    </body>
</html>