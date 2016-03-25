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
    var pickStateMaps;
    var pickStateHeroes;
    var matchId;

    $(document).ready(function () {
        matchId = "{$matchId}"; // initMatchID

        initPlayers();
        initGrayBox();
        initPickStateMaps();
        initPickStateHeroes();
        initPhase();
        connectToSocketsServer();

        // si pas a moi de choisir --> cacher les maps/heroes
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
    }

    function initPickStateMaps() {
        pickStateMaps = {$pickStateMaps|json_encode};
    }

    function initPickStateHeroes() {
        pickStateHeroes = {$pickStateHeroes|json_encode};
    }

    function initPhase() {
        phase = "{$phase}";
        if (phase === "maps") {
            updateMapsUI();
        }
        if (phase === "heroes") {
            hideMaps();
            showHeroes();
            updateHeroesUI();
        }
    }

    // **********************************************************************
    // *************************** Utils ************************************
    // **********************************************************************

    // fonction qui va griser les maps deja "picked"
    function updateMapsUI() {
        pickStateMaps.forEach(function (map) {
            if (map.checked == 1) {
                griserMap($('#' + map.mapId));
            }
        });
    }

    // fonction qui va griser les heros deja "picked"
    function updateHeroesUI() {
        pickStateHeroes.forEach(function (hero) {
            if (hero.checked == 1) {
                griserMap($('#' + hero.heroId + 'h'));
            }
        });
    }

    // suite a l'appuie sur l'image
    function kickMap(el) {
        var container = $(el);   // div containing img&text
        if (container.attr('data-checked') == 1) // deja kicked
            return;
        if (checkedMapsCount() >= 9)
            return;

        griserMap(container);

        // cacher les tuilles avec un delai --> just UI Exp 4 users
        setTimeout(function () {
            showGrayBox();
        }, 350);

        mapId = container.attr('id');

        $.when(updateDatabase(mapId)).done(function () {
            if (checkedMapsCount() <= 7) {
                // notifier l'opponent qu'une map a été "kick" et c'est son tour
                var message = ["mapKicked", playerId, matchId];
                socket.send(message);
            } else {
                // on savegarde la map et notifie l'opponent de changer de phase de pick (passer au heroes)
                $.when(saveChoosenMap()).done(function () {
                    // notifier l'opponent que le "pick" des maps est terminé
                    var message = ['mapsTerminated', playerId, matchId];
                    socket.send(message);
                    hideMaps();
                    showHeroes();
                });
            }
        });
    }

    function kickHero(el) {
        var container = $(el);   // div containing img&text
        if (container.attr('data-checked') == 1) // deja kicked
            return;
        if (checkedHeroesCount() >= 6)
            return;


        // bon ici on appele griser map, mais en fait la fct griserMap grise n'importe quel el qui lui passé en param
        // juste la flemme de refactor dans tt le code ici en changeant le mon de la fct. Si t'as envie --> have fun ^^
        griserMap(container);

        // cacher les tuilles avec un delai --> just UI Exp 4 users
        setTimeout(function () {
            showGrayBox();
        }, 350);

        heroId = container.attr('id').slice(0, -1);

        $.when(updateDatabaseHeroes(heroId)).done(function () {
            if (checkedHeroesCount() <= 4) {
                // notifier l'opponent qu'un hero a été "kick" et c'est son tour
                var message = ["heroKicked", playerId, matchId];
                socket.send(message);
            } else
            {
                // sauvegarder les données sous JSON dans la bd
                $.when(saveChoosenHeroes()).done(function () {
                    // notifier l'opponent que le "pick" des heros est terminé on a pick 6 heroes
                    var message = ['heroesTerminated', playerId, matchId];
                    socket.send(message);

                    // terminer la session de pick pour les deux users
                    message = ['pickTerminated', playerId, matchId];
                    socket.send(message);
                    
                    deleteTempTables();
                    closeSocketConnection();
                    showResultsOfPick();
                });
            }
        });
    }

    function checkedMapsCount() {
        this.counter = 0;
        pickStateMaps.forEach(function (map) {
            if (map.checked == true) {
                this.counter++;
            }
        });
        return this.counter;
    }

    function checkedHeroesCount() {
        this.counter = 0;
        pickStateHeroes.forEach(function (hero) {
            if (hero.checked == true) {
                this.counter++;
            }
        });
        return this.counter;
    }

    function updateDatabase(mapId) {
        return $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "updateDb",
                mapId: mapId,
                matchId: matchId,
                opponentId: opponentId
            },
            success: function (data) {
                console.log(data);
                // do nothing, just for waiting call ends
            },
            cache: false
        });
    }

    function updateDatabaseHeroes(heroId) {
        return $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "updateDbHeroes",
                heroId: heroId,
                matchId: matchId,
                opponentId: opponentId
            },
            success: function (data) {
                console.log(data);
                // do nothing, just for waiting call ends
            },
            cache: false
        });
    }

    function saveChoosenMap() {
        return $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "saveMap",
                matchId: matchId
            },
            success: function (data) {
                console.log(data);
                // do nothing, just for waiting call ends
            },
            cache: false
        });
    }

    function saveChoosenHeroes() {
        return $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "saveHeroes",
                matchId: matchId
            },
            success: function () {
                // do nothing, just for waiting call ends
            },
            cache: false
        });
    }
    
    function deleteTempTables(){
        $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "deleteTempTables",
                matchId: matchId
            },
            cache: false,
            success: function (data) {
                console.log(data);
                // do nothing, just for waiting call ends
            }
        });
    }

    function updatePickStateMaps() {
        return $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "getDataMaps",
                matchId: matchId
            },
            success: function (data) {
                pickStateMaps = JSON.parse(data);
            },
            cache: false
        });
    }

    function updatePickStateHeroes() {
        return $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "getDataHeroes",
                matchId: matchId
            },
            success: function (data) {
                pickStateHeroes = JSON.parse(data);
            },
            cache: false
        });
    }

    function hideBox() {
        grayBox.hide();
    }

    function showResultsOfPick() {
        setTimeout(function () {
            hideHeroes();
            hideGrayBox();
        }, 1500);
        

        $.ajax({
            type: "POST",
            url: "common/pickTools.php",
            data: {
                req: "getResultsOfPick",
                matchId: matchId
            },
            cache: false,
            success: function (data) {
                paths = JSON.parse(data);
                callback(paths);
            }
        });
    }

    function callback(paths) {
        // freestyle here --> no more time to code clean :(
        var pickResultsDiv = $('#pickResults');
        var heroesPaths = paths;
        var mapPath = heroesPaths.pop();

        selectedMap = $('<div class="row"><h2> Selected map :</h2>' +
                '<div class="col-xs-6 col-sm-4 col-md-3 col-lg3">' +
                '<img class="img-responsive" src="' + mapPath + '"/>' +
                '</div></div>');

        pickResultsDiv.append(selectedMap);
        pickResultsDiv.append('<br><h2>Banned heroes : </h2>');

        heroesPaths.forEach(function (path) {
            selectedHero = $('<div class="col-xs-3 col-sm-2 col-md-2 col-lg2">' +
                    '<img class="img-responsive" src="' + path + '"/>' +
                    '</div>');
            pickResultsDiv.append(selectedHero);
        });
        
        pickResultsDiv.show();
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
                        $.when(updatePickStateMaps()).done(function () {
                            updateMapsUI();
                            hideGrayBox();
                        });
                        break;

                    case "heroKicked":
                        $.when(updatePickStateHeroes()).done(function () {
                            updateHeroesUI();
                            hideGrayBox();
                        });
                        break;

                    case "mapsTerminated":
                        $.when(updatePickStateMaps()).done(function () {
                            updateMapsUI();
                        });

                        setTimeout(function () {
                            hideMaps();
                            showHeroes();
                            hideGrayBox();
                        }, 2000);
                        break;

                    case "heroesTerminated":
                        console.log("heroesTerminated received");
                        closeSocketConnection();
                        showResultsOfPick();
                        break;

                    default:
                        break;
                }
            };
        } catch (ex) {
            console.log(ex);
        }
    }

    function closeSocketConnection() {
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

    function hideMaps() {
        $('#mapsContainer').css('display', 'none');
    }

    function showHeroes() {
        $("#heroesContainer").css('display', 'block');
    }

    function hideHeroes() {
        $('#heroesContainer').css('display', 'none');
    }

</script>