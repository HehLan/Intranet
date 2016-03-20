//
// Load dynamically the notification list
//
function notifTimer(){
	$.ajax({
    url: 'common/notif.php', 
    success: function(data) {
      $('#notifPane').html(data);
    }
  });
}; 
$('#notifBlock').click(function(){
	notifTimer();
});

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
	alert(id_notif)
	markAsSeen(id_notif);
});

