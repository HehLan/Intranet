{* Smarty *}
<script>
    var id = {$tournoi.id_tournoi};
    
    // Initial data if is not encoded in the database
    var groupData = null;

    // Getting the bracket - the group_number must be dynamic
    $.ajax(
        {
            url: 'modules/bracket_get.php?id_tournoi=' + id + "&type=1" + "&group_number=1",
            type: 'GET',
            dataType: 'text',
            success: function (text, status)
            {
                groupData = JSON.parse(text);
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

    function saveFn(state1)
    {
        // Write your storage code here, now just display JSON above
        $('#state1').text(JSON.stringify(state1, undefined, 2));
        // Reconstruct read-only version by initializing it with received state
        $('#view1').empty().group({
            init: state1
        });
        $.ajax(
            {
                url: 'modules/bracket_save.php',
                type: 'POST',
                data: "json=" + JSON.stringify(state1) + "&id_tournoi=" + id + "&type=1" + "&group_number=1", 
                dataType: 'text'
            }
        );
    };   
   
    $(function ()
    {
        var container = $('#editor1');
        if(groupData !== null)
        {
            container.group(
                {
                    init: groupData,
                    save: saveFn
                }
            );
        }
        else
        { 
            container.group(
                {
                    save: saveFn
                }
            );
        }

        //You can also inquiry the current data 
        //var data = container.bracket('data');

    });
   



</script>