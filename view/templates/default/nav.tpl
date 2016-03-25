{* Smarty *}
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
                <li><a href="{#domain#}/index.php">Accueil</a></li>
                <li><a href="{#domain#}/places.php">Places</a></li>         
                {section name=sec1 loop=$navTournois}
                    <li><a href="{#domain#}/tournois.php?id={$navTournois[sec1].id_tournoi}">{$navTournois[sec1].nomTournoi}</a></li>
                {/section}                      
                {if $smarty.session.level==1 || $smarty.session.level==2}
                    <li><a href="{#domain#}/admin/index.php">Admin</a></li>
                {/if}
            </ul>
        </div>
    </div>			
</nav>
