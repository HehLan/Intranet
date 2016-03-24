///////////////////
//		INIT
///////////////////
function getArticles(){
	$.post(
		'commandehandler.php',
		{
			'action' : 'getArticles'
		},
		function(data){
			$('#commandesArticlesPane').html(data);
		}
	);
};
function getGroupes(){
	$.post(
		'commandehandler.php',
		{
			'action' : 'getGroupes'
		},
		function(data){
			$('#commandesGroupPane').html(data);
		}
	);
};
function getCommandes(){
	$.post(
		'commandehandler.php',
		{
			'action' : 'getCommandes'
		},
		function(data){
			$('#commandesPane').html(data);
		}
	);
};

$(function(){
	getArticles();
	getGroupes();
	getCommandes();
});

///////////////////
//	ARTICLES
///////////////////
$("#btn-add-article").click(function(){
	
});
$(document).on("click","#btn-add-article .remove",function(){
	console.log("test");
});