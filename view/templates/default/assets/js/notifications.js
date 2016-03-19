$(function notifTimer(){
	$.ajax({
    url: 'common/notif.php', 
    success: function(data) {
      $('.popover-content').html(data);
    },
    complete: function() {
      // Schedule the next request when the current one's complete
      setTimeout(notifTimer, 5000);
    }
  });
});

/*
$.POST
{
	
}*/