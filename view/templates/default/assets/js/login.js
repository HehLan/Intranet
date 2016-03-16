
    /*************************************
     *          connexion                *
     ************************************/

    $('#validConnexion').click(function () {
        var pseudo = $('#ConPseudo').val();
        var pwd = $('#ConPwd').val();
        $.ajax({
            type: "POST",
            url: "common/login-test.php",
            data: "pseudo=" + pseudo + "&pwd=" + pwd,
            async: false,
            success: function (contenu, etat) {
                $("#repCon").html(contenu);
            }

        });
    });


    $("#formConnexion").dialog({
        autoOpen: false,
        resizable: false,
        draggable: true,
        width: 250,
        position: {my: "right top", at: "right top", of: $('#openConnexion')},
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "blind",
            duration: 1000
        }
    });

    $("#openConnexion").click(function () {
        $("#formConnexion").dialog("open");
    });
    
    
    
    $("#formMDPoublie").dialog({
        autoOpen: false,
        resizable: false,
        draggable: true,
        width: 250,
        position: {my: "right top", at: "right top", of: $('#openConnexion')}

    });


    $('#afficheMDPoublie').click(function () {
        $("#afficheFormMDPoublie").show();
        $("#erreurMDPoublie").hide();
        $("#formConnexion").dialog("close");
        $("#formMDPoublie").dialog("open");
    });


    $('#submitMDPoublie').click(function () {

        var erreur = '';
        var valid = true;
        var regEmail = new RegExp("^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z0-9\-_.]{2,3}$", "i");
        var pseudo = $('#pseudoOublie').val();
        var emailOublie = $('#emailOublie').val();


        if (!$('#adresse').val() == "") {
            valid = false;
        }


        //pseudo
        if (!$('#pseudoOublie').val()) {
            valid = false;

            erreur += "Vous n'avez pas rempli votre pseudo <br \>";
        }


        //email
        if (!$('#emailOublie').val()) {
            valid = false;

            erreur += "Vous n'avez pas rempli votre email <br \>";
        } else if (!regEmail.test($('#emailOublie').val())) {
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