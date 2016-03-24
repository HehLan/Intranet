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
			$('#commandesArticlesList').html(data);
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
			$('#commandesGroupList').html(data);
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
			$('#commandesList').html(data);
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

// validate modification
function validateArtTitle(e){
	var content = e.find('input').val();
	var idArt = e.closest('.panel').attr("id-article");
	$.post(
		'commandehandler.php',
		{
			'action' : 'updateArticleNom',
			'idArticle' : idArt,
			'nomArticle' : content
		},
		function(data) {
			getArticles();
			e.text(content);
		}
	);
}
function validateArtDescription(e){
	e.text(e.find('textarea').val());
}

// show add article form
$("#btn-add-article").click(function(){
	
});
// delete article
$(document).on("click","#btn-add-article .remove",function(){
	console.log("test");
});
// make the nom of article editable
$(document).on("dblclick",".article-nom",function(){
	var e = $(this);
	if (e.find('input').length){
		validateArtTitle(e);
	}
	else {
		var t = e.text();
		e.html($('<input />',{'value' : t}).val(t));
	}
});
// make the nom and description of article editable
$(document).on("dblclick",".article-description",function(){
	var e = $(this);
	if (e.find('textarea').length){
		validateArtDescription(e);
	}
	else {
		var t = e.text();
		e.html($('<textarea></textarea>').val(t));
	}
});
// if Enter is pressed
$(document).on("keypress",".article-nom", function(k){
	if(k.which==13) {
		var e = $(this);
		if (e.find('input').length){
			validateArtTitle(e);
		}
	}
});
$(document).on("keypress",".article-description", function(k){
	if(k.which==13) {
		var e = $(this);
		if (e.find('textarea').length){
			validateArtDescription(e);
		}
	}
});