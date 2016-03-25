{* Smarty *}

<script>
    
    var matchId = "{$matchId}";
    
    $(document).ready(function () {
        showResultsOfPick();
    });
    
    
function showResultsOfPick() {
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
        // deal with it and have fun ^^
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
    
    </script>