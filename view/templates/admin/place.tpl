<script type='text/JavaScript'>
	{if data[0] == 0}
		alert("OK \n"
			+"la place de "
			+{$pseudo}
			+" est place au numero "
			+{$joueurs['numero']}
	{else}
		alert("ERREUR \n"
			+"la place numero "
			+{$joueurs['numero']}
			+" est prise par "
			+{$joueurs['pseudo']}
	{/if}	
	');
	window.location.href='emplacements.php';
</script>