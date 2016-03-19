{* Smarty *}
{foreach from=$notifications item=notification}
	<div class="notif-box">
		<a class="btn btn-primary notif-head {if !{$notification.seen}}notif-not-seen{/if}" 
			role="button" data-toggle="collapse" href="#notif{$notification.id_notifications}" 
			aria-controls="#notif{$notification.id_notifications}" id-notif="{$notification.id_notifications}">
		{$notification.titre}
		{$notification.date}
		</a>
		<div id="notif{$notification.id_notifications}" class="collapse notif-body">
			{$notification.message}
		</div>
	</div>
{/foreach}
