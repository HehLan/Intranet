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

//////////////////////
//		INSERT
//////////////////////
$(document).on('dblclick','.commande-item', function() {
	var e = $(this),
		idComm = e.attr('id-commande');
});

$('.button-validate-commande').click(function(){
	$.post(
		'commande.php',
		{
			'action' : 'insertCommande',
			'total' : total,
			'comment' : comment,
			
		},
		function(data) {
			getCommandes();
		}
	)
});

/////////////////////
//		REMOVE
/////////////////////
$(document).on('click', '.remove-commande', function() {
	var e = $(this),
		idComm = e.closest('.panel').attr("id-commande");
	$.post(
		'commande.php',
		{
			'action' : 'removeCommande'
			'idCommande' : idComm
		},
		function() {
			e.remove()
		}
	);
});