{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"} 
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
    </head>

    <body role="document">
 	{include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con } 
	
	<div id="container" class="container-fluid">
            <div id="contenu">
                <h1>Ajouter une news</h1>		
                <form method="POST" action="news_save.php">
                    <input type="hidden" name="id_news" value="0">
                    <table>
                        <tr>
                            <td>
                                <strong>Titre</strong>
                            </td>
                            <td>
                                <input type="text" name="titre" size="50" value="">
                                <input type="submit" value="modifier">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Texte</strong>
                            </td>
                            <td>
                                <textarea name="texte" cols="60" rows="8"></textarea>
                            </td>
                        </tr>	
                        <tr>
                            <td colspan=2>
                                <input type=submit value=enregistrer>
                            </td>
                        </tr>				
                    </table>
                </form>
                <br>
                <br>	
                <h1>Modifier les news</h1>   
		{foreach from=$news item=new}
                    {if $new['invisible']==1}
                        <h1>News effacées</h1>
                    {/if}
                    <form method="POST" action="modules/news_save.php">
                    <input type="hidden" name="id_news" value="{$new['id_news']}">
			<table>
                            <tr>
                                <td>
                                    <strong>Titre</strong>
                                </td>
                                <td>
                                    <input type="text" name="titre" size="50" value="{$new['titre']}">
                                    <input type="submit" value="modifier">
                                    {if $new['invisible']==0}
                                        <a href="modules/news_effacer.php?invisible=1&id_news={$new['id_news']}">Masquer</a>
                                    {else}
                                        <a href="modules/news_effacer.php?invisible=0&id_news={$new['id_news']}">Dé-Masquer</a>
                                    {/if}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Texte</strong>
                                </td>
                                <td>
                                    <textarea name="texte" cols="60" rows="8">{$new['texte']}</textarea>
                                </td>
                            </tr>				
                            <tr>
                                <td colspan="2">Dernière mise-à-jour : {$new['quand']}</td>
                            </tr>
			</table>
                    </form>
                    <br>
                    <br>                 
                {/foreach}         
            </div>
	</div>
	{include file="admin/footer.tpl"  con=$con } 
    </body>
</html>