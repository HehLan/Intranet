var refreshPeriod = 5000,
	notifPicOn = "img/userbar/notif_on.png",
	notifPicOff = "img/userbar/notif_off.png";

//
// Load dynamically the notification list
//
$('#notifBlock').click(function(){
	var e = $(this);
	$.ajax({
		url: 'common/notif.php', 
		success: function(data) {
			e.attr('notif-lastupdate', $.now());
			$('#notifPane').html(data);
		}
	});
	$('#notifBlock>img').attr('src',notifPicOff);
}); 

//
//	Mark opened tabs as seen when opened
//
$(document).on('click','.notif-not-seen', function(e){
	var id_notif = $(this).attr('notif-id');
	$.ajax({
		url: 'common/notif.php',
		type: 'GET',
		data: {
			'type': 'set',
			'id_notif': id_notif
		}
	});
	$(this).removeClass('notif-not-seen');
	$('#notifBlock>img').attr('src',notifPicOff);
});

//
// Refresh notifications
//
$(function refreshNotif(){
	$.ajax({
		url: 'common/notif.php',
		type: 'GET',
		data: {
			'lastUpdate': $('#notifBlock').attr('notif-lastupdate')
		},		
		success: function(data) {
			if($.trim(data).length != 0) {
				$('#notifBlock').attr('notif-lastupdate', $.now());
				$('#notifPane').prepend(data);
				$('#notifBlock>img').attr('src',notifPicOn);
			};
		}
	});
	setTimeout(refreshNotif, refreshPeriod);
});

//
//	Remove notification
//
$(document).on('click','.remove', function(){
	var id_notif = $(this).parent().attr('notif-id');
	console.log(id_notif);
	$.ajax({
		url: 'common/notif.php',
		type: 'GET',
		data: {
			'type': 'del',
			'id_notif': id_notif
		}
	});
	$(this).parent().parent().remove();
});