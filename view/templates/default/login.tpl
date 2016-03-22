{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/login.css" />
    </head>

    <body role="document">
        <div class="container-fluid" id="container">

            <div class="logo-hehlan">
                <img id="logo-hehlan-img" src="{#assets#}/img/private.png" alt="Logo HEHLan" title="Logo HEHLan"/>
            </div>

            <div id="alert-bad-login" class="alert alert-warning alert-dismissable col-lg-4" style="display: none">
                <button type="button" class="close">x</button>
                <h4>Erreur !</h4>
                <p>Le pseudo ou le mot de passe entré est invalide.</p>
                <p>Vérifier vos données saisies et réessayer.</p>
                <p>En cas d'oubli de vos données personnelles, vous pouvez toujours contacté les admins pour la réinitialisation de vos données.</p>
            </div>
            
            <div class="accordion">
                <h3><legend>Connexion</legend></h3>
                <div class="row" id="bloc_login">             
                    <form class="well myform" method="POST"action="#">
                        <fieldset>
                            <div class="form-group">
                                <label for="login">Pseudo </label>
                                <input id="login" class="form-control" type="text" name="login" placeholder="Veuillez entrer votre pseudo">  
                            </div>
                            <div class="form-group">
                                <label for="pwd">Mot de Passe </label>
                                <input id="pwd" class="form-control" type="password" name="pwd" placeholder="Veuillez entrer votre mot de passe">  
                            </div>
                            <button class="btn btn-primary" type="submit">Connexion</button>
                        </fieldset>                           
                    </form>               
                </div>
                <h3><legend>Mot de Passe Oublié</legend></h3>
                <div class="row" id="bloc_forgot">
                    <form class="well myform" id="my_form_forgot" method="POST" action="../index.php">
                        <fieldset>
                            <div class="form-group">
                                <label for="pseudo_forgot">Pseudo </label>
                                <input id="pseudo_forgot" class="form-control" type="text" name="pseudo_forgot" readonly>  
                            </div>
                            <div class="form-group">
                                <label for="email_forgot">Email </label>
                                <input id="email_forgot" class="form-control" type="email" name="email_forgot" readonly>  
                            </div>
                            <button class="btn btn-primary" id="submit_forgot" disabled type="submit">Valider</button>
                        </fieldset>                           
                    </form>
                </div>            
            </div>
            
        </div>
        {include file="default/footer.tpl"}
        
        
        {include file="default/assets/js/login.js.tpl"
            tried=$tried
        }

    </body>
</html>
