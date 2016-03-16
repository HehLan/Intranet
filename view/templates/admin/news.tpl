{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/news.css" >
    </head>

    <body role="document">
 	{include file="admin/header.tpl"}
        {include file="admin/nav.tpl"} 
	
	<div id="container" class="container-fluid">
            <div id="contenu" class="row">
         
                <div id="bloc_add_news" class="col-lg-4 col-xs-12">		
                    <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                        <legend>Nouvelle news</legend>
                        <fieldset>
                            <input type="hidden" name="id_news" value="0">
                            <div class="form-group">
                                <label for="title">Titre : </label>
                                <input id="title" class="form-control" type="text" name="title" >  
                            </div>
                            <div class="form-group">
                                <label for="textarea">Texte : </label>
                                <textarea id="textarea" type class="form-control" name="textarea"></textarea>  
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button> 
                        </fieldset>
                    </form>
                </div>
                
                
                <div id="bloc_update_news" class="col-lg-4 col-xs-12">
                    {foreach from=$news item=new}
                        {if $new['invisible']==0} 
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="{$new['id_news']}">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="{$new['titre']}">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">{$new['texte']}</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news={$new['id_news']}">Hide</a> 
                                    <small><p class="pull-right">Last update : {$new['quand']}</p></small>                                    
                                </fieldset>
                            </form>
                        {/if}
                    {/foreach}  
                </div>
                
                
                <div id="bloc_deleted_news" class="col-lg-4 col-xs-12">
                    {foreach from=$news item=new}
                        {if $new['invisible']==1} 
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Hidden news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="{$new['id_news']}">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="{$new['titre']}">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">{$new['texte']}</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=0&id_news={$new['id_news']}">Unhide</a> 
                                    <a class="btn btn-primary" href="modules/news_delete.php?id_news={$new['id_news']}">Delete</a> 
                                    <small><p class="pull-right">Last update : {$new['quand']}</p></small>
                                </fieldset>
                            </form>
                        {/if}
                    {/foreach}  
                </div>  
            </div>
	</div>
	{include file="admin/footer.tpl"  con=$con } 
    </body>
</html>