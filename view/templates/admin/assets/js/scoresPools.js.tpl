{* Smarty *}
<script>

    function getBracket_{$groupe.id_groupe}()
    {
        // Initial data if is not encoded in the database
        var result_{$groupe.id_groupe} = null;

        // Getting the bracket - the group_number must be dynamic
        $.ajax(
            {
                url: '../common/bracket_get.php?id_tournoi={$tournoi.id_tournoi}&type=1&group_number={$groupe.id_groupe}',
                type: 'GET',
                dataType: 'text',
                success: function (text_{$groupe.id_groupe}, status)
                {
                    alert(text_{$groupe.id_groupe});
                    if(text_{$groupe.id_groupe}.contains("error"))
                    {
                        result_{$groupe.id_groupe} = null;
                    }
                    else
                    {
                        result_{$groupe.id_groupe} = JSON.parse(text_{$groupe.id_groupe});
                    }
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
        return result_{$groupe.id_groupe};
    }
    
    function saveBracket_{$groupe.id_groupe}(state)
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

    // Function when document is ready
    $(function ()
    {
        var groupData_{$groupe.id_groupe} = null;
        
        // This code below does not change the global variable
        /*
        $("#nav-tab-{$groupe.id_groupe}").click(function()
        {
            groupData_{$groupe.id_groupe} = getBracket_{$groupe.id_groupe}();
        });*/
    
        // So I use this line below directly here
        // But by doing this, editor of the next tab (next script) does not appear
        // The analyse of the generated HTML gives an empty div tag, seems that the init did not work
        groupData_{$groupe.id_groupe} = getBracket_{$groupe.id_groupe}();
        
        var container_{$groupe.id_groupe} = $("#editor-{$groupe.id_groupe}");
        container_{$groupe.id_groupe}.group(
            {
                init: groupData_{$groupe.id_groupe},
                save: saveBracket_{$groupe.id_groupe}
            }
        );
        $("#view-{$groupe.id_groupe}").group(
            {
                init: groupData_{$groupe.id_groupe}
            }
        );
    }); 
    
</script>