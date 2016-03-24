{* Smarty *}
<!DOCTYPE html>
<html>
    <head>    
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/groupes.css" >
    </head>
    <body>
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }         

	<div id="container" class="container">
            <div id="contenu">
                <h1>Groupes {$tournoi['nomTournoi']}</h1>
                    
                <form method="POST" action="modules/inscrire_groupes.php">
                    <table>
                        <input type="hidden" name="id_tournoi" value="{$tournoi['id_tournoi']}" />
                        <tr>
                            <th>Participants</th>
                            {foreach from=$groupes item=groupe}
                                <th>{$groupe['nom_groupe']}</th>
                            {/foreach}
                        </tr>
                        {foreach from=$participants item=participant}
                            <tr>
                                <td>{$participant['nom']}</td>
                                {foreach from=$groupes item=groupe}
                                    <td>
                                        <input type="radio" name="parti_{$participant['id']}" value="{$groupe['id_groupe']}" >
                                    </td>
                                {/foreach}
                            </tr>
                        {/foreach}
                        <tr>
                            <td colspan="{$nbr_groupes+1}">
                                <input type="submit" value="Enregistrer" />
                            </td>
                        </tr>
                    </table>	
                </form>
   
            </div>
	</div>

        {include file="admin/footer.tpl"  con=$con } 
    </body>
</html>