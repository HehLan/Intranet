<?php
/* Smarty version 3.1.29, created on 2016-03-11 14:52:41
  from "C:\xampp\htdocs\Intranet\view\templates\admin\nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e2cda984aa36_55012179',
  'file_dependency' => 
  array (
    'af5214c9739fb386542284bef5bc41d6bb25cb2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\view\\templates\\admin\\nav.tpl',
      1 => 1457190545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e2cda984aa36_55012179 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2544756e2cda98473e2_52945370';
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
                <li><a href="../index.php">Back</a></li>
                <li><a href="index.php">Overview</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="joueurs.php">Joueurs</a></li>
                <li><a href="emplacements.php">Emplacements</a></li>
                <li><a href="equipes.php">Equipes</a></li>
                <li><a href="inscriptions.php">Inscriptions</a></li>
                <li><a href="tournois.php">Tournois</a></li>
            </ul>
        </div>
    </div>			
</nav>
<?php }
}
