{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        <!-- includes all libraries -->
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/pick.css" />
        <script type="text/javascript" src="{#assets#}/js/pick.js"></script>
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

        <div class="container-fluid">
            <h2> </h2>
            <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg1" style="text-align: center">
                    <div id="iconPlayer1" class="glyphicon glyphicon-user" style="font-size:3em" ></div> 
                    <div>{$playerNickname}</div>
                    <br>
                    <br>
                    <button onclick="hideGrayBox();">hide grayBox</button>

                    <br>
                    <br>
                    <br>
                    <br>
                    <!-- circle div -->
                    <div>
                        <div class="circle"></div>
                        <div class="circle1"></div>
                    </div>
                </div>

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg10" id="middleDiv">
                    <div class="row">
                        {foreach from=$maps item=map}
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg3">
                                <div onclick="kickMap(this);" onmouseover="highlightUp(this);" onmouseout="highlightDown(this);" data-value="1"> 
                                    <img id="{$map['id']}" class="img-responsive" src="{$map['imgPath']}" alt="{$map['name']}" />
                                    <div class="thumbnailText">
                                        {$map['name']}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                </div>

                <div id="iconPlayer2" class="col-xs-1 col-sm-1 col-md-1 col-lg1" style="text-align: center">
                    <div class="glyphicon glyphicon-user" style="font-size:3em"></div> 
                    <div>Player 2</div>
                </div>
            </div>
        </div>

        {include file="default/footer.tpl"}
    </body>
</html>