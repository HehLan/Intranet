{* Smarty *}
<script>
    
    // Function when document is ready
    $(function ()
    {
        // Initial data if is not encoded in the database
        {if $tournoi.id_tournoi != 2} 
            var groupData_{$groupe.id_groupe} = null;
        {else}
            var groupData = null;
        {/if}
            
        // Getting the bracket - the group_number must be dynamic
        $.ajax(
            {
                {if $tournoi.id_tournoi != 2} 
                    url: "common/bracket_get.php?id_tournoi={$tournoi.id_tournoi}&type=1&number={$groupe.id_groupe}",
                {else}
                    url: "common/bracket_get.php?id_tournoi={$tournoi.id_tournoi}&type=1&number=0",
                {/if}                                
                type: 'GET',
                dataType: 'text',
                success: function (text, status)
                {
                    {if $tournoi.id_tournoi != 2} 
                        groupData_{$groupe.id_groupe} = JSON.parse(text);
                        $('#bracket-{$groupe.id_groupe}').group(
                            {
                                init: groupData_{$groupe.id_groupe}
                            }
                        );
                    {else}
                        groupData = JSON.parse(text);
                        $('#bracket').group(
                            {
                                init: groupData
                            }
                        );
                    {/if}               
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
        //$('header').text('coucou');
        
    });

</script>