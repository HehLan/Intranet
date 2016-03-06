<?php
/* Smarty version 3.1.29, created on 2016-03-06 17:02:38
  from "E:\wamp\www\Intranet\view\templates\admin\joueurs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc549e3e0030_19338264',
  'file_dependency' => 
  array (
    'e4973873623c1b066a615e2ff41588cbe2e5fcfa' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\joueurs.tpl',
      1 => 1457279488,
      2 => 'file',
    ),
    '0e581425c25b7e4430f823fafb32398a1a42b35f' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\meta.tpl',
      1 => 1457280036,
      2 => 'file',
    ),
    '671975c94dd1e7dba0ca368cae0b42da0a3615ec' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\header.tpl',
      1 => 1457274566,
      2 => 'file',
    ),
    'e98396841417fe328ce0f332a73c8fbcf7a31642' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\nav.tpl',
      1 => 1456265917,
      2 => 'file',
    ),
    'f9508bf021c4a0cb4e00179ef41a44bb7a637b1c' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\footer.tpl',
      1 => 1456227086,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56dc549e3e0030_19338264 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
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

<meta name="viewport" content="width=device-width, initial-scale="1.0" />
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

<link rel="shortcut icon" href="/Intranet/view/templates/admin/assets/img/logoheh.ico" />
<link rel="icon" href="/Intranet/view/templates/admin/assets/img/logoheh.ico" />


<!-- CSS STYLESHEETS BASE -->
<link rel="stylesheet" type="text/css" href="/Intranet/lib/jQuery/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/Bootstrap/bootstrap.min.css" />
<!-- CSS STYLESHEETS LAYERS -->
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/header.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/nav.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/footer.css" />








<script src="/Intranet/src/js/jquery.js"></script>
<script src="/Intranet/src/js/bootstrap.min.js"></script>
<script src="/Intranet/src/js/jquery-2.1.4.min.js"></script>

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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/joueurs.css" >
        <script type="text/javascript" src="/Intranet/src/js/jquery.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/getXhr.js"></script>
        <script>
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
        </script>  
    </head>

    <body role="document">
        
<header id="header" class="row" >
    <div id="logo" class="col-lg-9 col-sm-9 col-xs-12" >
        <a href="index.php">
            <img src="/Intranet/view/templates/default/assets/img/logoheh.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-3 col-sm-3 col-xs-12" >
                    <p>Bienvenue admin, <a href="../common/deco.php">se déconnecter</a></p>
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
                                                                                           <h6 class="joueurAdmin" value="138">1ST_Tr45HxC</h6> 
                                                                                           <h6 class="joueurAdmin" value="96">Abysses</h6> 
                                                                                           <h6 class="joueurAdmin" value="2553">admin</h6> 
                                                                                           <h6 class="joueurAdmin" value="193">adri0413</h6> 
                                                                                           <h6 class="joueurAdmin" value="130">Alcyoal</h6> 
                                                                                           <h6 class="joueurAdmin" value="102">Alfatta</h6> 
                                                                                           <h6 class="joueurAdmin" value="101">Alfattarte</h6> 
                                                                                           <h6 class="joueurAdmin" value="84">Ander BloodEyes</h6> 
                                                                                           <h6 class="joueurAdmin" value="99">Anga</h6> 
                                                                                           <h6 class="joueurAdmin" value="86">Angerfirst</h6> 
                                                                                           <h6 class="joueurAdmin" value="131">Anus42</h6> 
                                                                                           <h6 class="joueurAdmin" value="33">Artanis Pirgis</h6> 
                                                                                           <h6 class="joueurAdmin" value="186">Artikthor</h6> 
                                                                                           <h6 class="joueurAdmin" value="106">Ash</h6> 
                                                                                           <h6 class="joueurAdmin" value="154">AsylumCoven</h6> 
                                                                                           <h6 class="joueurAdmin" value="140">Atariks</h6> 
                                                                                           <h6 class="joueurAdmin" value="134">ATMbigslick</h6> 
                                                                                           <h6 class="joueurAdmin" value="124">Banksyz</h6> 
                                                                                           <h6 class="joueurAdmin" value="183">batllegame</h6> 
                                                                                           <h6 class="joueurAdmin" value="172">Belgium Flag DzX</h6> 
                                                                                           <h6 class="joueurAdmin" value="57">Belgium Flag Zeytenh</h6> 
                                                                                           <h6 class="joueurAdmin" value="88">benauto</h6> 
                                                                                           <h6 class="joueurAdmin" value="157">Beno50</h6> 
                                                                                           <h6 class="joueurAdmin" value="176">Blakcat</h6> 
                                                                                           <h6 class="joueurAdmin" value="54">bou</h6> 
                                                                                           <h6 class="joueurAdmin" value="29">Boulvay</h6> 
                                                                                           <h6 class="joueurAdmin" value="35">brasix</h6> 
                                                                                           <h6 class="joueurAdmin" value="214">Brenda</h6> 
                                                                                           <h6 class="joueurAdmin" value="199">Broflovsky</h6> 
                                                                                           <h6 class="joueurAdmin" value="182">bryan6mepu</h6> 
                                                                                           <h6 class="joueurAdmin" value="146">buenoC6</h6> 
                                                                                           <h6 class="joueurAdmin" value="206">Bumblebee</h6> 
                                                                                           <h6 class="joueurAdmin" value="6">Canon6etoiles</h6> 
                                                                                           <h6 class="joueurAdmin" value="119">Chat Ringan</h6> 
                                                                                           <h6 class="joueurAdmin" value="177">Chillsforyou</h6> 
                                                                                           <h6 class="joueurAdmin" value="173">China</h6> 
                                                                                           <h6 class="joueurAdmin" value="171">cloud1213</h6> 
                                                                                           <h6 class="joueurAdmin" value="93">Codu</h6> 
                                                                                           <h6 class="joueurAdmin" value="2554">corky</h6> 
                                                                                           <h6 class="joueurAdmin" value="104">craywyn</h6> 
                                                                                           <h6 class="joueurAdmin" value="117">crisedefoi</h6> 
                                                                                           <h6 class="joueurAdmin" value="111">Danilus</h6> 
                                                                                           <h6 class="joueurAdmin" value="162">deadlive</h6> 
                                                                                           <h6 class="joueurAdmin" value="136">Dekama</h6> 
                                                                                           <h6 class="joueurAdmin" value="66">Delikan57</h6> 
                                                                                           <h6 class="joueurAdmin" value="18">Desert</h6> 
                                                                                           <h6 class="joueurAdmin" value="31">DestroyedParadis</h6> 
                                                                                           <h6 class="joueurAdmin" value="75">dodop</h6> 
                                                                                           <h6 class="joueurAdmin" value="139">DottyLloyd</h6> 
                                                                                           <h6 class="joueurAdmin" value="76">Dr Miika</h6> 
                                                                                           <h6 class="joueurAdmin" value="190">Drêdack</h6> 
                                                                                           <h6 class="joueurAdmin" value="71">Droledami</h6> 
                                                                                           <h6 class="joueurAdmin" value="151">ducoman</h6> 
                                                                                           <h6 class="joueurAdmin" value="70">Echofox</h6> 
                                                                                           <h6 class="joueurAdmin" value="61">Eklatburnes</h6> 
                                                                                           <h6 class="joueurAdmin" value="59">Eklatpif</h6> 
                                                                                           <h6 class="joueurAdmin" value="60">Entamoeba</h6> 
                                                                                           <h6 class="joueurAdmin" value="118">Er3az</h6> 
                                                                                           <h6 class="joueurAdmin" value="197">eystornt</h6> 
                                                                                           <h6 class="joueurAdmin" value="3">fliwdeir</h6> 
                                                                                           <h6 class="joueurAdmin" value="181">Florentcle</h6> 
                                                                                           <h6 class="joueurAdmin" value="94">Fluffy</h6> 
                                                                                           <h6 class="joueurAdmin" value="22">Fogz</h6> 
                                                                                           <h6 class="joueurAdmin" value="122">fox2903</h6> 
                                                                                           <h6 class="joueurAdmin" value="185">FroZen</h6> 
                                                                                           <h6 class="joueurAdmin" value="155">Fyren</h6> 
                                                                                           <h6 class="joueurAdmin" value="113">Gahkin</h6> 
                                                                                           <h6 class="joueurAdmin" value="121">Galdesh</h6> 
                                                                                           <h6 class="joueurAdmin" value="98">Gaudryk</h6> 
                                                                                           <h6 class="joueurAdmin" value="168">giovanbaba</h6> 
                                                                                           <h6 class="joueurAdmin" value="51">gosh101</h6> 
                                                                                           <h6 class="joueurAdmin" value="210">GRAPHH</h6> 
                                                                                           <h6 class="joueurAdmin" value="123">Greybak</h6> 
                                                                                           <h6 class="joueurAdmin" value="159">Gs DeadLine56</h6> 
                                                                                           <h6 class="joueurAdmin" value="13">Guerrier666</h6> 
                                                                                           <h6 class="joueurAdmin" value="194">Guirlande</h6> 
                                                                                           <h6 class="joueurAdmin" value="97">gwennytoux</h6> 
                                                                                           <h6 class="joueurAdmin" value="41">Hamsterguys</h6> 
                                                                                           <h6 class="joueurAdmin" value="156">handsome smurf</h6> 
                                                                                           <h6 class="joueurAdmin" value="49">Happy Nems</h6> 
                                                                                           <h6 class="joueurAdmin" value="78">Helmanath</h6> 
                                                                                           <h6 class="joueurAdmin" value="48">Hexceed</h6> 
                                                                                           <h6 class="joueurAdmin" value="95">Hextia</h6> 
                                                                                           <h6 class="joueurAdmin" value="175">hfkill</h6> 
                                                                                           <h6 class="joueurAdmin" value="52">Horokrist</h6> 
                                                                                           <h6 class="joueurAdmin" value="207">HyzoWeed</h6> 
                                                                                           <h6 class="joueurAdmin" value="53">iGlooW</h6> 
                                                                                           <h6 class="joueurAdmin" value="144">igor mono</h6> 
                                                                                           <h6 class="joueurAdmin" value="26">ioni</h6> 
                                                                                           <h6 class="joueurAdmin" value="62">JankulaseK</h6> 
                                                                                           <h6 class="joueurAdmin" value="105">Kaethuseth</h6> 
                                                                                           <h6 class="joueurAdmin" value="209">KaMoKyu</h6> 
                                                                                           <h6 class="joueurAdmin" value="38">Katax</h6> 
                                                                                           <h6 class="joueurAdmin" value="149">Katnus</h6> 
                                                                                           <h6 class="joueurAdmin" value="115">kazuhya</h6> 
                                                                                           <h6 class="joueurAdmin" value="21">koekjes</h6> 
                                                                                           <h6 class="joueurAdmin" value="87">Kovers</h6> 
                                                                                           <h6 class="joueurAdmin" value="192">Kr0usty</h6> 
                                                                                           <h6 class="joueurAdmin" value="8">Krogoh</h6> 
                                                                                           <h6 class="joueurAdmin" value="47">LamboX</h6> 
                                                                                           <h6 class="joueurAdmin" value="91">landre164</h6> 
                                                                                           <h6 class="joueurAdmin" value="184">Lasti</h6> 
                                                                                           <h6 class="joueurAdmin" value="63">Lee Sin</h6> 
                                                                                           <h6 class="joueurAdmin" value="5">lion24</h6> 
                                                                                           <h6 class="joueurAdmin" value="7">LittleS4T4N</h6> 
                                                                                           <h6 class="joueurAdmin" value="164">Liytøse</h6> 
                                                                                           <h6 class="joueurAdmin" value="163">Loraline</h6> 
                                                                                           <h6 class="joueurAdmin" value="137">Lordftw</h6> 
                                                                                           <h6 class="joueurAdmin" value="204">Louza</h6> 
                                                                                           <h6 class="joueurAdmin" value="211">luffy0612</h6> 
                                                                                           <h6 class="joueurAdmin" value="103">lukasobito</h6> 
                                                                                           <h6 class="joueurAdmin" value="14">Luke</h6> 
                                                                                           <h6 class="joueurAdmin" value="120">machabastien</h6> 
                                                                                           <h6 class="joueurAdmin" value="191">Macphalin</h6> 
                                                                                           <h6 class="joueurAdmin" value="180">Madixti</h6> 
                                                                                           <h6 class="joueurAdmin" value="80">malu7800</h6> 
                                                                                           <h6 class="joueurAdmin" value="145">MetaxLight</h6> 
                                                                                           <h6 class="joueurAdmin" value="20">Métronic</h6> 
                                                                                           <h6 class="joueurAdmin" value="148">Mikeman</h6> 
                                                                                           <h6 class="joueurAdmin" value="200">Mizark</h6> 
                                                                                           <h6 class="joueurAdmin" value="69">Monkey D Allan</h6> 
                                                                                           <h6 class="joueurAdmin" value="178">Morgasme</h6> 
                                                                                           <h6 class="joueurAdmin" value="100">MrNedria</h6> 
                                                                                           <h6 class="joueurAdmin" value="203">mrtoshio</h6> 
                                                                                           <h6 class="joueurAdmin" value="79">Multidoting</h6> 
                                                                                           <h6 class="joueurAdmin" value="50">NamaTroX</h6> 
                                                                                           <h6 class="joueurAdmin" value="77">Narco</h6> 
                                                                                           <h6 class="joueurAdmin" value="195">Navarro</h6> 
                                                                                           <h6 class="joueurAdmin" value="89">Nucleaz</h6> 
                                                                                           <h6 class="joueurAdmin" value="37">Nydda</h6> 
                                                                                           <h6 class="joueurAdmin" value="39">Nyuw</h6> 
                                                                                           <h6 class="joueurAdmin" value="212">oculus</h6> 
                                                                                           <h6 class="joueurAdmin" value="141">Ohgreat</h6> 
                                                                                           <h6 class="joueurAdmin" value="147">OPMaRSs</h6> 
                                                                                           <h6 class="joueurAdmin" value="187">Orceus</h6> 
                                                                                           <h6 class="joueurAdmin" value="73">Origamie</h6> 
                                                                                           <h6 class="joueurAdmin" value="45">ousermont</h6> 
                                                                                           <h6 class="joueurAdmin" value="72">Playas</h6> 
                                                                                           <h6 class="joueurAdmin" value="114">Popol au Cirque</h6> 
                                                                                           <h6 class="joueurAdmin" value="10">Psychopaf</h6> 
                                                                                           <h6 class="joueurAdmin" value="166">PuLse Olen</h6> 
                                                                                           <h6 class="joueurAdmin" value="174">qodex</h6> 
                                                                                           <h6 class="joueurAdmin" value="152">RageManSenior</h6> 
                                                                                           <h6 class="joueurAdmin" value="170">RaKyora</h6> 
                                                                                           <h6 class="joueurAdmin" value="12">Rawnur</h6> 
                                                                                           <h6 class="joueurAdmin" value="68">Rayalok</h6> 
                                                                                           <h6 class="joueurAdmin" value="25">RectoO</h6> 
                                                                                           <h6 class="joueurAdmin" value="42">rod0511</h6> 
                                                                                           <h6 class="joueurAdmin" value="90">roden164</h6> 
                                                                                           <h6 class="joueurAdmin" value="40">Rothesse</h6> 
                                                                                           <h6 class="joueurAdmin" value="127">rougetta</h6> 
                                                                                           <h6 class="joueurAdmin" value="56">Salcatin</h6> 
                                                                                           <h6 class="joueurAdmin" value="165">samarïtan</h6> 
                                                                                           <h6 class="joueurAdmin" value="82">satanasth250</h6> 
                                                                                           <h6 class="joueurAdmin" value="65">Seyfur</h6> 
                                                                                           <h6 class="joueurAdmin" value="142">shasha07</h6> 
                                                                                           <h6 class="joueurAdmin" value="125">Shethan</h6> 
                                                                                           <h6 class="joueurAdmin" value="158">Shoutmog</h6> 
                                                                                           <h6 class="joueurAdmin" value="126">Shyrøw</h6> 
                                                                                           <h6 class="joueurAdmin" value="107">Siena</h6> 
                                                                                           <h6 class="joueurAdmin" value="108">Skayard</h6> 
                                                                                           <h6 class="joueurAdmin" value="2552">skit</h6> 
                                                                                           <h6 class="joueurAdmin" value="43">Skullhards</h6> 
                                                                                           <h6 class="joueurAdmin" value="129">skuyz</h6> 
                                                                                           <h6 class="joueurAdmin" value="46">Skynyx</h6> 
                                                                                           <h6 class="joueurAdmin" value="32">Sl33p3r</h6> 
                                                                                           <h6 class="joueurAdmin" value="196">sleve</h6> 
                                                                                           <h6 class="joueurAdmin" value="143">Sman3133</h6> 
                                                                                           <h6 class="joueurAdmin" value="112">Soccielo</h6> 
                                                                                           <h6 class="joueurAdmin" value="205">Soyo</h6> 
                                                                                           <h6 class="joueurAdmin" value="30">Sponos</h6> 
                                                                                           <h6 class="joueurAdmin" value="17">Spytte is Coming</h6> 
                                                                                           <h6 class="joueurAdmin" value="202">subbyy</h6> 
                                                                                           <h6 class="joueurAdmin" value="198">supertinez</h6> 
                                                                                           <h6 class="joueurAdmin" value="64">Suyken</h6> 
                                                                                           <h6 class="joueurAdmin" value="58">Tartines</h6> 
                                                                                           <h6 class="joueurAdmin" value="36">Téflon</h6> 
                                                                                           <h6 class="joueurAdmin" value="23">Thaerith</h6> 
                                                                                           <h6 class="joueurAdmin" value="109">TheBlackDiamond</h6> 
                                                                                           <h6 class="joueurAdmin" value="160">THEDEVASTATOR</h6> 
                                                                                           <h6 class="joueurAdmin" value="85">Thorgrim</h6> 
                                                                                           <h6 class="joueurAdmin" value="128">thotwith</h6> 
                                                                                           <h6 class="joueurAdmin" value="81">Tomirock</h6> 
                                                                                           <h6 class="joueurAdmin" value="167">Torakh</h6> 
                                                                                           <h6 class="joueurAdmin" value="161">ToSu91</h6> 
                                                                                           <h6 class="joueurAdmin" value="67">Touza</h6> 
                                                                                           <h6 class="joueurAdmin" value="34">Tøxigrinta</h6> 
                                                                                           <h6 class="joueurAdmin" value="116">trogalt</h6> 
                                                                                           <h6 class="joueurAdmin" value="179">Unexard</h6> 
                                                                                           <h6 class="joueurAdmin" value="135">VeryBadLegend</h6> 
                                                                                           <h6 class="joueurAdmin" value="188">vindoze</h6> 
                                                                                           <h6 class="joueurAdmin" value="201">Volgrim</h6> 
                                                                                           <h6 class="joueurAdmin" value="83">Wadosh</h6> 
                                                                                           <h6 class="joueurAdmin" value="133">waelan</h6> 
                                                                                           <h6 class="joueurAdmin" value="92">Webolivieri</h6> 
                                                                                           <h6 class="joueurAdmin" value="24">Winblast</h6> 
                                                                                           <h6 class="joueurAdmin" value="28">Witchh Doctor</h6> 
                                                                                           <h6 class="joueurAdmin" value="189">wiwi0123</h6> 
                                                                                           <h6 class="joueurAdmin" value="150">wooligan</h6> 
                                                                                           <h6 class="joueurAdmin" value="74">Worst fiddle EUW</h6> 
                                                                                           <h6 class="joueurAdmin" value="27">xemnas192</h6> 
                                                                                           <h6 class="joueurAdmin" value="44">ximunou</h6> 
                                                                                           <h6 class="joueurAdmin" value="110">XUltiX</h6> 
                                                                                           <h6 class="joueurAdmin" value="213">xxbitter</h6> 
                                                                                           <h6 class="joueurAdmin" value="153">xxroroxx</h6> 
                                                                                           <h6 class="joueurAdmin" value="169">Yasukiro</h6> 
                                                                                           <h6 class="joueurAdmin" value="208">Yellowpit</h6> 
                                                                                           <h6 class="joueurAdmin" value="55">Zarak</h6> 
                                                                                           <h6 class="joueurAdmin" value="19">zarbisi</h6> 
                                                                                           <h6 class="joueurAdmin" value="132">Zayzo</h6> 
                                                                                           <h6 class="joueurAdmin" value="4">Zelof</h6> 
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

        
<footer id="footer" class="row">
    <div id="copyright" class="col-lg-3 col-sm-12 col-xs-12">
        <p>HEHLan All Rights Reserved Copyright 2016</p>
    </div>
    <div id="ceheh" class="col-lg-offset-2 col-lg-2 col-sm-12 col-xs-12">
        <img src="/Intranet/view/templates/default/assets/img/logo3.png" alt="CEHECOFH">
    </div>
    <div id="campus_technique" class="col-lg-offset-3 col-lg-2 col-sm-12 col-xs-12">
        <a href="http://www.heh.be" target="_blank">
            <img src="/Intranet/view/templates/default/assets/img/logo4.png" alt="HeH">
        </a>
    </div>
</footer> 
    </body>
</html><?php }
}
