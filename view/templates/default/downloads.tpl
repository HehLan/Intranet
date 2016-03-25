{* Smarty *}
{foreach from=$downloads item=download}

  <a class="list-group-item" href="{#src#}/{$download.src}">{$download.title}</a>
    
{/foreach}