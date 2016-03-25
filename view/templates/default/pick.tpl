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
                    <div id="iconPlayer1" class="glyphicon glyphicon-user" style="font-size:3em;" ></div> 
                    <div>{$playerNickname}</div>
                    <!--
                    <button onclick="hideBox();">hide grayBox</button>
                    <button onclick="showResultsOfPick();">test</button>
                    -->
                </div>

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg10" id="middleDiv">
                    <div class="row" id="mapsContainer">
                        {foreach from=$maps item=map}
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg3">
                                <div id="{$map['id']}" onclick="kickMap(this);" onmouseover="highlightUp(this);" onmouseout="highlightDown(this);" data-checked="0"> 
                                    <img class="img-responsive" src="{$map['imgPath']}" alt="{$map['name']}" />
                                    <div class="thumbnailText">
                                        {$map['name']}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                    <div class="row" id="heroesContainer" style="display: none;">
                        {foreach from=$heroes item=hero}
                            <div class="col-xs-3 col-sm-2 col-md-2 col-lg2">
                                <div id="{$hero['id']}h" onclick="kickHero(this);" onmouseover="highlightUp(this);" onmouseout="highlightDown(this);" data-checked="0"> 
                                    <img class="img-responsive" src="{$hero['imgPath']}" alt="{$hero['name']}"/>
                                    <div class="thumbnailText">
                                        {$hero['name']}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>
                    <div class="row" id="pickResults" style="display: none;">
                    </div>

                </div>

                <div id="iconPlayer2" class="col-xs-1 col-sm-1 col-md-1 col-lg1" style="text-align: center">
                    <div class="glyphicon glyphicon-user" style="font-size:3em"></div> 
                    <div>{$opponentNickname}</div>
                </div>
            </div>
        </div>

        {include file="default/footer.tpl"}

        {include file="default/assets/js/pick.js.tpl" playerId=$playerId playerNickname=$playerNickname 
             pickStateMaps=$pickStateMaps pickStateHeroes=$pickStateHeroes
            idPlayerWhoMakeChoise=$idPlayerWhoMakeChoise matchId=$matchId phase=$phase }

    </body>
</html>
