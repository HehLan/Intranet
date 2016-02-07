{config_load file="templates/default/paths.conf"}
<header id="header" class="row" >
	<div id="logo" class="col-lg-9 col-sm-9 col-xs-12" >
		<a href="index.php">
		    <img src="{#domain#}/assets/img/logoheh.png" alt="HEHLan" width="250px">
		</a>
	</div>
	<div id="login" class="col-lg-3 col-sm-3 col-xs-12" >
	{if $con}
		Bienvenue à toi {$SESSION.login}, <a href="common/deco.php">se déconnecter</a><br>
		{if isset($next_matches) & !empty($next_matches)}
			<strong>Prochains matchs</strong><br>
			 {section name=sec1 loop=$next_matches}
				{$next_matches[sec1].jour} {$next_matches[sec1].heure} {$next_matches[sec1].nom}<br>
			 {/section}
		{/if}
	{/if}
	</div>	     
</header>