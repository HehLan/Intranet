<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:51:03
  from "E:\wamp\www\Intranet\view\templates\admin\tournois.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916d78abd21_00259446',
  'file_dependency' => 
  array (
    '727f3fabeb31a4f5fd30a273894696bd8a65bb85' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\tournois.tpl',
      1 => 1458872131,
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
function content_570916d78abd21_00259446 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '24226570916d76d70b6_46085898';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/tournois.css" >
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/js/tournois.js"><?php echo '</script'; ?>
>
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
	
        <div class="container" id="container">
            <div class="row" id="contenu">
                    
                <div id="bloc_tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <?php
$_from = $_smarty_tpl->tpl_vars['tournois']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_playerLoop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] : false;
$__foreach_playerLoop_0_saved_item = isset($_smarty_tpl->tpl_vars['tournoi']) ? $_smarty_tpl->tpl_vars['tournoi'] : false;
$_smarty_tpl->tpl_vars['tournoi'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] = new Smarty_Variable(array());
$__foreach_playerLoop_0_first = true;
$_smarty_tpl->tpl_vars['tournoi']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tournoi']->value) {
$_smarty_tpl->tpl_vars['tournoi']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first'] = $__foreach_playerLoop_0_first;
$__foreach_playerLoop_0_first = false;
$__foreach_playerLoop_0_saved_local_item = $_smarty_tpl->tpl_vars['tournoi'];
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first'] : null)) {?>
                                <li role="presentation" class="active"><a href="#tab-<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
" aria-controls="tab-<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>
</a></li>
                            <?php } else { ?>                            
                                <li role="presentation"><a href="#tab-<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
" aria-controls="tab-<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>
</a></li>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['tournoi'] = $__foreach_playerLoop_0_saved_local_item;
}
if ($__foreach_playerLoop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] = $__foreach_playerLoop_0_saved;
}
if ($__foreach_playerLoop_0_saved_item) {
$_smarty_tpl->tpl_vars['tournoi'] = $__foreach_playerLoop_0_saved_item;
}
?>
                    </ul>
                </div>
                
                <div class="tab-content">
                    <?php
$_from = $_smarty_tpl->tpl_vars['tournois']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_playerLoop_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] : false;
$__foreach_playerLoop_1_saved_item = isset($_smarty_tpl->tpl_vars['tournoi']) ? $_smarty_tpl->tpl_vars['tournoi'] : false;
$_smarty_tpl->tpl_vars['tournoi'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] = new Smarty_Variable(array());
$__foreach_playerLoop_1_first = true;
$_smarty_tpl->tpl_vars['tournoi']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tournoi']->value) {
$_smarty_tpl->tpl_vars['tournoi']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first'] = $__foreach_playerLoop_1_first;
$__foreach_playerLoop_1_first = false;
$__foreach_playerLoop_1_saved_local_item = $_smarty_tpl->tpl_vars['tournoi'];
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first'] : null)) {?>
                            <div role="tabpanel" class="tab-pane active" id="tab-<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
">     
                        <?php } else { ?>                            
                            <div role="tabpanel" class="tab-pane" id="tab-<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
">
                        <?php }?>
                                <div class="row my-tab-content">
                                    <div class="col-lg-6">
                                        <h3>Informations</h3>
                                        <ul class="list-unstyled">
                                            <li>id: <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
</li>
                                            <li>Participants: <?php echo $_smarty_tpl->tpl_vars['participants']->value['nbr'];?>
</li>
                                            <li>Joueurs par team: <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['joueurParTeam'];?>
</li>
                                            <li>Teams par match: <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['teamParMatch'];?>
</li>
                                            <li>Nombre de manches: <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nombreManche'];?>
</li>
                                            <li>Heure des qualifications: <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['heure_groupe_start'];?>
</li>
                                            <li>Heure des finales: <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['heure_finale_start'];?>
</li>
                                            <li>Durée intermatch: <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['duree_inter_match'];?>
