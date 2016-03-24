{* Smarty *}
<script>

    // Function when document is ready
    $(function ()
    {
        $("#button-add-group").click(function()
        {
            $.ajax(
                {
                    url: 'modules/groups_add.php',
                    type: 'POST',
                    data: "id_tournoi=" + {$tournoi.id_tournoi} + "&group_name=" + $("#group-name").val(), 
                    dataType: 'text',
                }
            );
            document.location.reload(true);

        });
    });
    
</script>