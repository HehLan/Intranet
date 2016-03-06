<?php
/* Smarty version 3.1.29, created on 2016-03-06 17:02:40
  from "E:\wamp\www\Intranet\view\templates\admin\emplacements.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc54a0172265_90859689',
  'file_dependency' => 
  array (
    '91d0757a6c5105ce0aa67e66d2f02259cd6ba671' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\emplacements.tpl',
      1 => 1457280146,
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
function content_56dc54a0172265_90859689 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3235556dc549fe53069_05484539';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/emplacements.css" >
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/js/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/js/getXhr.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function()
            {
            //colorie la case pour le pseudo
                $('#SelectPseudo').change(function()
                {
                $("#dialogInfo_equipe").css(display :"none");
                $('.place').css(background : "none");
                $('#'+$('#SelectPseudo').val()).css(background : "#9ba0ee");
                valeur = $('#SelectPseudo').val();
                    $.ajax(
                    { 
                    type: "POST", 
                    url: "admin/info_joueur.php",
                    data: "id_emplacement="+valeur,
                    success : function(contenu,etat)
                        { 
                        $("#dialogInfo_joueur").php(contenu);
                        }
                    });
               });
             //colorie la place pour le select emplacement
                $('#SelectEmplacement').change(function()
                {
                    $('.place').css(background : "none");
                  $('#'+$('#SelectEmplacement').val()).css(background : "green");
               });
            // recupere id_equipes pour l'envoi en AJAX
                $('#SelectEquipe').change(function()
                {
                    $("#dialogInfo_joueur").css(display :"none");
                    $('.place').css(background : "none");
                    valeur=$('#SelectEquipe').val();
                    $.ajax(
                        { 
                        type: "POST", 
                        url: "admin/color_equipe.php",
                        data: "id_equipes="+valeur,
                        success : function(contenu,etat)
                                { 
                                $( "#dialogEquipe_Emplacement" ).php(contenu);
                                $( "#dialogInfo_equipe" ).php(contenu);
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
            <div style="position: relative;
                float:right; 
                height: 110%;
                width: 80%;
                font-size:10px;
                border-width: 1px;
                border-style: solid;">
                <img class="photo" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/img/plan.jpg" width="100%" height="100%" >
                <?php
$_from = $_smarty_tpl->tpl_vars['locations']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_location_0_saved_item = isset($_smarty_tpl->tpl_vars['location']) ? $_smarty_tpl->tpl_vars['location'] : false;
$_smarty_tpl->tpl_vars['location'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['location']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->_loop = true;
$__foreach_location_0_saved_local_item = $_smarty_tpl->tpl_vars['location'];
?>
                    <div class="place" id="<?php echo $_smarty_tpl->tpl_vars['location']->value['id_emplacement'];?>
"
                           style="
                              position:absolute;
                              top:<?php echo $_smarty_tpl->tpl_vars['location']->value['top'];?>
%;
                              left:<?php echo $_smarty_tpl->tpl_vars['location']->value['xy_left'];?>
%;
                              width:<?php echo $_smarty_tpl->tpl_vars['location']->value['width'];?>
%;
                              height:<?php echo $_smarty_tpl->tpl_vars['location']->value['height'];?>
%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      <?php echo $_smarty_tpl->tpl_vars['location']->value['numero'];?>
                          
                    </div>
                <?php
$_smarty_tpl->tpl_vars['location'] = $__foreach_location_0_saved_local_item;
}
if ($__foreach_location_0_saved_item) {
$_smarty_tpl->tpl_vars['location'] = $__foreach_location_0_saved_item;
}
?>                        
                <?php
$_from = $_smarty_tpl->tpl_vars['locations_1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_location_1_1_saved_item = isset($_smarty_tpl->tpl_vars['location_1']) ? $_smarty_tpl->tpl_vars['location_1'] : false;
$_smarty_tpl->tpl_vars['location_1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['location_1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['location_1']->value) {
$_smarty_tpl->tpl_vars['location_1']->_loop = true;
$__foreach_location_1_1_saved_local_item = $_smarty_tpl->tpl_vars['location_1'];
?>
                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:<?php echo $_smarty_tpl->tpl_vars['location_1']->value['top'];?>
%;
                         left:<?php echo $_smarty_tpl->tpl_vars['location_1']->value['xy_left'];?>
%;
                         width:<?php echo $_smarty_tpl->tpl_vars['location_1']->value['width'];?>
%;
                         height:<?php echo $_smarty_tpl->tpl_vars['location_1']->value['height'];?>
%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u><?php echo $_smarty_tpl->tpl_vars['location_1']->value['pseudo'];?>
<br>
                            <u>Equipe :</u>
                                <?php echo implode(', ',$_smarty_tpl->tpl_vars['teams']->value);?>

                        </span></a>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['location_1'] = $__foreach_location_1_1_saved_local_item;
}
if ($__foreach_location_1_1_saved_item) {
$_smarty_tpl->tpl_vars['location_1'] = $__foreach_location_1_1_saved_item;
}
?>                        
                <div id="cadre"</div>
                <!-- VISIONNER LA PLACE DU JOUEUR -->    
                <b><u><center>Consulter la place :</center></u></b></b>
                <br><br>
                <!-- PSEUDO -->
                Pseudo :
                <select class="SelectPseudo" name="SelectPseudo" id="SelectPseudo">
                    <option value="" selected ></option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['joueurs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_joueur_2_saved_item = isset($_smarty_tpl->tpl_vars['joueur']) ? $_smarty_tpl->tpl_vars['joueur'] : false;
$_smarty_tpl->tpl_vars['joueur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['joueur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joueur']->value) {
$_smarty_tpl->tpl_vars['joueur']->_loop = true;
$__foreach_joueur_2_saved_local_item = $_smarty_tpl->tpl_vars['joueur'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['id_emplacement'];?>
"><?php echo $_smarty_tpl->tpl_vars['joueur']->value['pseudo'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_2_saved_local_item;
}
if ($__foreach_joueur_2_saved_item) {
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_2_saved_item;
}
?>
                </select>
                <br>
                <br>
                <!-- Equipe -->
                Equipe :
                <select id="SelectEquipe">
                    <option value="" selected ></option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['equipes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_equipe_3_saved_item = isset($_smarty_tpl->tpl_vars['equipe']) ? $_smarty_tpl->tpl_vars['equipe'] : false;
$_smarty_tpl->tpl_vars['equipe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['equipe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['equipe']->value) {
$_smarty_tpl->tpl_vars['equipe']->_loop = true;
$__foreach_equipe_3_saved_local_item = $_smarty_tpl->tpl_vars['equipe'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['equipes']->value['id_equipes'];?>
"><?php echo $_smarty_tpl->tpl_vars['equipes']->value['nom'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['equipe'] = $__foreach_equipe_3_saved_local_item;
}
if ($__foreach_equipe_3_saved_item) {
$_smarty_tpl->tpl_vars['equipe'] = $__foreach_equipe_3_saved_item;
}
?>           
                </select>
                <div id="dialogEquipe_Emplacement"></div>
                <br>
                <br>
                <!-- AJOUTER PLACE AU JOUEUR -->                                                                                       
                <form method="post" action="place.php">
                    <b><u><center>Associer la place :</center></u></b></b>
                    <br><br> 
                    Emplacement :
                    <select name="SelectEmplacement" id="SelectEmplacement">	
                        <?php
$_from = $_smarty_tpl->tpl_vars['emplacements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_emplacement_4_saved_item = isset($_smarty_tpl->tpl_vars['emplacement']) ? $_smarty_tpl->tpl_vars['emplacement'] : false;
$_smarty_tpl->tpl_vars['emplacement'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['emplacement']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['emplacement']->value) {
$_smarty_tpl->tpl_vars['emplacement']->_loop = true;
$__foreach_emplacement_4_saved_local_item = $_smarty_tpl->tpl_vars['emplacement'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['emplacement']->value['id_emplacement'];?>
"><?php echo $_smarty_tpl->tpl_vars['emplacement']->value['numero'];?>
</option>"; 
                        <?php
$_smarty_tpl->tpl_vars['emplacement'] = $__foreach_emplacement_4_saved_local_item;
}
if ($__foreach_emplacement_4_saved_item) {
$_smarty_tpl->tpl_vars['emplacement'] = $__foreach_emplacement_4_saved_item;
}
?>	
                    </select> 
                    <br><br>
                    Pseudo :
                    <select name="SelectPseudo" id="SelectPseudo">
                        <option value="" selected ></option>
                        <?php
$_from = $_smarty_tpl->tpl_vars['joueurs_autre']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_joueur_autre_5_saved_item = isset($_smarty_tpl->tpl_vars['joueur_autre']) ? $_smarty_tpl->tpl_vars['joueur_autre'] : false;
$_smarty_tpl->tpl_vars['joueur_autre'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['joueur_autre']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joueur_autre']->value) {
$_smarty_tpl->tpl_vars['joueur_autre']->_loop = true;
$__foreach_joueur_autre_5_saved_local_item = $_smarty_tpl->tpl_vars['joueur_autre'];
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['joueur_autre']->value['pseudo'];?>
"><?php echo $_smarty_tpl->tpl_vars['joueur_autre']->value["pseudo"];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['joueur_autre'] = $__foreach_joueur_autre_5_saved_local_item;
}
if ($__foreach_joueur_autre_5_saved_item) {
$_smarty_tpl->tpl_vars['joueur_autre'] = $__foreach_joueur_autre_5_saved_item;
}
?>
                    </select>
                    <br><br>
                    <p><center><input class="submit" type="submit" value="Valider" /></center></p>
                </form>
                <div id="dialogInfo_joueur"></div>
                <div id="dialogInfo_equipe"></div>
            </div>
	</div>	
	
        <!-- gap to have the footer in the bottom of the window -->
        <div style="height: 450px;"></div>
        
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
