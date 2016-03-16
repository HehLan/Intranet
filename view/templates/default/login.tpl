{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/login.css" />
        <script type="text/javascript" src="{#assets#}/js/login.js"></script>
    </head>

    <body role="document">
        <div class="container-fluid" id="container">
                        
            <div class="logo-hehlan">
                <img src="{#assets#}/img/private.png" alt="Logo HEHLan" title="Logo HEHLan"/>
            </div>
            
            <div class="alert alert-warning alert-dismissable col-lg-4" style="display: none">
                <button type="button" class="close">x</button>
                <h4>Error !</h4>
                Bad login od bad password
            </div>
            
            
            <div class="row" id="bloc_login">             
                <form class="well myform" method="POST">
                    <legend>Connexion</legend>
                    <fieldset>
                        <div class="form-group">
                            <label for="login">Login </label>
                            <input id="login" class="form-control" type="text" name="login">  
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password </label>
                            <input id="pwd" class="form-control" type="password" name="pwd">  
                        </div>
                        <button class="btn btn-primary" type="submit">Log on</button>
                    </fieldset>                           
                </form>               
            </div>
                
            <div class="row" id="bloc_forgot">
                <form class="well myform" method="POST" action="../index.php">
                    <legend>Mot de passe oublié</legend>
                    <fieldset>
                        <div class="form-group">
                            <label for="pseudo">Pseudo </label>
                            <input id="pseudo" class="form-control" type="text" name="pseudo">  
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input id="email" class="form-control" type="email" name="email">  
                        </div>
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </fieldset>                           
                </form>
            </div>    
                    
        </div>
            
            
        
        {if $tried == 'true'}
            <script>
                $( function ()
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
            
        

    </body>
</html>