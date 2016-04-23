{* Smarty *}

{*
<script>
    
    // Function when document is ready
    $(function ()
    {
        // Initial data if is not encoded in the database
        var groupData_{$groupe.id_groupe} = null;

            
        // Getting the bracket - the group_number must be dynamic
        $.ajax(
            {
                url: "common/bracket_get.php?id_tournoi={$tournoi.id_tournoi}&type=1&number={$groupe.id_groupe}",                              
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
*}




{* best script because it reload the content at each tab click and it is modular *}

<script>
            
    {foreach from=$groupes item=groupe}
        function getBracket_{$groupe.id_groupe}()
        {
            // Initial data if is not encoded in the database
            var result_{$groupe.id_groupe} = null;

            // Getting the bracket - the group_number must be dynamic
            $.ajax(
                {
                    url: 'common/bracket_get.php?id_tournoi={$tournoi.id_tournoi}&type=1&number={$groupe.id_groupe}',
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



    // Function when document is ready
    $(function ()
    {
        {foreach from=$groupes item=groupe}          
            var groupData_{$groupe.id_groupe} = null;
        {/foreach}

        {foreach from=$groupes item=groupe}  
            groupData_{$groupe.id_groupe} = getBracket_{$groupe.id_groupe}();
        {/foreach}  
            
        {foreach name=groupLoop from=$groupes item=groupe}
		
		
			var groupData_{$groupe.id_groupe} = null;
			groupData_{$groupe.id_groupe} = getBracket_{$groupe.id_groupe}();
			var view_{$groupe.id_groupe} = $("#bracket-{$groupe.id_groupe}");
			

			view_{$groupe.id_groupe}.empty();
			view_{$groupe.id_groupe}.group(
				{
					init: groupData_{$groupe.id_groupe}
				}
			); 
		
		
            $("#nav-tab-{$groupe.id_groupe}").click(function ()
                {
					
				
                    var groupData_{$groupe.id_groupe} = null;
                    groupData_{$groupe.id_groupe} = getBracket_{$groupe.id_groupe}();
                    var view_{$groupe.id_groupe} = $("#bracket-{$groupe.id_groupe}");
                    

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
	
	
	</script>

