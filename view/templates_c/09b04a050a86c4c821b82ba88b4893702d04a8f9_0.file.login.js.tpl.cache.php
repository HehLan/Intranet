<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:49:31
  from "E:\wamp\www\Intranet\view\templates\default\assets\js\login.js.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5709167bc02513_08419296',
  'file_dependency' => 
  array (
    '09b04a050a86c4c821b82ba88b4893702d04a8f9' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\assets\\js\\login.js.tpl',
      1 => 1458670521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5709167bc02513_08419296 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21805709167bbd3708_89989467';
?>

<?php echo '<script'; ?>
>
    
//------------------------------------------------------------------------------------------------------//
//                                                                                                      //
//                          Connection                                                                  //
//                                                                                                      //
//------------------------------------------------------------------------------------------------------//


<?php if ($_smarty_tpl->tpl_vars['tried']->value == true) {?>
    $(function ()
    {
        $("#alert-bad-login").show("slow");
        $(".close").click(function ()
        {
            $("#alert-bad-login").hide("slow");
        });
    });
<?php }?>


//------------------------------------------------------------------------------------------------------//
//                                                                                                      //
//                          Forgot Password                                                             //
//                                                                                                      //
//------------------------------------------------------------------------------------------------------//

var erreur;
var emailOublie;

$("#my_form_forgot").dialog({
    autoOpen: false,
    resizable: false,
    draggable: true,
    width: 250,
    position: { my: "right top", at: "right top", of: $('#openConnexion') }
});

$('#submit_forgot').click(function () {

    var error = '';
    var valid = true;
    var regEmail = new RegExp("^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z0-9\-_.]{ 2,3 }$", "i");
    var pseudo = $('#pseudo').val();
    var email = $('#email').val();

    //pseudo
    if (!pseudo) {
        valid = false;
        erreur += "Vous n'avez pas rempli votre pseudo <br \>";
    }

    //email
    if (!email) {
        valid = false;
        erreur += "Vous n'avez pas rempli votre email <br \>";
    }
    else if (!regEmail.test(email)) {
        valid = false;
        erreur += "Votre e-mail est incorrect! <br \>";
    }

    if (valid) {
        $("#erreurMDPoublie").html("Vérification en cours...");
        $("#erreurMDPoublie").css({ color: "#00f" });
        $("#erreurMDPoublie").show();

        $.ajax({
            type: "POST",
            url: "common/oublieMDP.php",
            data: "pseudoOublie=" + pseudo + "&emailOublie=" + emailOublie,
            success: function (contenu, etat) {
                $("#erreurMDPoublie").html(contenu);
                $("#erreurMDPoublie").css({ color: "#000" });
                $("#afficheFormMDPoublie").hide();
                $("#erreurMDPoublie").show();
            }

        });
    }
    else {
        $("#erreurMDPoublie").html(erreur);
        $("#erreurMDPoublie").css({ color: "#f00" });
        $("#erreurMDPoublie").show();
    }

});


<?php echo '</script'; ?>
><?php }
}
