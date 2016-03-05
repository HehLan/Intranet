$(document).ready(function () {

    $(".EquipeAdmin").click(function () {

        $('#submitNewPlayerInTeam').show();
        $(".EquipeAdmin").css({background: "none"});
        //$('#InfoJoueurEquipes').php('');
        $(".EquipeJoueurAdmin").css({background: "none"});

        $(this).css({background: "rgba(0,0,255,0.2)"});
        $.ajax({
            type: "POST",
            url: "admin/listeJoueursEquipe.php",
            data: "id_equipe=" + $(this).attr("value"),
            success: function (contenu, etat) {
                $('#listeEquipeJoueurAdmin').html(contenu);
                $('#InfoJoueurEquipes').html('');
            }
        });
    });
    $("div").delegate(".EquipeJoueurAdmin", "click", function () {
        $(".EquipeJoueurAdmin").css({background: "none"});
        $(this).css({background: "rgba(0,0,255,0.2)"});
        $.ajax({
            type: "POST",
            url: "admin/InfoJoueurAdmin.php",
            data: "id_joueur=" + $(this).attr("value"),
            success: function (contenu, etat) {
                $('#InfoJoueurEquipes').html(contenu);
            }
        });
    });
    $("#infoEquipeAdmin").dialog({
        autoOpen: false,
        title: "joueur � ajouter",
        height: 300,
        width: 350,
        modal: true

    });
    $("div").delegate("#submitNewPlayerInTeam", "click", function () {
        $("#infoEquipeAdmin").dialog("open");
        $.ajax({
            type: "POST",
            url: "admin/chargerListeJoueurs.php",
            data: "id_joueur=" + $(this).attr("value"),
            success: function (contenu, etat) {
                $('#infoEquipeAdmin').php(contenu);
            }
        });
    });
    $("div").delegate("#submitSeclectJoueurEquipeAdmin", "click", function () {
        $("#infoEquipeAdmin").dialog({title: "Les �quipes du joueur"});
        $.ajax({
            type: "POST",
            url: "admin/equipesDuJoueur.php",
            data: "id_joueur=" + $("#SelectJoueur option:selected").val(),
            success: function (contenu, etat) {
                $('#infoEquipeAdmin').php(contenu);
            }
        });
    });

    $("div").delegate("#submitChangementEquipeDuJoueur", "click", function () {
        var AuMoinsUneEquipe = false;
        var i = 0;
        var id = 'id_joueur=' + $("#idJoueurAdminForEquipe").attr("value");
        $(".chkbxEquipeDuJoueur:checked").each(function () {
            id += '&inscrit[' + i + ']=' + $(this).attr("value");
            i++;
            AuMoinsUneEquipe = true;
        });
        if ($("#SelectAjoutJoueurEquipe").val()) {
            id += '&inscrit[' + i + ']=' + $("#SelectAjoutJoueurEquipe").val();
        } else if (!AuMoinsUneEquipe) {
            id += '&deleteAll=1';
        }
        $.ajax({
            type: "POST",
            url: "admin/insertEquipeDuJoueur.php",
            data: id,
            success: function (contenu, etat) {
                $("#infoEquipeAdmin").php(contenu);
                $("#infoEquipeAdmin").dialog({buttons: [{text: "Ok", click: function () {
                                $(this).dialog("close");
                                location.reload();
                            }}]});
                $("#infoEquipeAdmin").dialog("open");
            }
        });

    });

    /*$("#erreurNewTeamAdmin").dialog({
        autoOpen: false,
        title: "Nouvelle �quipe",
        height: 300,
        width: 350,
        modal: true,
        close: function () {
            location.reload();
        },
        buttons: [{text: "Ok", click: function () {
                    $(this).dialog("close");
                }}]
    });*/

    $("div").delegate("#submitCreerNewEquipeAdmin", "click", function () {

        //remise en forme des inputs
        $("#new_psw_equipe").css({background: "none"});
        $("#new_psw_equipe2").css({background: "none"});
        $("#Team").css({background: "none"});
        $("#TagTeam").css({backgroundColor: "none"});

        var erreur = '';
        var valid = true;

        /***************************
         * Cr�er une team
         * ************************/

        //nom de la team
        if (!$('#Team').val()) {
            valid = false;
            $("#Team").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Vous n'avez pas rempli le nom de votre team <br \>";
        }
        else if ($('#Team').val().length < 2) {
            valid = false;
            $("#Team").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Le nom de votre team doit comporter au moins 2 caract�res <br \>";
        } else if ($('#Team').val().length > 40) {
            valid = false;
            $("#Team").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Le nom de votre team est trop long<br \>";
        }
        else if ($('#pseudoboxTeam').css('color') != 'rgb(0, 255, 0)') {
            valid = false;
            $("#Team").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Le nom de team est d�j� pris!<br \>";
        }

        //tag de la team
        if (!$('#TagTeam').val()) {
            valid = false;
            $("#TagTeam").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Vous n'avez pas rempli le tag de votre team <br \>";
        }
        else if ($('#TagTeam').val().length < 1) {
            valid = false;
            $("#TagTeam").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Le tag de votre team doit comporter au moins 1 caract�re <br \>";
        } else if ($('#TagTeam').val().length > 10) {
            valid = false;
            $("#TagTeam").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Le tag de votre team est trop long<br \>";
        }
        else if ($('#pseudoboxTagTeam').css('color') != 'rgb(0, 255, 0)') {
            valid = false;
            $("#TagTeam").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Le tag de team est d�j� pris!<br \>";
        }

        //password de la team
        if (!$('#new_psw_equipe').val()) {
            valid = false;
            $("#new_psw_equipe").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Vous n'avez pas rempli le mot de passe de la team <br \>";
        } else if ($('#new_psw_equipe').val().length < 8) {
            valid = false;
            $("#new_psw_equipe").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Le mot de passe de la team doit comporter au moins 8 caract�res <br \>";
        } else if ($('#new_psw_equipe').val().length > 30) {
            valid = false;
            $("#new_psw_equipe").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Le mot de passe de la team est trop long<br \>";
        } else if ($('#new_psw_equipe').val() != $('#new_psw_equipe2').val()) {
            valid = false;
            $("#new_psw_equipe").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            $("#new_psw_equipe2").css({backgroundColor: "rgba(200, 0, 0, 0.2)"});
            erreur += "Les 2 mots de passe de la team ne sont pas les m�mes <br \>";
        }

        if (valid) {
            $("#erreurNewTeamAdmin").php("V�rification en cours...");
            $("#erreurNewTeamAdmin").css({color: "#00f"});
            var id = "Team=" + $("#Team").val();
            id += "&TagTeam=" + $("#TagTeam").val();
            id += "&new_psw_equipe=" + $("#new_psw_equipe").val();
            $.ajax({
                type: "POST",
                url: "admin/insertNewEquipe.php",
                data: id,
                success: function (contenu, etat) {
                    $("#erreurNewTeamAdmin").php(contenu);
                    $("#erreurNewTeamAdmin").dialog("open");
                }
            });
        }
        else {
            $("#erreurNewTeamAdmin").html(erreur);
            $("#erreurNewTeamAdmin").css({color: "#f00"});
        }
    });

    $('#ListeEquipeAdmin #Team').on('change', function () {
        $.ajax({
            type: "POST",
            url: "admin/check-Team.php",
            data: "Team=" + $('#Team').val(),
            success: function (contenu, etat) {
                $("#pseudoboxTeam").php(contenu);
            }

        });
    });
    $('#ListeEquipeAdmin #TagTeam').on('change', function () {
        $.ajax({
            type: "POST",
            url: "admin/check-Team.php",
            data: "TagTeam=" + $('#TagTeam').val(),
            success: function (contenu, etat) {
                $("#pseudoboxTagTeam").php(contenu);
            }

        });
    });
});