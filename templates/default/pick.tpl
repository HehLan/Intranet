{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        <!-- includes all libraries -->
        {include file="{#templatePath#}meta.tpl"}
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/joueur.js"></script>
    </head>

    <body role="document">

        <!-- le logo -->
        {include file="header.tpl"}

        <!-- CUSTOM NAVBAR TEMPLATE -->
        <nav id="navigation" class="navbar navbar-inverse" role="navigation" >
            <div class="container-fluid">
                <div class="navbar-header" style="width:100%; height:50px;"/>
                <div class="collapse navbar-collapse"/>
            </div>			
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg1">
                    <span class="glyphicon glyphicon-user">Player 1</span> 
                </div>

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg10">
                    <div class="row">
                        {foreach from=$mapPaths key=i item=path}
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg3">
                                <div onclick="kickMap(this)" onmouseover="highlightUp(this)" onmouseout="highlightDown(this)" data-value="1"> 
                                    <img id="{$mapNames[$i]}" class="img-responsive" src="{$path}" alt="{$mapNames[$i]}" />
                                    <div style="margin-bottom:5px; margin-top:3px; color:#D1D1D1; text-align:center; border:2px solid #008080">
                                        {$mapNames[$i]}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                </div>

                <div class="col-xs-1 col-sm-1 col-md-1 col-lg1">
                    <span class="glyphicon glyphicon-user">Player 2</span> 
                </div>
            </div>
        </div>

        <script>
            
            
            
            
            function kickMap(el) {
                var container = $(el);              
                $(el).attr('data-value',-1);
                container.children('div').css('background-color', 'rgba(0,0,0,0)');
                container.css('background-color', 'rgba(0,0,0,0.8)');
            }

            // highlighting text 
            // --> visibility/styling while user is choosing
            function highlightUp(el){
                var container = $(el);              // get div containing img&text
                var val = $(el).attr('data-value'); // get its custom value
                if(val == 1)
                    container.children('div').css('background-color', 'rgba(214,251,251,0.3)');
            }
            function highlightDown(el){
                var container = $(el);
                var val = $(el).attr('data-value');
                if(val == 1)
                    container.children('div').css('background-color', 'rgba(214,251,251,0)');
            }
        </script>

    </body>
</html>