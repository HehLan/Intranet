{* Smarty *}
{foreach from=$notifications item=notification}
	<div class="notifWidget">
		<a class="btn btn-primary notif-head {if !{$notification.seen}}notif-not-seen{/if}" 
			role="button" data-toggle="collapse" href="#notif{$notification.id_notifications}" 
			aria-controls="#notif{$notification.id_notifications}" 
			notif-id="{$notification.id_notifications}">
			<i class="remove glyphicon glyphicon-remove-sign glyphicon-white"></i> 
			{$notification.titre}
			<span class="notifDate">
				{$notification.date}
			</span>
		</a>
		<div id="notif{$notification.id_notifications}" class="collapse notif-body">
			{$notification.message}
		</div>
	</div>
{/foreach}
