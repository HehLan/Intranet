<?php
/* Smarty version 3.1.29, created on 2016-03-25 14:04:53
  from "E:\wamp\www\Intranet\view\templates\admin\assets\js\scoresPools.js.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f537751972f0_52001871',
  'file_dependency' => 
  array (
    '69026309d953adb5dc4f8a125d66439255df2231' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\assets\\js\\scoresPools.js.tpl',
      1 => 1458830691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f537751972f0_52001871 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2965756f53774f20002_24078423';
?>

<?php echo '<script'; ?>
>

    
            
    <?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groupe_0_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$__foreach_groupe_0_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>
        function getBracket_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
()
        {
            // Initial data if is not encoded in the database
            var result_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = null;

            // Getting the bracket - the group_number must be dynamic
            $.ajax(
                {
                    url: '../common/bracket_get.php?id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&type=1&number=<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
',
                    type: 'GET',
                    dataType: 'text',
                    success: function (text_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
, status)
                    {
                        
                        //if(text_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
.contains("error"))
                        //{
                            //alert(text_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
);
                            //result_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = null;
                        //}
                        //else
                        //{ 
                            result_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = JSON.parse(text_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
);
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
            return result_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
;
        }
    <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_0_saved_local_item;
}
if ($__foreach_groupe_0_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_0_saved_item;
}
?>

    <?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groupe_1_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$__foreach_groupe_1_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>
        function saveBracket_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
(state)
        {
            // Write your storage code here, now just display JSON above
            $("#state-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
").text(JSON.stringify(state, undefined, 2));
            // Reconstruct read-only version by initializing it with received state
            $("#view-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
").empty().group({
                init: state
            });  
            $.ajax(
                {
                    url: 'modules/bracket_save.php',
                    type: 'POST',
                    data: "json=" + $("#state-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
").text() + "&id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&type=1&number=<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
", 
                    dataType: 'text'
                }
            );      
        };   
    <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_1_saved_local_item;
}
if ($__foreach_groupe_1_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_1_saved_item;
}
?>


    // Function when document is ready
    $(function ()
    {
        <?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groupe_2_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$__foreach_groupe_2_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>          
            var groupData_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = null;
        <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_2_saved_local_item;
}
if ($__foreach_groupe_2_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_2_saved_item;
}
?>

        <?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groupe_3_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$__foreach_groupe_3_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>  
            groupData_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = getBracket_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
();
        <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_3_saved_local_item;
}
if ($__foreach_groupe_3_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_3_saved_item;
}
?>  
            
        <?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groupLoop_4_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$__foreach_groupLoop_4_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>
            $("#nav-tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
").click(function ()
                {
                    var groupData_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = null;
                    groupData_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = getBracket_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
();
                    var editor_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = $("#editor-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
");
                    var view_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
 = $("#view-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
");
                    
                    editor_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
.empty();
                    editor_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
.group(
                        { 
                            init: groupData_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
,
                            save: saveBracket_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>

                        }
                    );

                    view_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
.empty();
                    view_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
.group(
                        {
                            init: groupData_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>

                        }
                    );
                }
            ); 
        <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupLoop_4_saved_local_item;
}
if ($__foreach_groupLoop_4_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupLoop_4_saved_item;
}
?>
    
    }); 
    
    


<?php echo '</script'; ?>
><?php }
}
