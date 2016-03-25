{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/pick.css" />   
    </head>

    <body role="document">

        <!-- le logo -->
        {include file="default/header.tpl"}
        <!-- CUSTOM NAVBAR TEMPLATE -->
        <nav id="navigation" class="navbar navbar-inverse" role="navigation" >
            <div class="container-fluid">
                <div class="navbar-header" style="width:100%; height:50px;"/>
                <div class="collapse navbar-collapse"/>
            </div>		
        </nav>

        <div class="container-fluid" id="container">
            <h2> </h2>
            <div class="row" id="contenu">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg1" style="text-align: center">
                </div>

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg10" id="middleDiv">
                    <div class="row" id="pickResults" style="display: none;">
                    </div>
                </div>

                <div class="col-xs-1 col-sm-1 col-md-1 col-lg1" style="text-align: center">
                </div>
            </div>
        </div>

        {include file="default/footer.tpl"}

        {include file="default/assets/js/pickResult.js.tpl" matchId=$matchId }

    </body>
</html>
