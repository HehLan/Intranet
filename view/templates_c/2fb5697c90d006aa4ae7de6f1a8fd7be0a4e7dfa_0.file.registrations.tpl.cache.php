<?php
/* Smarty version 3.1.29, created on 2016-03-25 09:45:40
  from "E:\wamp\www\Intranet\view\templates\admin\registrations.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f4fab40bec39_99026503',
  'file_dependency' => 
  array (
    '2fb5697c90d006aa4ae7de6f1a8fd7be0a4e7dfa' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\registrations.tpl',
      1 => 1458866888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/meta.tpl' => 1,
    'file:admin/header.tpl' => 1,
    'file:admin/nav.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_56f4fab40bec39_99026503 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2174356f4fab3e95b65_34039046';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/registrations.css" >
    </head>

    <body role="document">
 	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
	
	<div id="container" class="container-fluid">
            <div id="contenu" class="row">
                <div class="table-responsive col-lg-8">
                    <table class="table table-condensed">
                        <caption>
                            <h4>Informations sur l'enregistrement des inscriptions</h4>
                        </caption>
                        <thead>
                            <tr>
                                <th>Payé <span class="badge"><?php echo $_smarty_tpl->tpl_vars['counter']->value['paye'];?>
</span></th>
                                <th>Pseudo <span class="badge"><?php echo $_smarty_tpl->tpl_vars['counter']->value['player'];?>
</span></th>
                                <th>Team <span class="badge"><?php echo $_smarty_tpl->tpl_vars['counter']->value['team'];?>
</span></th>
                                <th>HOTS <span class="badge"><?php echo $_smarty_tpl->tpl_vars['counter']->value['HOTS'];?>
</span></th>
                                <th>COD <span class="badge"><?php echo $_smarty_tpl->tpl_vars['counter']->value['COD'];?>
</span></th>
                                <th>TM <span class="badge"><?php echo $_smarty_tpl->tpl_vars['counter']->value['TM'];?>
</span></th>
                                <th>HS <span class="badge"><?php echo $_smarty_tpl->tpl_vars['counter']->value['HS'];?>
</span></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['counter']->value['paye'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['counter']->value['player'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['counter']->value['team'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['counter']->value['HOTS'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['counter']->value['COD'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['counter']->value['TM'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['counter']->value['HS'];?>
</td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->tpl_vars['datas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data'] : false;
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['data'];
?>
                                <tr>
                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['paye'] == 0) {?>
                                        <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                    <?php } else { ?>
                                        <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                    <?php }?>
                                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['pseudo'];?>
</td>                                
                                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['team'];?>
</td>
                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['hots'] == 0) {?>
                                        <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                    <?php } else { ?>
                                       <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['cod'] == 0) {?>
                                        <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                    <?php } else { ?>
                                        <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['tm'] == 0) {?>
                                        <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                    <?php } else { ?>
                                        <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['hs'] == 0) {?>
                                        <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                    <?php } else { ?>
                                        <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                    <?php }?>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['data'] = $__foreach_data_0_saved_item;
}
?>
                        </tbody> 
                    </table>
                </div>
            </div>
	</div>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
 
    </body>
</html><?php }
}
