{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"} 
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/admin_index.js"></script>		
    </head>

    <body role="document">	
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }


        <div id="container" class="container-fluid">

            <div id="contenu">
                <h2>Overview</h2>
                <p>Ceci est la page d'acceuil de la partie admin.</p>
                <p>Vous pourrez voir une vue d'ensemble de la gestion de la HEHLan.</p>
                <h3>Statistiques</h3>
                <p>Dessiner de beaux graphes :)</p>
            </div>
        </div>

        <!-- gap to have the footer in the bottom of the window -->
        <div style="height: 450px;">

        </div>
        {include file="admin/footer.tpl"}
        {if $chat}
            <script type="text/javascript">
                $("#bloc_chat_message").keyup(function (event)
                {
                    if (event.keyCode == 13)
                    {
                        $("#bloc_chat_bouton").click();
                    }
                });

                afficher(0);
                users();
            </script>
        {/if}
    </body>
</html>