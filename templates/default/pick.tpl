{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        {include file="{#templatePath#}meta.tpl"}
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/joueur.js"></script>
    </head>

    <body role="document">
    	
    	<!-- le logo -->
    	{include file="header.tpl"}

    	<!-- CUSTOM NAVBAR TEMPLATE -->
		<nav id="navigation" class="navbar navbar-inverse" role="navigation" >
		    <div class="container-fluid">
		        <div class="navbar-header" style="width:100%; height:50px;"/>
		        <div class="collapse navbar-collapse"/>
		    </div>			
		</nav>


    </body>
</html>