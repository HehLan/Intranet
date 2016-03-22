{* Smarty *}
<script>

    var id = {$tournoi.id_tournoi};

    // Initial data if is not encoded in the database
    var saveData = {
        teams: [
            ["Team 1", "Team 2"], 
            ["Team 3", "Team 4"] 
        ],
        results: [[1, 0], [2, 7]]
    }; 

    // Getting the bracket
    $.ajax(
        {
            url: '../common/bracket_get.php?id_tournoi=' + id + "&type=2" + "&finales_number=1",
            type: 'GET',
            dataType: 'text',
            success: function (text, status)
            {
                saveData = JSON.parse(text);
            },
            error: function (resultat, statut, erreur)
            {
                
            },
            complete: function (resultat, statut)
            {

            },
            async: false
        }
    );
    
    function saveFn(state1)
    {
        // Write your storage code here, now just display JSON above
        $('#state1').text(JSON.stringify(state1, undefined, 2));
        // Reconstruct read-only version by initializing it with received state
        $('#view1').empty().bracket({
            init: state1
        });
        $.ajax(
            {
                url: 'modules/bracket_save.php',
                type: 'POST',
                data: "json=" + JSON.stringify(state1) + "&id_tournoi=" + id + "&type=2" + "&finales_number=1", 
                dataType: 'text'
            }
        );
    };     

    $(function ()
    {
        var container = $('#editor1');
        container.bracket(
            {
                init: saveData,
                save: saveFn
            }
        );
        $('#view1').bracket(
            {
                init: saveData
            }
        );

        /* You can also inquiry the current data */
        //var data = container.bracket('data');

    });

</script>