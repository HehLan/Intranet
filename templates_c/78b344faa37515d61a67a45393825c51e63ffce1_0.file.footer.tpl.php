<?php
/* Smarty version 3.1.29, created on 2016-02-19 13:47:46
  from "E:\wamp\www\Intranet\templates\default\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c70ef2d1e8b5_40547803',
  'file_dependency' => 
  array (
    '78b344faa37515d61a67a45393825c51e63ffce1' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\templates\\default\\footer.tpl',
      1 => 1455658278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c70ef2d1e8b5_40547803 ($_smarty_tpl) {
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'templates/default/paths.conf', null, 0);
?>

<footer id="footer" class="row">
    <div id="copyright" class="col-lg-3 col-sm-12 col-xs-12">
        <p>HEHLan All Rights Reserved Copyright 2016</p>
    </div>
    <div id="ceheh" class="col-lg-offset-2 col-lg-2 col-sm-12 col-xs-12">
        <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/img/logo3.png" alt="CEHECOFH">
    </div>
    <div id="campus_technique" class="col-lg-offset-3 col-lg-2 col-sm-12 col-xs-12">
        <a href="http://www.heh.be" target="_blank">
            <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/img/logo4.png" alt="HeH">
        </a>
    </div>
</footer><?php }
}
