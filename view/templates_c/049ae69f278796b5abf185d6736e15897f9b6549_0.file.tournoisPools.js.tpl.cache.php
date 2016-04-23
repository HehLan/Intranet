<?php
/* Smarty version 3.1.29, created on 2016-03-25 13:12:53
  from "E:\wamp\www\Intranet\view\templates\default\assets\js\tournoisPools.js.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f52b45ad4bc4_08806209',
  'file_dependency' => 
  array (
    '049ae69f278796b5abf185d6736e15897f9b6549' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\assets\\js\\tournoisPools.js.tpl',
      1 => 1458907855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f52b45ad4bc4_08806209 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2208156f52b45a92537_09622353';
?>

<?php echo '<script'; ?>
>
    
    // Function when document is ready
    $(function ()
    {
        // Initial data if is not encoded in the database
        var groupData_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = null;

            
        // Getting the bracket - the group_number must be dynamic
        $.ajax(
            {
                url: "common/bracket_get.php?id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&type=1&number=<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
",                              
                type: 'GET',
                dataType: 'text',
                success: function (text, status)
                {
                    groupData_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = JSON.parse(text);
                    $('#bracket-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
').group(
                        {
                            init: groupData_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>

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

<?php echo '</script'; ?>
><?php }
}
