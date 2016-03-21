{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/finalesPools.css" >
        <script type="text/javascript" src="{#adminAssets#}/js/finales.js"></script>
        <!--<script type="text/javascript" src="{#domain#}/lib/jQuery/bracket/jquery.gracket.js"></script>  -->

        <!-- jquery-bracket -->
        <link rel="stylesheet" type="text/css" href="{#domain#}/lib/jQuery/jquery.bracket.min.css" />


    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }

        <div id="container" class="container-fluid">
            <div id="contenu" class="row">
                
                <h1>Finales de {$tournoi['nomTournoi']} {$gsb[$looser]}</h1>
                
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#bracket" aria-controls="bracket" role="tab" data-toggle="tab">Bracket</a></li>
                    <li role="presentation"><a href="#output" aria-controls="output" role="tab" data-toggle="tab">Output</a></li>
                </ul>                
                
                
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="bracket">
                        <div id="bracket-pools-admin" class="bracket"></div> 
                    </div>
                    <div role="tabpanel" class="tab-pane" id="output">
                        <textarea class="col-lg-12" id="saveOutput"></textarea>                        
                    </div>
                </div>
                
                
            </div>
        </div>
                
        
        {include file="admin/footer.tpl"}


        <!-- jquery-bracket -->
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.bracket.min.js"></script>

        {include file="admin/finalesPools.js.tpl"
            tournoi=$tournoi
        }

    </body>
</html>