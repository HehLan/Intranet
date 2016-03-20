{* Smarty *}
<script>

    var id = {$tournoi.id_tournoi};

    alert(id);

    $.ajax(
    {
        url: 'modules/get_bracket.php?id_tournoi' + id,
        type: 'GET',
        dataType: 'text',
        success: function (text, status)
        {
            var data = JSON.parse(text);

            $("#bracket-pools-test").bracket(
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

        }
    });
    
</script>