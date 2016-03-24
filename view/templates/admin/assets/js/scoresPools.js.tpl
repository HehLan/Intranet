{* Smarty *}
<script>

    {* {if $tournoi.id_tournoi != 2} *}
            
    {foreach from=$groupes item=groupe}
        function getBracket_{$groupe.id_groupe}()
        {
            // Initial data if is not encoded in the database
            var result_{$groupe.id_groupe} = null;

            // Getting the bracket - the group_number must be dynamic
            $.ajax(
                {
                    url: '../common/bracket_get.php?id_tournoi={$tournoi.id_tournoi}&type=1&number={$groupe.id_groupe}',
                    type: 'GET',
                    dataType: 'text',
                    success: function (text_{$groupe.id_groupe}, status)
                    {
                        
                        //if(text_{$groupe.id_groupe}.contains("error"))
                        //{
                            //alert(text_{$groupe.id_groupe});
                            //result_{$groupe.id_groupe} = null;
                        //}
                        //else
                        //{ 
                            result_{$groupe.id_groupe} = JSON.parse(text_{$groupe.id_groupe});
                        //}
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
    {/foreach}

    {foreach from=$groupes item=groupe}
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
                    data: "json=" + $("#state-{$groupe.id_groupe}").text() + "&id_tournoi={$tournoi.id_tournoi}&type=1&number={$groupe.id_groupe}", 
                    dataType: 'text'
                }
            );      
        };   
    {/foreach}


    // Function when document is ready
    $(function ()
    {
        {foreach from=$groupes item=groupe}          
            var groupData_{$groupe.id_groupe} = null;
        {/foreach}

        {foreach from=$groupes item=groupe}  
            groupData_{$groupe.id_groupe} = getBracket_{$groupe.id_groupe}();
        {/foreach}  
            
        {foreach from=$groupes item=groupe}  
            $("#nav-tab-{$groupe.id_groupe}").click(function()
                {
                    var groupData_{$groupe.id_groupe} = null;
                    groupData_{$groupe.id_groupe} = getBracket_{$groupe.id_groupe}();
                    var editor_{$groupe.id_groupe} = $("#editor-{$groupe.id_groupe}");
                    var view_{$groupe.id_groupe} = $("#view-{$groupe.id_groupe}");
                    
                    editor_{$groupe.id_groupe}.empty();
                    editor_{$groupe.id_groupe}.group(
                        { 
                            init: groupData_{$groupe.id_groupe},
                            save: saveBracket_{$groupe.id_groupe}
                        }
                    );

                    view_{$groupe.id_groupe}.empty();
                    view_{$groupe.id_groupe}.group(
                        {
                            init: groupData_{$groupe.id_groupe}
                        }
                    );
                }
            ); 
        {/foreach}
    }); 
    
    {* //no groups 
{else}

    function getBracket()
    {
        // Initial data if is not encoded in the database
        var result = null;

        // Getting the bracket - the group_number must be dynamic
        $.ajax(
            {
                url: '../common/bracket_get.php?id_tournoi={$tournoi.id_tournoi}&type=1&number=0',
                type: 'GET',
                dataType: 'text',
                success: function (text, status)
                {
                    if(text.contains("error"))
                    {
                        result = null;
                    }
                    else
                    {
                        result = JSON.parse(text);
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
        return result;
    }
        
    function saveBracket(state)
    {
        // Write your storage code here, now just display JSON above
        $("#state").text(JSON.stringify(state, undefined, 2));
        // Reconstruct read-only version by initializing it with received state
        $("#view").empty().group({
            init: state
        });  
        $.ajax(
            {
                url: 'modules/bracket_save.php',
                type: 'POST',
                data: "json=" + $("#state").text() + "&id_tournoi={$tournoi.id_tournoi}&type=1&number=0", 
                dataType: 'text'
            }
        );      
    }; 
    
    // Function when document is ready
    $(function ()
    {       
        var groupData = null;
        groupData = getBracket();
        
        var editor = $("#editor");
        var view = $("#view");

        editor.empty();
        editor.group(
            { 
                init: groupData,
                save: saveBracket
            }
        );

        view.empty();
        view.group(
            {
                init: groupData
            }
        );

    });
{/if} *}


</script>