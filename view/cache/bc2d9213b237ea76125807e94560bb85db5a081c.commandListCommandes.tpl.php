<?php
/* Smarty version 3.1.29, created on 2016-03-25 09:45:44
  from "E:\wamp\www\Intranet\view\templates\admin\commandListCommandes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f4fab8579326_22051045',
  'file_dependency' => 
  array (
    'bc2d9213b237ea76125807e94560bb85db5a081c' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\commandListCommandes.tpl',
      1 => 1458894385,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56f4fab8579326_22051045 ($_smarty_tpl) {
?>

	<div class="panel panel-default" id-commande="">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<span class="glyphicon glyphicon-chevron-down commandeExpander glyphicon-white" 
				role="tab" id="headingComm"
				data-toggle="collapse" 
				data-parent="#commandesList" href="#collapseComm" 
				aria-expanded="true">
			</span>
			<span class="commande-nom"></span>
			<div class="float-me">
				<span class="commande-date">il y a </span>
				<span class="paid glyphicon glyphicon-euro" commande-status=""
					>
				</span>
				<span class="commanded glyphicon glyphicon-earphone" commande-status=""
					>
				</span>
				<span class="received glyphicon glyphicon-ok" commande-status=""
					>
				</span>
			</span>
		  </h4>
		</div>
		<div id="collapseComm" class="panel-collapse collapse in" 
			role="tabpanel" aria-labelledby="headingComm">
			<div class="panel-body">
				<div class="commande-description">
					<div class="commande-items">
										</div>
					<div class="commande-closing-items">
						<div class="commande-comment col-md-offset-1 col-md-8"></div>
						<div class="commande-total col-md-2">TOTAL €</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }
}
