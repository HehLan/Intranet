<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:51:26
  from "E:\wamp\www\Intranet\view\templates\default\assets\js\finalesPools.js.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916ee79f828_14032161',
  'file_dependency' => 
  array (
    'e43d8719cdda8df2a9b54798429168de09245179' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\assets\\js\\finalesPools.js.tpl',
      1 => 1458872328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570916ee79f828_14032161 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12931570916ee78bf97_54706155';
?>

<?php echo '<script'; ?>
>

    var id = <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
;

    $.ajax(
        {
            url: 'common/bracket_get.php?id_tournoi=' + id + "&type=2" + "&number=1",
            type: 'GET',
            dataType: 'text',
            success: function (text, status)
            {
                var data = JSON.parse(text);
                $("#bracket").bracket(
                {
                    init: data // data to initialize the bracket with
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
    
<?php echo '</script'; ?>
><?php }
}
