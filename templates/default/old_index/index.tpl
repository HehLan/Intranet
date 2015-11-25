{\include:header.tpl}
<div id="header">
		<div id="banner">
		    <a href="index.php">
		    <img src="img/logoheh.png" alt="HEHLan" width="250px">
		    </a>
		</div>
		<div id="login">
		
	{\if:con}
		Bienvenue à toi {\login}, <a href="common/deco.php">se déconnecter</a><br>
	{\end}
	{\if:query_match_flag}
		<strong>Prochains matchs<strong><br />
		{\begin:next_match}
			{\next_match:tournoi}<br />
		{\end}
	{\end}
		</div>	     
 	</div>
	
    <div id="navigation">
	{\include:menu.tpl}
	</div>
	<div id="container">
		<!--<div id="contenu">

		</div>-->
		<div id="bloc_news">
		{\if:successful_query}
			{\begin:news}
				<div class="une_news" id="bloc_news_{\news:id_news}">
					<div class="titre_news" id="titre_news_{\news:id_news}" onclick="news_toggle({\news:id_news});">
						{\news:titre}
							<div class="date_news" id="footer_news_{\news:id_news}">
						{\news:quand}
					</div>
					</div>
					<div class="contenu_news" id="contenu_news_{\news:id_news}">
					{\news:texte}
					</div>
					
				</div>
			{\end}
		{\else}
			ERREUR NEWS SQL
		{\end}
		</div>		
		<div id="bloc_chat">
		{\if:con}
			<div id="bloc_chat_titre">
				HEHLan Chat
			</div>
			{\if:chat}
				<div id="bloc_chat_texte">			
					</div>
					<div id="bloc_chat_users">
						<strong>Connectés :</strong><br>				
					</div>
					<div id="bloc_chat_send">
						<input type="text" name="message" id="bloc_chat_message" /> <input type="button" value="Envoyer" id="bloc_chat_bouton" onclick="ecrire();"/>
					</div>
			{\else}
				<div id="bloc_chat_texte">			
					<strong>Sorry les gars ... le chat est désactivé :o/</strong>
				</div>
			{\end}
		{\else}
			<div id="bloc_chat_titre">
				Connectez vous pour accéder au Chat :
			</div>	
			<div id="bloc_connexion">
				<form method="POST">
				<table style="border:0px">
					<tr>
						<td><strong>Login</strong></td>
						<td><input type="text" name="login" /></td>
					</tr>
					<tr>
						<td><strong>Password</strong></td>
						<td><input type="password" name="pwd" /></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="Connexion" /></td>						
					</tr>					
				</table>
				</form>
			</div>
		{\end}
		</div>
	</div>
{\include:footer.tpl}