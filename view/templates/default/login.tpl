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

            <div class="alert alert-warning alert-dismissable col-lg-4" style="display: none">
                <button type="button" class="close">x</button>
                <h4>Erreur !</h4>
                Mauvais login ou mot de passe.
            </div>

            <div class="accordion">
                <h3><legend>Connexion</legend></h3>
                <div class="row" id="bloc_login">             
                    <form class="well myform" method="POST"action="#">
                        <fieldset>
                            <div class="form-group">
                                <label for="login">Pseudo </label>
                                <input id="login" class="form-control" type="text" name="login" placeholder="Pseudo">  
                            </div>
                            <div class="alert alert-block alert-danger" style="display: none">
                                <h4>Erreur</h4>
                                Ce champ ne peut être vide
                            </div>
                            <div class="form-group">
                                <label for="pwd">Mot de Passe </label>
                                <input id="pwd" class="form-control" type="password" name="pwd" placeholder="Mot de passe">  
                            </div>
                            <div class="alert alert-block alert-danger" style="display: none">
                                <h4>Erreur</h4>
                                Ce champ ne peut être vide
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
                                <input id="pseudo_forgot" class="form-control" type="text" name="pseudo_forgot">  
                            </div>
                            <div class="alert alert-block alert-danger" style="display: none">
                                <h4>Erreur</h4>
                                Ce champ ne peut être vide
                            </div>
                            <div class="form-group">
                                <label for="email_forgot">Email </label>
                                <input id="email_forgot" class="form-control" type="email" name="email_forgot">  
                            </div>
                            <div class="alert alert-block alert-danger" style="display: none">
                                <h4>Erreur</h4>
                                Ce champ ne peut être vide
                            </div>
                            <button class="btn btn-primary" id="submit_forgot" type="submit">Valider</button>
                        </fieldset>                           
                    </form>
                </div> 
            </div>			
        </div>
        {include file="default/footer.tpl"}
        
	<script type="text/javascript" src="{#assets#}/js/login.js"></script>	
        
        {if $tried == 'true'}
            <script>
                $(function ()
                {
                    $(".alert").show("slow");

                    $(".close").click(function ()
                    {
                        $(".alert").hide("slow");
                        $("#afficher").show();
                    });
                });
            </script>
        {/if}
        <script>
        $(function ()
        {
            $("form").on("submit", function ()
            {
                if($("input").val().length < 4)
                {
                    $("div.form-group").addClass("has-error");
                    $("div.alert").show("slow").delay(4000).hide("slow");
                    return false ;
                }
            });
        });
      </script>  
        
    </body>
</html>