</li>
                                        </ul>
                                    </div>                                
                                    <div class="col-lg-6">
                                                
                                        <!-- MANAGE POOLS -->
                                        <h3>Qualifications</h3>
                                        <button class="btn btn-primary" onclick="document.location.href = 'scores.php?id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
'">Gestion des pools brackets</button>
                                        <button class="btn btn-primary" onclick="document.location.href = 'groupes.php?id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
'">Gestion des groupes</button>
                                        <?php if ($_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'] != 3) {?>
                                            <button class="btn btn-primary" onclick="document.location.href = 'scores-old.php?id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
'">Gestion des pools (old)</button>
                                        <?php }?>
                                        
                                        <!-- MANAGE FINALS -->
                                        <h3>Finales</h3>
                                        <?php if ($_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'] != 3) {?>
                                            <button class="btn btn-primary" onclick="document.location.href = 'finales.php?id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
'">Gestion des finales brackets</button>
                                        <?php } else { ?>
                                            <button style="background-color: red" class="btn btn-primary" onclick="document.location.href = 'finales.php?id_tournoi=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
'">Gestion des finales brackets</button>
                                        <?php }?>
                                        
                                        
                                        <!-- MANAGE POOLS -->                                               
                                        
                                            
                                        
                                            
                                            
                                            
                                        


                                        <!-- MANAGE FINALS -->
                                        
                                            
                                                
                                            
                                                
                                            
                                        
                                            
                                            
                                        
                                        
                                            
                                                
                                            
                                                
                                            
                                        
                                            
                                            
                                        
                                        
       
                                        <!-- MANAGE LOOSER BRACKETS -->
                                        
                                        
                                        
                                                                          
                                        <!-- ERASE TOURNOI -->
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                    <?php
$_smarty_tpl->tpl_vars['tournoi'] = $__foreach_playerLoop_1_saved_local_item;
}
if ($__foreach_playerLoop_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] = $__foreach_playerLoop_1_saved;
}
if ($__foreach_playerLoop_1_saved_item) {
$_smarty_tpl->tpl_vars['tournoi'] = $__foreach_playerLoop_1_saved_item;
}
?>                   
                </div>
            </div>
        </div>

        
        


        <div id="shadowing"></div>

        <div id="div_popup" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="groupes.php">
                <input type="hidden" name="id_tournoi" id="input_id_tournoi" value="0" />
                <input type="hidden" name="looser" id="input_looser" value="0" /><br>
                Nombre de participants : <span id="nbrpart"></span><br>
                Nombre de groupes : <input type="text" name="nbrgroupes" value="0" size="4"/><br>
                <input type="submit" value="Créer" /><br>
            </form>
        </div>
        <div id="div_popup2" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="finales.php">
                <input type="hidden" name="id_tournoi" id="input2_id_tournoi" value="0" />
                <input type="hidden" name="looser" id="input2_looser" value="0" /><br>
                Nombre de participants : <span id="nbrpart2"></span><br>
                Petite finale ? : <input type="checkbox" name="petite_finale" value="1"/><br>
                Nombre de qualifiés : <select name="qualifs"><option>4<option>6<option>8<option>12<option>16<option>24<option>32<option>48<option>64<option>96<option>128</select><br>
                <input type="submit" value="Créer" /><br>
            </form>
        </div>	
        <div id="div_popup3" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="finales.php">
                <input type="hidden" name="id_tournoi" id="input3_id_tournoi" value="0" />
                <input type="hidden" name="looser" id="input3_looser" value="0" /><br>
                Nombre de participants : <span id="nbrpart3"></span><br>
                Petite finale ? : <input type="checkbox" name="petite_finale" value="1"/><br>
                Nombre de groupes : <select name="nbrgroupes"><option>1<option>2<option>4<option>8<option>16</select><br>
                Taille des groupes : <input type="text" name="tgroupes" value="0"  size="4"/><br>
                <input type="submit" value="Créer" /><br>
            </form>
        </div>	
        
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>
</html><?php }
}
