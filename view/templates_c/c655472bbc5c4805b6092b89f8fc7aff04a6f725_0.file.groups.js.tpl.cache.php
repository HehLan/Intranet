<?php
/* Smarty version 3.1.29, created on 2016-03-25 13:11:35
  from "E:\wamp\www\Intranet\view\templates\admin\assets\js\groups.js.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f52af7ef1ae1_39232610',
  'file_dependency' => 
  array (
    'c655472bbc5c4805b6092b89f8fc7aff04a6f725' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\assets\\js\\groups.js.tpl',
      1 => 1458900482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f52af7ef1ae1_39232610 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3009356f52af7ede256_29877936';
?>

<?php echo '<script'; ?>
>
    // Function when document is ready
    $(function ()
    {
        $("#button-add-group").click(function()
        {
            $.ajax(
                {
                    url: 'modules/groups_add.php',
                    type: 'POST',
                    data: "id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&group_name=" + $("#group-name").val(), 
                    dataType: 'text'
                }
            );
    
       
    
    
            document.location.reload(true);
            
            
        });
    });
    
<?php echo '</script'; ?>
><?php }
}
