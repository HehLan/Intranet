<?php
/* Smarty version 3.1.29, created on 2016-03-25 13:11:35
  from "E:\wamp\www\Intranet\view\templates\admin\groupes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f52af7f091e1_85989839',
  'file_dependency' => 
  array (
    'c294d972d2d8936d449f7086c01b2190a5ec940c' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\groupes.tpl',
      1 => 1458867127,
      2 => 'file',
    ),
    '0e581425c25b7e4430f823fafb32398a1a42b35f' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\meta.tpl',
      1 => 1458894385,
      2 => 'file',
    ),
    '671975c94dd1e7dba0ca368cae0b42da0a3615ec' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\header.tpl',
      1 => 1458866468,
      2 => 'file',
    ),
    'e98396841417fe328ce0f332a73c8fbcf7a31642' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\nav.tpl',
      1 => 1458745478,
      2 => 'file',
    ),
    'f9508bf021c4a0cb4e00179ef41a44bb7a637b1c' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\footer.tpl',
      1 => 1458869456,
      2 => 'file',
    ),
    'c655472bbc5c4805b6092b89f8fc7aff04a6f725' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\assets\\js\\groups.js.tpl',
      1 => 1458900482,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56f52af7f091e1_85989839 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="fr">
    <head>    
        
<title>HEHLan</title>
<meta charset="utf-8" />

<meta http-equiv="Content-Type" charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
<meta http-equiv="content-language" content="fr" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="expires" content="never" />
<meta http-equiv="window-target" content="_top" />

<meta name="viewport" content="width=device-width, initial-scale="1" />
<meta name="robots" content="none">
<meta name="rating" content="general" />	
<meta name="author" lang="fr" content="HeHLan" />	
<meta name="category" content="Gaming" />
<meta name="distribution" content="global" />
<meta name="generator" content="Notepad++" />
<meta name="publisher" content="HeHLan" />	
<meta name="revisit-after" content="0 days" />
<meta name="reply-to" content="info@hehlan.be" />
<meta name="location" content="Mons, BELGIUM" />
<meta name="geo.region" content="BE-WHT" />
<meta name="geo.placename" content="Mons, Hainaut" />

<link rel="shortcut icon" href="/Intranet/view/templates/admin/assets/img/logos/logo-lan.ico" />
<link rel="icon" href="/Intranet/view/templates/admin/assets/img/logos/logo-lan.ico" />


<!-- CSS STYLESHEETS BASE -->
<link rel="stylesheet" type="text/css" href="/Intranet/lib/jQuery/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/Bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/FontAwesome/css/font-awesome.min.css" />

<!-- CSS STYLESHEETS LAYERS -->
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/header.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/nav.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/footer.css" />



<!-- JAVASCRIPT LIBRARIES -->
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="/Intranet/lib/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery-ui.js"></script>
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery.media.js"></script>
<script type="text/javascript" src="/Intranet/lib/Less/less.js"></script>



<script type="text/javascript" src="/Intranet/src/js/getXhr.js"></script>
<script type="text/javascript" src="/Intranet/src/js/main.js"></script>
<script type="text/javascript" src="/Intranet/src/js/menu.js"></script>




<!-- SCRIPTS BOOTSTRAPS -->		
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/groupes.css" >
    </head>
    <body>
        
<header id="header" class="row" >
    <div id="logo" class="col-lg-9 col-sm-9 col-xs-12" >
        <a href="../index.php">
            <img src="/Intranet/view/templates/admin/assets/img/logos/logo-hehlan.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-3 col-sm-3 col-xs-12" >
                    <p>Bienvenue admin, <a href="../common/logout.php">se déconnecter</a></p>
                <p>IP: ::1.</p>
               
    </div>	     
</header>
        
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
                <li><a href="../index.php">Site</a></li>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="joueurs.php">Joueurs</a></li>                
                <li><a href="equipes.php">Equipes</a></li>
                <li><a href="emplacements.php">Emplacements</a></li>
                <li><a href="inscriptions.php">Inscriptions</a></li>
                <li><a href="tournois.php">Tournois</a></li> 
                <li><a href="registrations.php">Enregistrements</a></li>
                <li><a href="commandehandler.php">Commandes</a></li>
                <li><a href="downloads.php">Téléchargements</a></li>
            </ul>
        </div>
    </div>			
</nav>
         

	<div id="container" class="container">
            <div id="contenu" class="row">
                <h1>Groupes COD4</h1>
                   
                <div class="col-lg-6">
                    <form method="POST" action="modules/inscrire_groupes.php">
                        <table>
                            <input type="hidden" name="id_tournoi" value="2" />
                            <tr>
                                <th>Participants</th>
                                                                    <th>Group 3</th>
                                                                    <th>Groupe 1</th>
                                                                    <th>Groupe 2</th>
                                                                    <th>Groupe 4</th>
                                                            </tr>
                                                            <tr>
                                    <td>Belgian Rape Squad</td>
                                                                            <td>
                                            <input type="radio" name="parti_23" value="81" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_23" value="75" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_23" value="76" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_23" value="82" />
                                        </td>
                                                                    </tr>
                                                            <tr>
                                    <td>BIT1</td>
                                                                            <td>
                                            <input type="radio" name="parti_56" value="81" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_56" value="75" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_56" value="76" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_56" value="82" />
                                        </td>
                                                                    </tr>
                                                            <tr>
                                    <td>BIT2</td>
                                                                            <td>
                                            <input type="radio" name="parti_57" value="81" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_57" value="75" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_57" value="76" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_57" value="82" />
                                        </td>
                                                                    </tr>
                                                            <tr>
                                    <td>Don't feed the ginger</td>
                                                                            <td>
                                            <input type="radio" name="parti_24" value="81" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_24" value="75" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_24" value="76" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_24" value="82" />
                                        </td>
                                                                    </tr>
                                                            <tr>
                                    <td>Go Nerf Karma</td>
                                                                            <td>
                                            <input type="radio" name="parti_50" value="81" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_50" value="75" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_50" value="76" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_50" value="82" />
                                        </td>
                                                                    </tr>
                                                            <tr>
                                    <td>NIP TA MERE</td>
                                                                            <td>
                                            <input type="radio" name="parti_49" value="81" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_49" value="75" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_49" value="76" />
                                        </td>
                                                                            <td>
                                            <input type="radio" name="parti_49" value="82" />
                                        </td>
                                                                    </tr>
                                                        <tr>
                                <td colspan="5">
                                    <input type="submit" value="Enregistrer" />
                                </td>
                            </tr>
                        </table>	
                    </form>
                </div>
                <div class="col-lg-6">
                    <input id="group-name" type="text" />
                    <button id="button-add-group" class="btn btn-primary">Add group</button>
                </div>
   
            </div>
	</div>

        
<footer id="footer" class="row">
    <div id="copyright" class="col-lg-3 col-sm-12 col-xs-12">
        <p>HEHLan All Rights Reserved - Copyright <i class="fa fa-copyright"></i> 2016</p>
    </div>
    <div id="ceheh" class="col-lg-offset-2 col-lg-2 col-sm-12 col-xs-12">
        <img src="/Intranet/view/templates/admin/assets/img/logos/logo-ceheh.png" alt="CEHECOFH" />
    </div>
    <div id="campus_technique" class="col-lg-offset-3 col-lg-2 col-sm-12 col-xs-12">
        <a href="http://www.heh.be" target="_blank">
            <img src="/Intranet/view/templates/admin/assets/img/logos/logo-campus-technique.png" alt="HeH" />
        </a>
    </div>
</footer> 
        
        
<script>
    // Function when document is ready
    $(function ()
    {
        $("#button-add-group").click(function()
        {
            $.ajax(
                {
                    url: 'modules/groups_add.php',
                    type: 'POST',
                    data: "id_tournoi=2&group_name=" + $("#group-name").val(), 
                    dataType: 'text'
                }
            );
    
       
    
    
            document.location.reload(true);
            
            
        });
    });
    
</script>

    </body>
</html><?php }
}
