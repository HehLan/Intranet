{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        <!-- includes all libraries -->
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/pick.css" />
        <!-- 
        les variables palyerId, opponentId, etc ne sont pas initialises dans fichier js appart,
        car le fichier n'as pas de ref à Smarty. Test, si tu y arrive à les faire passer, 
        alors tu peux inclure le js dans assets/js/pick.js.
        Pour l'instant je travaille comme ça...
        -->
        <!--<script type="text/javascript" src="{#assets#}/js/pick.js"></script>-->
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
                    <div>{$opponentNickname}</div>
                </div>
            </div>
        </div>

        {include file="default/footer.tpl"}

        <script>
            // box gris qui apparait devant les tuilles
            var grayBox;
            var grayBoxText;

            // les donn�es relatives � l'adversaire et le joueur
            var playerId;
            var playerNickname;
            var opponentId;
            var opponentNickname;

            $(document).ready(function () {
                initPlayers();
                initGrayBox();
                showGrayBox();
            });

            function initPlayers() {
                playerId = "{$playerId}";
                playerNickname = "{$playerNickname}";
                opponentId = "{$opponentId}";
                opponentNickname = "{$opponentNickname}";
                //alert("pl: " + playerNickname + ", id: " + playerId + "\nopp:" + opponentNickname + ", id:" + opponentId);
            }

            // le div gris qui va cacher les tuilles pendant que Player1 attends la rep de Player2
            function initGrayBox() {
                grayBox = $('<div></div>');
                grayBoxText = $('<span id="grayBoxText"></span>');

                $('#middleDiv').prepend(grayBox);
                grayBox.append('<div id="loadingCircle"><div class="circle"></div><div class="circle1"></div></div>');
                grayBox.append(grayBoxText);

                grayBox.addClass("darkCover");
                grayBoxText.text('En attente de  ' + opponentNickname);
            }

            function showGrayBox() {
                grayBox.show();
            }

            function hideGrayBox() {
                grayBox.hide();
            }

            // suite � l'appuie sur l'image
            function kickMap(el) {
                var container = $(el);   // div containing img&text
                griserImage(container);
            }

            function griserImage(container) {
                container.attr('data-value', 0);    // change div's value, to avoid it change css on mouseHower

                // faire disparaitre l'effet de survol, car apr�s avoir chang� 'data-value' l'effet "mouseLeave" 
                // n'a plus d'effet. Du coup on le fait ici � la main
                container.children('div').css('background-color', 'rgba(0,0,0,0)');

                // griser le champ de texte
                container.css('background-color', 'rgba(0,0,0,0.8)');

                // griser l'image
                container.children('img').css({
                    '-webkit-filter': 'grayscale(1)',
                    'filter': 'grayscale(100%)'
                });

                // cacher les tuilles
                setTimeout(function () {
                    showGrayBox();
                }, 400);
            }

            // highlighting text 
            function highlightUp(el) {
                var container = $(el);              // div containing img&text
                var val = $(el).attr('data-value'); // get its custom value
                if (val == 1)
                    container.children('div').css('background-color', 'rgba(214,251,251,0.3)');
            }
            function highlightDown(el) {
                var container = $(el);
                var val = $(el).attr('data-value');
                if (val == 1)
                    container.children('div').css('background-color', 'rgba(214,251,251,0)');
            }
        </script>
    </body>
</html>
