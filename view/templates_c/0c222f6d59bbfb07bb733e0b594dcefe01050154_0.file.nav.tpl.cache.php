<?php
/* Smarty version 3.1.29, created on 2016-03-07 10:37:07
  from "C:\xampp\htdocs\Intranet\view\templates\default\nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dd4bc3d8f9f8_35533368',
  'file_dependency' => 
  array (
    '0c222f6d59bbfb07bb733e0b594dcefe01050154' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\view\\templates\\default\\nav.tpl',
      1 => 1457342619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56dd4bc3d8f9f8_35533368 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3211856dd4bc3d7f600_40154091';
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
                    <li><a href="tournois.php?id=<?php echo $_smarty_tpl->tpl_vars['navTournois']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id_tournoi'];?>
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
                    <li><a href="profile.php">Mon profil</a></li>
                        <?php if ($_SESSION['level'] == 1 || $_SESSION['level'] == 2) {?>
                        <li><a href="admin/index.php">Admin</a></li>
                        <?php }?>
                    <?php }?>
            </ul>
        </div>
    </div>			
</nav>
<?php }
}
