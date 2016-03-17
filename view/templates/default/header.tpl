{* Smarty *}
<header id="header" class="row" >
    <div id="logo" class="col-lg-9 col-sm-9 col-xs-12" >
        <a href="index.php">
            <img src="{#assets#}/img/logoheh.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-3 col-sm-3 col-xs-12" >
        {if $con}
            <p>Bienvenue {$smarty.session.login} !</p>
			<div id="userbar" class="" >
				<a href="profile.php"><img src="{#assets#}/img/userbar/profile.png" alt="Votre profil"></a>
				<a href="#" id="notifBlock"
					data-container="body" data-toggle="popover" data-placement="bottom" title="Vos notifications" data-content="{$smarty.server.REMOTE_ADDR}">
					<img src="{#assets#}/img/userbar/notif_off.png" alt="Vos Notifications">
					{include file="default/notif.tpl"}
				</a>
				<a href="#" class=""
					data-container="body" data-toggle="tooltip" data-placement="bottom" title="{$smarty.server.REMOTE_ADDR}">
					<img src="{#assets#}/img/userbar/ip.png" alt="Votre adresse IP">
				</a>
				<a href="command.php"><img src="{#assets#}/img/userbar/command.png" alt="Se déconnecter"></a>
				<a href="common/logout.php"><img src="{#assets#}/img/userbar/logout.png" alt="Se déconnecter"></a>
			</div>
        {else}
            <p>Bienvenue, <a href="{#domain#}/modules/login.php">se connecter</a></p>
        {/if}
        {if $con & isset($next_matches) & !empty($next_matches)}
            <strong>Prochains matchs</strong><br>
            {section name=sec1 loop=$next_matches}
                {$next_matches[sec1].jour} {$next_matches[sec1].heure} {$next_matches[sec1].nom}<br>
            {/section}
        {/if}       
    </div>	     
</header>