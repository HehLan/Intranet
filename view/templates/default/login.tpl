{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/login.css" />
        <script type="text/javascript" src="{#assets#}/js/login.js"></script>
    </head>

    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}
        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div id="infoZoneConnexion" >

                </div>

                <div id="formConnexion" title="Connexion">

                    <div id="erreurLogin" >

                    </div>
                    <br >
                    <label>Pseudo : <br >
                    <input type="text" id="ConPseudo" /></label><br ><br > 
                    <label>Mot de passe : <br >
                    <input type="password" id="ConPwd" /></label><br ><br >

                    <span id="afficheMDPoublie"> mot de passe oublié? </span><br ><br >
                    <input type="button" id="validConnexion" value="Connexion" style="float: right;"/>
                    <div id="repCon"></div>
                </div>

                <div id="formMDPoublie" title="Mot de passe oublié">
                    <br >
                    <div id="erreurMDPoublie" >

                    </div>
                    <div id="afficheFormMDPoublie">
                        <br >
                        <label>Pseudo : <br >
                        <input type="text" id="pseudoOublie" /></label><br ><br > 
                        <label>Email : <br >
                        <input type="text" id="emailOublie" /></label><br ><br >
                        <input type="text" name="adresse" id="adresse" style="display: none;"/>
                        <input type="button" id="submitMDPoublie" value="Valider" style="float: right;"/>
                    </div>
                </div>              

            </div>
        </div>
        {include file="default/footer.tpl"}
    </body>
</html>