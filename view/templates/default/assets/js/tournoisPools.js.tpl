{* Smarty *}
<script>
    
    // Function when document is ready
    $(function ()
    {
        // Initial data if is not encoded in the database
        var groupData_{$groupe.id_groupe} = null;

        // Getting the bracket - the group_number must be dynamic
        $.ajax(
            {
                url: "common/bracket_get.php?id_tournoi={$tournoi.id_tournoi}&type=1&group_number={$groupe.id_groupe}",
                type: 'GET',
                dataType: 'text',
                success: function (text, status)
                {
                    groupData_{$groupe.id_groupe} = JSON.parse(text);
                    $('#bracket-{$groupe.id_groupe}').group(
                        {
                            init: groupData_{$groupe.id_groupe}
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
        
    });

</script>