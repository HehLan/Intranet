<?php
/* Smarty version 3.1.29, created on 2016-03-25 09:45:43
  from "E:\wamp\www\Intranet\view\templates\admin\commandListArticles.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f4fab7af9015_26227107',
  'file_dependency' => 
  array (
    '780dd6014f0fb121084769d50b3a522861429e0f' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\commandListArticles.tpl',
      1 => 1458894385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f4fab7af9015_26227107 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1158156f4fab7a42313_24556433';
?>

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
			<span class="glyphicon glyphicon-chevron-up articleExpander glyphicon-white" 
				role="tab" id="headingArt<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
"
				data-toggle="collapse" 
				data-parent="#commandesArticlesList" href="#collapseArt<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
" 
				aria-expanded="false">
			</span>
			<span class="article-nom"><?php echo $_smarty_tpl->tpl_vars['article']->value['nom'];?>
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
<?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_local_item;
}
if ($__foreach_article_0_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_item;
}
}
}
