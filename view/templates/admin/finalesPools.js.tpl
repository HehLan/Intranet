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
            url: 'modules/bracket_get.php?id_tournoi=' + id,
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

    /* Called whenever bracket is modified
     *
     * data:     changed bracket object in format given to init
     * userData: optional data given when bracket is created.
     */
    function saveFn(data, userData)
    {
        $('#saveOutput').text(JSON.stringify(data));
        $.ajax(
            {
                url: 'modules/bracket_save.php',
                type: 'POST',
                data: "data=" + JSON.stringify(data) + "&id_tournoi=" + id,
                dataType: 'text'
            }
        );
    };

    $(function ()
    {
        var container = $('#bracket-pools-admin');
        container.bracket(
            {
                init: saveData,
                save: saveFn,
                userData: "http://myapi"
            }
        );

        /* You can also inquiry the current data */
        //var data = container.bracket('data');

    });

</script>