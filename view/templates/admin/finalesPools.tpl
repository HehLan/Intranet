{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/finalesPools.css" >
        <!-- jquery-bracket -->
        <link rel="stylesheet" type="text/css" href="{#domain#}/lib/jQuery/jquery.bracket.min.css" />
    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }

        <div id="container" class="container-fluid">
            <div id="contenu" class="row">
                
                <h1>Finales de {$tournoi['nomTournoi']} {$gsb[$looser]}</h1>      
                
                <div id="bloc_tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-bracket-winner" aria-controls="tab-bracket-winner" role="tab" data-toggle="tab">Winner bracket</a></li>
                        <li role="presentation"><a href="#tab-bracket-looser" aria-controls="tab-bracket-looser" role="tab" data-toggle="tab">Looser bracket</a></li>
                    </ul>
                </div>                
                <div class="tab-content">
                    <!-- tab-bracket-winner -->
                    <div role="tabpanel" class="tab-pane active" id="tab-bracket-winner">
                        <div class="row">
                            <div id="components" class="col-lg-6">
                                <h2>Editeur</h2>
                                <div id="editor" class="bracket"></div>
                                <h2>Vue de l'utilisateur</h2>
                                <div id="view"></div>
                            </div>  
                            <div id="data" class="col-lg-6">
                                <h2>Code JSON</h2>
                                <p>Code JSON pour le stockage dans la base de données.</p>
                                <pre id="state">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                            </div>                                      
                        </div> 
                    </div>
                    <!-- tab-bracket-looser -->
                    <div role="tabpanel" class="tab-pane" id="tab-bracket-looser">
                        <div class="row">
                            <p>No looser bracket man !</p>                                     
                        </div> 
                    </div>
                </div>             
                
            </div>
        </div>
                       
        {include file="admin/footer.tpl"}

        <!-- jquery-bracket -->
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.bracket.min.js"></script>

        {include file="admin/assets/js/finalesPools.js.tpl"
            tournoi=$tournoi
        }

    </body>
</html>