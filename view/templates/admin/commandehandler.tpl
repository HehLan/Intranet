{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/commandes.css" >
    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }	
        <div id="container" class="container-fluid">
            <div id="contenu" class="row">
                <div class="col-lg-offset-2 col-lg-8">
                    <h2>Gestionnaire de Commandes</h2>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#commandesPane" aria-controls="commandesPane" role="tab" data-toggle="tab">
                                Commandes
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a href="#commandesArticlesPane" aria-controls="commandesArticlesPane" role="tab" data-toggle="tab">
                                Articles
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a href="#commandesGroupPane" aria-controls="commandesGroupPane" role="tab" data-toggle="tab">
                                Groupes
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="commandesPane">
                            Les commandes joueurs
                        </div>
                        <div role="tabpanel" class="tab-pane" id="commandesArticlesPane">
                            La liste des articles et les suppléments à commander
                            (=> supplément est un groupe tout comme taille, non?)
                        </div>
                        <div role="tabpanel" class="tab-pane" id="commandesGroupPane">
                            Les groupes d'articles et leur prix
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {include file="admin/footer.tpl"}
        <script type="text/javascript" src="{#adminAssets#}/js/commandHandler.js"></script> 
    </body>
</html>