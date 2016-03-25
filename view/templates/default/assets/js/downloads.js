
//
// Load dynamically the downloads list
//
$('#downloadBlock').click(function(){
    var e = $(this);
    $.ajax({
        url: 'modules/downloads.php', 
        success: function(data) {
            $('#downloadPane').html(data);
        }
    });
}); 





