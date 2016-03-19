{* Smarty *}
<script>
    // Socket
    var socket;

    // box gris qui apparait devant les tuilles
    var grayBox;
    var grayBoxText;

    // les donnees relatives a l'adversaire et le joueur
    var playerId;
    var playerNickname;
    var opponentId;
    var opponentNickname;
    var idPlayerWhoMakeChoise;
    var pickState;
    var matchId;

    $(document).ready(function () {
        matchId = "{$matchId}";
        initPlayers();
        initGrayBox();
        initPickState();
        checkMaps();
        connectToSocketsServer();

        // si pas a moi de choisir --> cacher les maps
        if (idPlayerWhoMakeChoise !== playerId) {
            showGrayBox();
        }
    });

    function connectToSocketsServer() {
        var host = "ws://127.0.0.1:9000/websockets"; // SET THIS TO YOUR SERVER
        try {
            socket = new WebSocket(host);

            socket.onopen = function () { /* TODO */
            };
            socket.onclose = function () { /* TODO */
            };

            // quand on recoit une notif du serveur 
            socket.onmessage = function (msg) {
                console.log("Socket - message received: " + msg.data);

                switch (msg.data) {
                    case "identificate" :
                        var identifiants = ["identificate", playerId, matchId];
                        socket.send(identifiants);
                        break;

                    case "":
                        break;

                    case "":
                        break;

                    case "":
                        break;

                    default:
                        break;
                }
            };
        } catch (ex) {
            console.log(ex);
        }
    }

    function closeConnectionWebSocket() {
        if (socket != null) {
            socket.close();
            socket = null;
        }
    }

    function initPlayers() {
        playerId = "{$playerId}";
        playerNickname = "{$playerNickname}";
        opponentId = "{$opponentId}";
        opponentNickname = "{$opponentNickname}";
        idPlayerWhoMakeChoise = "{$idPlayerWhoMakeChoise}";
        //alert("pl: " + playerNickname + ", id: " + playerId + "\nopp:" + opponentNickname + ", id:" + opponentId);
    }

    function initPickState() {
        pickState = {$pickState|json_encode};
    }

    // fonction qui va griser les maps deja "picked" --> si joueur doit reco pr quelconque raison
    function checkMaps() {
        pickState.forEach(function (map) {
            if (map.checked == true) {
                griserMap($('#' + map.mapId));
            }
        });
    }

    // le div gris qui va cacher les tuilles pendant que Player1 attends la rep de l'opponent
    function initGrayBox() {
        grayBox = $('<div></div>');
        grayBoxText = $('<span id="grayBoxText"></span>');

        $('#middleDiv').prepend(grayBox);
        grayBox.append('<div id="loadingCircle"><div class="circle"></div><div class="circle1"></div></div>');
        grayBox.append(grayBoxText);

        grayBox.addClass('darkCover');
        grayBoxText.text('En attente de  ' + opponentNickname);

        grayBox.hide();
    }

    function showGrayBox() {
        grayBox.show();
    }

    function hideGrayBox() {
        grayBox.hide();
    }

    // suite a l'appuie sur l'image
    function kickMap(el) {
        var container = $(el);   // div containing img&text
        if (container.attr('data-checked') == 1) // deja kicked
            return;

        griserMap(container);

        // cacher les tuilles avec un delai --> just UI Exp 4 users
        setTimeout(function () {
            showGrayBox();
        }, 350);
    }

    function griserMap(container) {
        isGray = container.attr('data-checked');
        if (isGray == 1)
            return;

        container.attr('data-checked', 1);    // change div's value, to avoid it change css on mouseHower

        // faire disparaitre l'effet de survol, car apres avoir change 'data-value' l'effet "mouseLeave" 
        // n'a plus d'effet. Du coup on le fait ici a la main
        container.children('div').css('background-color', 'rgba(0,0,0,0)');

        // griser le champ de texte
        container.css('background-color', 'rgba(0,0,0,0.8)');

        // griser l'image
        container.children('img').css({
            '-webkit-filter': 'grayscale(1)', // chrome
            'filter': 'grayscale(100%)'       // ffox
        });
    }

    // highlighting text 
    function highlightUp(el) {
        var container = $(el);                    // div containing img&text
        var checked = $(el).attr('data-checked'); // get its custom checked value
        if (checked == 0)
            container.children('div').css('background-color', 'rgba(214,251,251,0.3)');
    }
    function highlightDown(el) {
        var container = $(el);
        var checked = $(el).attr('data-checked');
        if (checked == 0)
            container.children('div').css('background-color', 'rgba(214,251,251,0)');
    }


</script>