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
        //console.log("pick state: \n");
        //console.log(pickState);
    }

    // **********************************************************************
    // *************************** Utils ************************************
    // **********************************************************************

    // fonction qui va griser les maps deja "picked"
    function checkMaps() {
        pickState.forEach(function (map) {
            if (map.checked == true) {
                griserMap($('#' + map.mapId));
            }
        });
    }

    // suite a l'appuie sur l'image
    function kickMap(el) {
        var container = $(el);   // div containing img&text
        if (container.attr('data-checked') == 1) // deja kicked
            return;
        if(checkedMapsCount() >= 9)
            return;

        griserMap(container);

        // cacher les tuilles avec un delai --> just UI Exp 4 users
        setTimeout(function () {
            showGrayBox();
        }, 350);

        mapId = container.attr('id');
        updateDatabase(mapId);

        if (checkedMapsCount() <= 7) {
            // notifier l'opponent qu'une map a été "kick" et c'est son tour
            var message = ["mapKicked", playerId, matchId];
            socket.send(message);
        } else {
            // notifier l'opponent que le "pick" des maps est terminé on a pick la 9ème map
            var message = ['mapsTerminated'];
            socket.send(message);
            loadChampions();
        }
    }

    function checkedMapsCount() {
        this.counter = 0;
        pickState.forEach(function (map) {
            if (map.checked == true) {
                this.counter++;
            }
        });
        console.log("\n final counter : " + this.counter);
        return this.counter;
    }

    function updateDatabase(mapId) {
        $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "updateDb",
                mapId: mapId,
                matchId: matchId,
                opponentId: opponentId
            },
            cache: false
        });
    }

    function updateLocalData() {
        $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "getData",
                matchId: matchId
            },
            success: function (data) {
                pickState = JSON.parse(data);
                checkMaps();
                hideGrayBox();
            },
            cache: false
        });
    }

    function phpToJavascript() {
        $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "fromPhpToJavascriptDataTransactionTest",
                matchId: matchId
            },
            success: function (data) {
                pickState = JSON.parse(data);
                console.log(pickState);
                checkMaps();
                hideGrayBox();
            },
            cache: false
        });
    }



    // *************************************************************
    // ******************** Sockets ********************************
    // *************************************************************

    function connectToSocketsServer() {
        var host = "ws://127.0.0.1:9000/websockets"; // SET THIS TO YOUR SERVER
        try {
            socket = new WebSocket(host);

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

                    case "mapKicked":
                        updateLocalData();
                        updateView();
                        // hide grayBox
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

    // *****************************************************************
    // ********************** visual / UI ******************************
    // *****************************************************************

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
    
    function loadChampions(){
        $("#grayBoxText").hide();
    }
                
</script>