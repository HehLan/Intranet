class Notifier{
	constructor(){
		this.cacheNotif = {
			
		}
	}
}

$(new Notifier());

// Refresh periodically the Joueur notification list
var refreshPeriod = 1000;
function notifTimer(){
	$.ajax({
    url: 'common/notif.php', 
    success: function(data) {
      //$('.popover-content').html(data);
      $('#logo').html(data);
	  
      //setTimeout(notifTimer, refreshPeriod);
    },
    complete: function() {
      // Schedule the next request when the current one's complete
      //setTimeout(notifTimer, refreshPeriod);
    }
  });
  setTimeout(notifTimer, refreshPeriod);
}; 
$(notifTimer());

// Mark as seen for the selected notification
function markAsSeen(id_notif){
	$.ajax({
		url: 'common/notif.php',
		type: 'GET',
		data: {
			'type': 'set',
			'id_notif': id_notif
		}
	});
};

$('.notif-not-seen').click(function(){
	var id_notif = $(this).attr('id-notif').val();
	markAsSeen(id_notif);
});

