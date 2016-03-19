//----------------------------------------------------------------------------------------------------
//
//              Connection
//
//----------------------------------------------------------------------------------------------------





//----------------------------------------------------------------------------------------------------
//
//              Forgot Password
//
//----------------------------------------------------------------------------------------------------



$("#my_form_forgot").dialog({
    autoOpen: false,
    resizable: false,
    draggable: true,
    width: 250,
    position: {my: "right top", at: "right top", of: $('#openConnexion')}
});

$('#submit_forgot').click(function () {

    var error = '';
    var valid = true;
    var regEmail = new RegExp("^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z0-9\-_.]{2,3}$", "i");
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
        $("#erreurMDPoublie").css({color: "#00f"});
        $("#erreurMDPoublie").show();

        $.ajax({
            type: "POST",
            url: "common/oublieMDP.php",
            data: "pseudoOublie=" + pseudo + "&emailOublie=" + emailOublie,
            success: function (contenu, etat) {
                $("#erreurMDPoublie").html(contenu);
                $("#erreurMDPoublie").css({color: "#000"});
                $("#afficheFormMDPoublie").hide();
                $("#erreurMDPoublie").show();
            }

        });
    }
    else {
        $("#erreurMDPoublie").html(erreur);
        $("#erreurMDPoublie").css({color: "#f00"});
        $("#erreurMDPoublie").show();
    }

});