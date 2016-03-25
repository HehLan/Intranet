{* Smarty *}
<script>

    var id = {$tournoi.id_tournoi};

    $.ajax(
        {
            url: 'common/bracket_get.php?id_tournoi=' + id + "&type=2" + "&number=1",
            type: 'GET',
            dataType: 'text',
            success: function (text, status)
            {
                var data = JSON.parse(text);
                $("#bracket").bracket(
                {
                    init: data // data to initialize the bracket with
                }
            );
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
    
</script>