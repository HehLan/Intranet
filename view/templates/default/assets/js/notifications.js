var refreshPeriod = 5000,
	notifPicOn = "notif_on.png",
	notifPicOff = "notif_off.png";
// Change notif icon
function setNotifIconPath(nameFile){
	var srcPath = $('#notifBlock>img').attr('src')
	var justPath = srcPath.substring(-1,srcPath.lastIndexOf('/')+1);
	$('#notifBlock>img').attr('src',justPath+nameFile);
};
function setNotifIcon(state){
	if(state){
		setNotifIconPath(notifPicOn);
	} else {
		setNotifIconPath(notifPicOff);
	}
}

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
			if(data.val().match('#notif-not-seen#i')){
				setNotifIcon(true);
			}
		}
	});
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
	if($('.notif-not-seen').length==0){setNotifIcon(false)};
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
				setNotifIcon(true);
			};
		}
	});
	// conditionner par un bool dans success
	// sinon la fonction ne complete jamais car elle se rappelle 
	// sans jamais finir tant que ses processus enfants en appellent de nouveaux
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