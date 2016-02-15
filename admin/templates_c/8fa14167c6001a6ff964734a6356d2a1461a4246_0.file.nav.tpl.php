<?php
/* Smarty version 3.1.29, created on 2016-02-15 18:15:38
  from "E:\wamp\www\Intranet\admin\templates\default\nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c207baee1c28_33942441',
  'file_dependency' => 
  array (
    '8fa14167c6001a6ff964734a6356d2a1461a4246' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\admin\\templates\\default\\nav.tpl',
      1 => 1455544585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c207baee1c28_33942441 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "templates/default/paths.conf", null, 0);
?>

<nav id="navigation" class="navbar navbar-inverse" role="navigation" >
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Accueil</a></li>
				<li><a href="joueurs.php">Joueurs</a></li>
				<?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['navTournois']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
					<li><a href="tournois.php?id=<?php echo $_smarty_tpl->tpl_vars['navTournois']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['idTournoi'];?>
"><?php echo $_smarty_tpl->tpl_vars['navTournois']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nomTournoi'];?>
</a></li>
				<?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>
				<?php if ($_smarty_tpl->tpl_vars['con']->value) {?>
					<li><a href="ModifProfil.php">Mon profil</a></li>
					<?php if ($_smarty_tpl->tpl_vars['SESSION']->value['level'] == 1) {?>
						<li><a href="admin/index.php">Admin</a></li>
					<?php }?>
				<?php }?>
			</ul>
		</div>
	</div>			
</nav>
<?php }
}
