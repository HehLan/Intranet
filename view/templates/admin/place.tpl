{* Smarty *}
<script type='text/JavaScript'>
    {if $place_libre}
        alert("OK \n la place de {$pseudo} a été attribuée");
    {else}
        alert("ERREUR \n la place numero {$place['numero']} est prise par {$place['occupantPseudo']}");
    {/if}	
    window.location.href='{#domain#}/admin/emplacements.php';
</script>