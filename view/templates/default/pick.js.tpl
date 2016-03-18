{* Smarty *}
<script>
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

    $(document).ready(function () {
        initPlayers();
        initGrayBox();
        initPickState();
        checkMaps();

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
        /*
         pickState.forEach(function (map) {
         console.log(map.mapId + " " + map.checked);
         });
         */
    }

    // fonction qui va griser les maps deja "picked" --> si joueur doit reco pr quelconque raison
    function checkMaps() {
        pickState.forEach(function (map) {
            if(map.checked == true){
                
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

        grayBox.addClass("darkCover");
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
        
        if(container.attr('data-checked') == 1)
            return;
        griserMap(container);
    }

    function griserMap(container) {
        container.attr('data-checked', 1);    // change div's value, to avoid it change css on mouseHower

        // faire disparaitre l'effet de survol, car apres avoir change 'data-value' l'effet "mouseLeave" 
        // n'a plus d'effet. Du coup on le fait ici a la main
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
        }, 350);
    }

    // highlighting text 
    function highlightUp(el) {
        var container = $(el);              // div containing img&text
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