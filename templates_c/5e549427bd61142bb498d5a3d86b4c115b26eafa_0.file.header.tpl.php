<?php
/* Smarty version 3.1.29, created on 2016-02-19 16:10:14
  from "E:\wamp\www\Intranet\templates\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c73056e1f523_60127970',
  'file_dependency' => 
  array (
    '5e549427bd61142bb498d5a3d86b4c115b26eafa' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\templates\\default\\header.tpl',
      1 => 1455662777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c73056e1f523_60127970 ($_smarty_tpl) {
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'templates/default/paths.conf', null, 0);
?>

<header id="header" class="row" >
    <div id="logo" class="col-lg-9 col-sm-9 col-xs-12" >
        <a href="index.php">
            <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/img/logoheh.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-3 col-sm-3 col-xs-12" >
        <?php if ($_smarty_tpl->tpl_vars['con']->value) {?>
            <p>Bienvenue <?php echo $_SESSION['login'];?>
, <a href="common/deco.php">se déconnecter</a></p>
        <?php } else { ?>
            <p>Bienvenue, <a href="#">se connecter</a></p>
        <?php }?>
        <p>IP: <?php echo $_SERVER['REMOTE_ADDR'];?>
.</p>
        <?php if ($_smarty_tpl->tpl_vars['con']->value&isset($_smarty_tpl->tpl_vars['next_matches']->value)&!empty($_smarty_tpl->tpl_vars['next_matches']->value)) {?>
            <strong>Prochains matchs</strong><br>
            <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['next_matches']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                <?php echo $_smarty_tpl->tpl_vars['next_matches']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['jour'];?>
 <?php echo $_smarty_tpl->tpl_vars['next_matches']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['heure'];?>
 <?php echo $_smarty_tpl->tpl_vars['next_matches']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nom'];?>
<br>
            <?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>
        <?php }?>       
    </div>	     
</header><?php }
}
