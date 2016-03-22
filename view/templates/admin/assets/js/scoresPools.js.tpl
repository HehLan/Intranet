{* Smarty *}
<script>
    
    // Initial data if is not encoded in the database
    var groupData_{$groupe.id_groupe} = null;

    // Getting the bracket - the group_number must be dynamic
    $.ajax(
        {
            url: '../common/bracket_get.php?id_tournoi={$tournoi.id_tournoi}&type=1&group_number={$groupe.id_groupe}',
            type: 'GET',
            dataType: 'text',
            success: function (text, status)
            {
                if(text.contains("error"))
                {
                    groupData_{$groupe.id_groupe} = null;
                }
                else
                {
                    groupData_{$groupe.id_groupe} = JSON.parse(text);
                }
            },
            error: function (resultat, statut, erreur)
            {
                groupData_{$groupe.id_groupe} = null;
            },
            complete: function (resultat, statut)
            {

            },
            async: false
        }
    );
    

    function saveFn_{$groupe.id_groupe}(state)
    {
        // Write your storage code here, now just display JSON above
        $("#state-{$groupe.id_groupe}").text(JSON.stringify(state, undefined, 2));
        // Reconstruct read-only version by initializing it with received state
        $("#view-{$groupe.id_groupe}").empty().group({
            init: state
        });  
        $.ajax(
            {
                url: 'modules/bracket_save.php',
                type: 'POST',
                data: "json=" + $("#state-{$groupe.id_groupe}").text() + "&id_tournoi={$tournoi.id_tournoi}&type=1&group_number={$groupe.id_groupe}", 
                dataType: 'text'
            }
        );      
    };   

    $(function ()
    {
        var container_{$groupe.id_groupe} = $("#editor-{$groupe.id_groupe}");
        container_{$groupe.id_groupe}.group(
            {
                init: groupData_{$groupe.id_groupe},
                save: saveFn_{$groupe.id_groupe}
            }
        );
        $("#view-{$groupe.id_groupe}").group(
            {
                init: groupData_{$groupe.id_groupe}
            }
        );

        //You can also inquiry the current data 
        //var data = container.bracket('data');

    });
   
    


</script>