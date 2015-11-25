		<div id="footer">
			<div id="about"><p>HEHLan All Rights Reserved 'Copyright' 2014</p></div>
			<div id="nothinghere"><img src="img/logo3.png" alt="CEHECOFH"></div>
			<div id="social"><a href="http://www.heh.be" target="_blank"><img src="img/logo4.png" alt="HeH" border="0"></a></div>
		</div>
		{\if:chat}
		<script type="text/javascript">
				
				$("#bloc_chat_message").keyup(function(event){
					if(event.keyCode == 13){
						$("#bloc_chat_bouton").click();
					}
				});
			
			afficher(0);
			users();
	
	
		</script>
		{\end}
	</body>
</html>