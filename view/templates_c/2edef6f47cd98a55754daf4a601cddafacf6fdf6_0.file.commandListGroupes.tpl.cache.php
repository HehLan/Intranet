<?php
/* Smarty version 3.1.29, created on 2016-03-25 09:45:43
  from "E:\wamp\www\Intranet\view\templates\admin\commandListGroupes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f4fab7e4e218_90371388',
  'file_dependency' => 
  array (
    '2edef6f47cd98a55754daf4a601cddafacf6fdf6' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\commandListGroupes.tpl',
      1 => 1458894385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f4fab7e4e218_90371388 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3031356f4fab7ce0814_00118358';
?>

<div id="side_command_group">
	<?php
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_article_0_saved_item = isset($_smarty_tpl->tpl_vars['article']) ? $_smarty_tpl->tpl_vars['article'] : false;
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['article']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
$__foreach_article_0_saved_local_item = $_smarty_tpl->tpl_vars['article'];
?>
	<div class="panel panel-default" id-article="<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<span class="article-nom"><?php echo $_smarty_tpl->tpl_vars['article']->value['nom'];?>
</span>
		  </h4>
		</div>
		<div id="collapseArt<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
" class="panel-collapse collapse" 
			role="tabpanel" aria-labelledby="headingArt<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
">
			<div class="panel-body">
				<span class="article-description"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</span>
			</div>
		</div>
	</div>
	<?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_local_item;
}
if ($__foreach_article_0_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_item;
}
?>
</div>
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
	<div class="panel panel-default" id-grp="<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<span class="glyphicon glyphicon-chevron-up articleExpander glyphicon-white" 
				role="tab" id="headingArt<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
"
				data-toggle="collapse" 
				data-parent="#commandesArticlesList" href="#collapseArt<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
" 
				aria-expanded="true">
			</span>
			<span class="article-nom"><?php echo $_smarty_tpl->tpl_vars['groupe']->value['nom'];?>
</span>
			<i class="remove glyphicon glyphicon-remove-sign glyphicon-white"></i>
		  </h4>
		</div>
		<div id="collapseArt<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
" class="panel-collapse collapse" 
			role="tabpanel" aria-labelledby="headingArt<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
">
			<div class="panel-body">
				<span class="article-description"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</span>
			</div>
		</div>
	</div>
	<div>
		<input class="article_price" type="number" min="0" step="0.01" value ="0"/>
	</div>
<?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_1_saved_local_item;
}
if ($__foreach_groupe_1_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_1_saved_item;
}
}
}
