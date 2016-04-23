<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:51:08
  from "E:\wamp\www\Intranet\view\templates\admin\assets\js\finalesPools.js.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916dcd48b18_54265972',
  'file_dependency' => 
  array (
    '13498c73bf46a05f2abff41b545f6992d58589b2' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\assets\\js\\finalesPools.js.tpl',
      1 => 1458819247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570916dcd48b18_54265972 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '32403570916dcd15e92_04285639';
?>

<?php echo '<script'; ?>
>

    function getBracket()
    {
        // Initial data if is not encoded in the database
        var result =  {
            teams: [
                ["Team 1", "Team 2"], 
                ["Team 3", "Team 4"] 
            ],
            results: [[1, 0], [2, 7]]
        };
    
        // Getting the bracket - the group_number must be dynamic
        $.ajax(
            {
                url: '../common/bracket_get.php?id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&type=2&number=1',
                type: 'GET',
                dataType: 'text',
                success: function (text, status)
                {
                    /*if(text.contains("error"))
                    {
                        result = {
                            teams: [
                                ["Team 1", "Team 2"], 
                                ["Team 3", "Team 4"] 
                            ],
                            results: [[1, 0], [2, 7]]
                        };
                    }*/
                    //else
                    //{
                        result = JSON.parse(text);
                    //}
 
                },
                error: function (resultat, statut, erreur)
                {
                    result = {
                            teams: [
                                ["Team 1", "Team 2"], 
                                ["Team 3", "Team 4"] 
                            ],
                            results: [[1, 0], [2, 7]]
                        };
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
        $('#state').text(JSON.stringify(state, undefined, 2));
        // Reconstruct read-only version by initializing it with received state
        $('#view').empty().bracket({
            init: state
        });
        $.ajax(
            {
                url: 'modules/bracket_save.php',
                type: 'POST',
                data: "json=" + $("#state").text() + "&id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&type=2&number=1", 
                dataType: 'text'
            }
        );      
    }; 
    
    // Function when document is ready
    $(function ()
    {       
        // Initial data if is not encoded in the database
        var bracketData = {
            teams: [
                ["Team 1", "Team 2"], 
                ["Team 3", "Team 4"] 
            ],
            results: [[1, 0], [2, 7]]
        };         
        
        //var bracketData = null;
        bracketData = getBracket();
        
        var editor = $("#editor");
        var view = $("#view");
        
        editor.empty();
        editor.bracket(
            { 
                init: bracketData,
                save: saveBracket
            }
        );

        view.empty();
        view.bracket(
            {
                init: bracketData
            }
        );

    });

<?php echo '</script'; ?>
>
<?php }
}
