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
                <li><a href="index.php">Accueil</a></li>
                <li><a href="joueurs.php">Joueurs</a></li>
                    {section name=sec1 loop=$navTournois}
                    <li><a href="tournois.php?id={$navTournois[sec1].idTournoi}">{$navTournois[sec1].nomTournoi}</a></li>
                    {/section}
                    {if $con}
                    <li><a href="ModifProfil.php">Mon profil</a></li>
                        {if $smarty.session.level==1}
                        <li><a href="admin/index.php">Admin</a></li>
                        {/if}
                    {/if}
            </ul>
        </div>
    </div>			
</nav>
