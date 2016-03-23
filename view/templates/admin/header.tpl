{* Smarty *}
<header id="header" class="row" >
    <div id="logo" class="col-lg-9 col-sm-9 col-xs-12" >
        <a href="../index.php">
            <img src="{#adminAssets#}/img/logoheh.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-3 col-sm-3 col-xs-12" >
        {if $con}
            <p>Bienvenue {$smarty.session.login}, <a href="../common/logout.php">se déconnecter</a></p>
        {/if}
        <p>IP: {$smarty.server.REMOTE_ADDR}.</p>
        {if $con & isset($next_matches) & !empty($next_matches)}
            <strong>Prochains matchs</strong><br>
            {section name=sec1 loop=$next_matches}
                {$next_matches[sec1].jour} {$next_matches[sec1].heure} {$next_matches[sec1].nom}<br>
            {/section}
        {/if}       
    </div>	     
</header>