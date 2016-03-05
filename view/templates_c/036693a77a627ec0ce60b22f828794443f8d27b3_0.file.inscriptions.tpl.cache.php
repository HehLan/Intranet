<?php
/* Smarty version 3.1.29, created on 2016-03-05 13:52:46
  from "E:\wamp\www\Intranet\view\templates\admin\inscriptions.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dad69e7addf9_42279410',
  'file_dependency' => 
  array (
    '036693a77a627ec0ce60b22f828794443f8d27b3' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\inscriptions.tpl',
      1 => 1456514675,
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
function content_56dad69e7addf9_42279410 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1507156dad69e5d9182_25589797';
?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/getXhr.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(document).ready(function() {

                $( ".submitInscriptionEquipesTournoiAdmin" ).click(function() {
                    var id=$( this ).attr('id');
                    var donnee='id_tournoi='+id;
                    var i=0;
                    $( "#ListeInscrit"+id+" input[type=checkbox]:checked").each(function(){

                        donnee+="&inscrit["+i+"]="+$(this).val();
                        i++;
                    });

                    $.ajax({ 
                        type: "POST", 
                        url: "admin/insertInscritEquipe.php",
                        data: donnee,
                        success : function(contenu,etat){ 
                            alert(contenu);

                        }
                    });
                });

                $( ".submitInscriptionJTAdmin" ).click(function() {
                    var id=$( this ).attr('id');
                    var donnee='id_tournoi='+id;
                    var pseudoJeux='';
                    var i=0;
                    $( "#ListeInscritJT"+id+" input[type=checkbox]:checked").each(function(){
                        //pseudoJeux+="&pseudoJeux["+i+"]="+$( "#Joueur"+id+$(this).val() ).val();
                        donnee+="&inscrit["+i+"]="+$(this).val();
                        i++;
                    });

                    $.ajax({ 
                        type: "POST", 
                        url: "admin/insertInscritJoueur.php",
                        data: donnee,
                        success : function(contenu,etat){ 
                            alert(contenu);

                        }
                    });
                });

            });
        <?php echo '</script'; ?>
>  
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
	
	<div id="container">
            <div id="contenu">
                <div id="InscriptionDesJoueursEquipesAuxTournois" >
                    <!-- tournois avec equipes -->
                    <?php
$_from = $_smarty_tpl->tpl_vars['tab']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ligne_0_saved_item = isset($_smarty_tpl->tpl_vars['ligne']) ? $_smarty_tpl->tpl_vars['ligne'] : false;
$_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ligne']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->_loop = true;
$__foreach_ligne_0_saved_local_item = $_smarty_tpl->tpl_vars['ligne'];
?>
                        <div class='ListePourInscrireTournoi'>
                            <h6><?php echo $_smarty_tpl->tpl_vars['ligne']->value[2];?>
</h6>
                            <div id="ListeInscrit<?php echo $_smarty_tpl->tpl_vars['ligne']->value[1];?>
">
                                <?php
$_from = $_smarty_tpl->tpl_vars['donnees']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_1_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_1_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['id_tournoi'+$_smarty_tpl->tpl_vars['ligne']->value[1]] == $_smarty_tpl->tpl_vars['ligne']->value[1]) {?>
                                        <label><input type='checkbox' checked value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_equipes'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
</label><br>
                                    <?php } else { ?>
                                        <label><input type='checkbox' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_equipes'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
</label><br>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_local_item;
}
if ($__foreach_row_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_item;
}
?>
                            </div>
                            <input type="button" class="submitInscriptionEquipesTournoiAdmin" id="<?php echo $_smarty_tpl->tpl_vars['ligne']->value[1];?>
" value="Valider les inscriptions">
                        </div>                        
                    <?php
$_smarty_tpl->tpl_vars['ligne'] = $__foreach_ligne_0_saved_local_item;
}
if ($__foreach_ligne_0_saved_item) {
$_smarty_tpl->tpl_vars['ligne'] = $__foreach_ligne_0_saved_item;
}
?>             
                    <!-- tournois individuels -->
                    <?php
$_from = $_smarty_tpl->tpl_vars['tabJT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ligne_2_saved_item = isset($_smarty_tpl->tpl_vars['ligne']) ? $_smarty_tpl->tpl_vars['ligne'] : false;
$_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ligne']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->_loop = true;
$__foreach_ligne_2_saved_local_item = $_smarty_tpl->tpl_vars['ligne'];
?>
                        <div class='ListePourInscrireTournoi'>
                            <h6><?php echo $_smarty_tpl->tpl_vars['ligne']->value[2];?>
</h6>
                            <div id="ListeInscritJT<?php echo $_smarty_tpl->tpl_vars['ligne']->value[1];?>
">
                                <?php
$_from = $_smarty_tpl->tpl_vars['donneesJT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_3_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_3_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['id_tournoi'+$_smarty_tpl->tpl_vars['ligne']->value[1]] == $_smarty_tpl->tpl_vars['ligne']->value[1]) {?>
                                        <label><input type="checkbox" checked value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_joueur'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['pseudo'];?>
</label>
                                    <?php } else { ?>
                                        <label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_joueur'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['pseudo'];?>
</label>                                    
                                    <?php }?>
                                    <input type="text" id="Joueur<?php echo $_smarty_tpl->tpl_vars['ligne']->value[1]+$_smarty_tpl->tpl_vars['row']->value['id_joueur'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['pseudoJeux'+$_smarty_tpl->tpl_vars['ligne']->value[1]];?>
">
                                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_3_saved_local_item;
}
if ($__foreach_row_3_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_3_saved_item;
}
?>
                            </div>
                            <input type="button" class="submitInscriptionJTAdmin" id="<?php echo $_smarty_tpl->tpl_vars['ligne']->value[1];?>
" value="Valider les inscriptions">
                        </div>                        
                    <?php
$_smarty_tpl->tpl_vars['ligne'] = $__foreach_ligne_2_saved_local_item;
}
if ($__foreach_ligne_2_saved_item) {
$_smarty_tpl->tpl_vars['ligne'] = $__foreach_ligne_2_saved_item;
}
?>
                    <br>    
                    <div id="test"></div>
                </div>
            </div>
        </div>	
	<!-- gap to have the footer in the bottom of the window -->
	<div style="height: 1000px;"></div>
    
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>
</html><?php }
}
