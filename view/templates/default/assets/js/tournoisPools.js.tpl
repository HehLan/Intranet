{* Smarty *}
<script>
    var id = {$tournoi.id_tournoi};
    
    // Initial data if is not encoded in the database
    var groupData = null;

    // Getting the bracket - the group_number must be dynamic
    $.ajax(
        {
            url: 'common/bracket_get.php?id_tournoi=' + id + "&type=1" + "&group_number=1",
            type: 'GET',
            dataType: 'text',
            success: function (text, status)
            {
                groupData = JSON.parse(text);
                $('#bracket').group(
                {
                    init: groupData
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