<?php
/* Smarty version 3.1.29, created on 2016-03-06 17:02:38
  from "E:\wamp\www\Intranet\view\templates\admin\joueurs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc549e235725_23862264',
  'file_dependency' => 
  array (
    'e4973873623c1b066a615e2ff41588cbe2e5fcfa' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\joueurs.tpl',
      1 => 1457279488,
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
function content_56dc549e235725_23862264 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2816656dc549e17ea27_08323566';
?>

<!DOCTYPE html>
<html>
    <head> 
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/joueurs.css" >
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
>
            $(document).ready(function() {

                $( ".joueurAdmin" ).click(function() {

                    $(".joueurAdmin").css(background: "none");
                    $( this ).css(background: "rgba(0,0,255,0.2)");
                    $.ajax({ 
                        type: "POST", 
                        url: "admin/listeDesTournoisDuJoueur.php",
                        data: "id_joueur="+$(this).attr("value"),
                        success : function(contenu,etat){ 
                            $('#listeTournoisInscritDuJoueur').php(contenu);
                        }
                    });
                    $.ajax({ 
                        type: "POST", 
                        url: "admin/equipesDuJoueur.php",
                        data: "id_joueur="+$(this).attr("value"),
                        success : function(contenu,etat){ 
                            $('#EquipesDuJoueurAdmin').php(contenu);
                        }
                    });

                });

                $( "#infoEquipeAdmin" ).dialog({
                    autoOpen: false,
                    title:"information",
                    height: 300,
                    width: 350,
                    modal: true,
                    close: function() {

                    }
                });

                $("div").delegate("#submitChangementEquipeDuJoueur", "click", function(){
                    var AuMoinsUneEquipe=false;
                    var i=0;
                    var id ='id_joueur='+$("#idJoueurAdminForEquipe").attr("value");
                    $( ".chkbxEquipeDuJoueur:checked" ).each(function(){
                        id +='&inscrit['+i+']='+$(this).attr("value");
                        i++;
                        AuMoinsUneEquipe=true;
                    });
                    if ($( "#SelectAjoutJoueurEquipe" ).val()) {
                        id +='&inscrit['+i+']='+$( "#SelectAjoutJoueurEquipe" ).val();
                    }else if (!AuMoinsUneEquipe){
                        id +='&deleteAll=1';
                    }
                    $.ajax({ 
                        type: "POST", 
                        url: "admin/insertEquipeDuJoueur.php",
                        data: id,
                        success : function(contenu,etat){ 
                            $( "#infoEquipeAdmin" ).php(contenu);
                            $( "#infoEquipeAdmin" ).dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); location.reload(); } } ] });
                            $( "#infoEquipeAdmin" ).dialog( "open" );
                        }
                    });

                });


                $("div").delegate("#submitChgtTournoijoueurAdmin", "click", function(){
                    var erreurSurvenue=false;
                    var i=0;

                    var id ='id_joueur='+$("#idJoueurAdmin").attr("value");
                    $( ".chkbxJoueurTournoi:checked" ).each(function(){
                        id +='&inscrit['+i+'][1]='+$(this).attr("value");
                        id +='&inscrit['+i+'][2]='+$("#txtbxJoueurTournoi"+$(this).attr("value")).val();
                        i++;

                    });

                    $.ajax({ 
                        type: "POST", 
                        url: "admin/insertTournoiJoueur.php",
                        data: id,
                        success : function(contenu,etat){ 
                            $( "#infoEquipeAdmin" ).php(contenu);
                            $( "#infoEquipeAdmin" ).dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); location.reload(); } } ] });
                            $( "#infoEquipeAdmin" ).dialog( "open" );
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
 

        <div id="container" class="container-fluid">
            <div id="contenu">
                <div id="ListejoueurAdmin">
                    <fieldset>
                        <legend>Liste des joueurs</legend>
                        <table class="listeJoueurs">
                            <thead>
                                <tr>
                                    <th>Les Joueurs</th>
                                    <th>Tournois</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div id="listejoueurAdmin" >
                                            <?php
$_from = $_smarty_tpl->tpl_vars['joueurs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_joueur_0_saved_item = isset($_smarty_tpl->tpl_vars['joueur']) ? $_smarty_tpl->tpl_vars['joueur'] : false;
$_smarty_tpl->tpl_vars['joueur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['joueur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joueur']->value) {
$_smarty_tpl->tpl_vars['joueur']->_loop = true;
$__foreach_joueur_0_saved_local_item = $_smarty_tpl->tpl_vars['joueur'];
?>
                                               <h6 class="joueurAdmin" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['id_joueur'];?>
"><?php echo $_smarty_tpl->tpl_vars['joueur']->value['pseudo'];?>
</h6> 
                                            <?php
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_0_saved_local_item;
}
if ($__foreach_joueur_0_saved_item) {
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_0_saved_item;
}
?>
                                        </div>
                                    </td>
                                    <td>
                                        <div id="listeTournoisInscritDuJoueur">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2" style="font-size: 16px; font-weight: bold; color: #fff;">
                                        Equipes du joueur
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2">
                                        <div id="EquipesDuJoueurAdmin" style="height:150px;">

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>    
                    </fieldset>
                    <div id="infoEquipeAdmin" style="display: none"></div>
                </div>
            </div>	
        </div> 

        <!-- gap to have the footer in the bottom of the window -->
        <div style="height: 150px;">

        </div>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
 
    </body>
</html><?php }
}
