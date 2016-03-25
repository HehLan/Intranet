////////////////////
//		INIT
////////////////////
function getCommandes(){
	$.post(
		'commande.php',
		{
			'action' : 'getCommandes'
		},
		function(data){
			$('#commandesList').html(data);
		}
	);
};

$(function() {
	getCommandes();
});

$(document).on('dblclick','.commande-item', function() {
	var e = $(this),
		idComm = e.attr('id-commande');
	
});
