<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:51:26
  from "E:\wamp\www\Intranet\view\templates\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916ee67a852_15411115',
  'file_dependency' => 
  array (
    '38b87550390b4498246829deafc9d57640d6d43a' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\header.tpl',
      1 => 1458894385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570916ee67a852_15411115 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '27284570916ee5de435_12347052';
?>

<header id="header" class="row" >
    <div id="logo" class="col-lg-7 col-sm-7 col-xs-12" >
        <a href="index.php">
            <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/img/logos/logo-hehlan.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-5 col-sm-5 col-xs-12" >
        <?php if ($_smarty_tpl->tpl_vars['con']->value) {?>
            <p id="welcome">Bienvenue <span id="user-login"><?php echo $_SESSION['login'];?>
</span> !</p>
            <div id="userbar">
                <a href="profile.php"><img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/img/userbar/profile.png" alt="Votre profil" data-toggle="tooltip" data-placement="bottom" title="Votre profil"></a>
                <a href="#" id="notifBlock"
                   data-container="body" data-toggle="popover" data-placement="bottom" title="Vos notifications" notif-lastUpdate="0" data-content='<div id="notifPane">Aucune notification</div>'>
                    <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/img/userbar/notif_off.png" alt="Vos Notifications" data-toggle="tooltip" data-placement="bottom" title="Vos notifications">
                </a>
                <a href="#" id="downloadBlock"
                   data-container="body" data-toggle="popover" data-placement="bottom" title="Téléchargements" data-content='<div id="downloadPane" class="list-group">Aucun téléchargement</div>'>
                     <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/img/userbar/download.png" alt="Téléchargements" data-toggle="tooltip" data-placement="bottom" title="Téléchargements"> 
                </a>
                <a href="#" class=""
                   data-container="body" data-toggle="popover" data-placement="bottom" title="Votre adresse IP est" data-content="<?php echo $_SERVER['REMOTE_ADDR'];?>
">
                    <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/img/userbar/ip.png" alt="Votre adresse IP" data-toggle="tooltip" data-placement="bottom" title="Votre adresse IP">
                </a>
                <a href="commande.php"><img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/img/userbar/command.png" alt="Passer une commande" data-toggle="tooltip" data-placement="bottom" title="Passer une commande"></a>
                <a href="common/logout.php"><img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/img/userbar/logout.png" alt="Se déconnecter" data-toggle="tooltip" data-placement="bottom" title="Se déconnecter"></a>
            </div>
        <?php } else { ?>
            <p>Bienvenue, <a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/modules/login.php">se connecter</a></p>
        <?php }?>
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
</header>
<?php }
}
