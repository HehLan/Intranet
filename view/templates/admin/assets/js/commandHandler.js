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
			// revert to display
			e.text(content.replace('/\n/g', "<br />"))
		}
	);
};
function validateArtDescription(e){
	var content = e.find('textarea').val();
	var idArt = e.closest('.panel').attr("id-article");
	$.post(
		'commandehandler.php',
		{
			'action' : 'updateArticleDesc',
			'idArticle' : idArt,
			'descArticle' : content
		},
		function(data) {
			// revert to display
			e.text(content.replace('/\n/g', "<br />"));
		}
	);
};

// add empty article
$("#btn-add-article").click(function(){
	$.post(
		'commandehandler.php',
		{
			'action' : 'insertArticle'
		},
		function(data){
			getArticles();
		}
	);
});
// delete article
$(document).on("click",".remove",function(){
	var itemArt = $(this).closest('.panel'),
		idArt = itemArt.attr("id-article");
	$.post(
		'commandehandler.php',
		{
			'action' : 'removeArticle',
			'idArticle' : idArt
		}
	);
	$(itemArt).remove();
});

// animate the glyphicon
$(document).on('click','.articleExpander, .commandeExpander', function(){
	var classCollapse = "glyphicon-chevron-up",
		classExpand = "glyphicon-chevron-down";
	if($(this).hasClass(classCollapse)){
		$(this).removeClass(classCollapse);
		$(this).addClass(classExpand);
	} 
	else {
		$(this).removeClass(classExpand);
		$(this).addClass(classCollapse);
	}
});

// make the nom of article editable
$(document).on("dblclick","#commandesArticlesList .panel-heading",function(){
	var e = $(this).children().find('.article-nom');
	if (e.find('input').length){
		// valid the modifications
		validateArtTitle(e);
	}
	else {
		//make the input editable
		var t = e.text().replace(/<br \/>/g, "\n");
		e.html($('<input />',{'value' : t}).val(t));
	}
});
// make the description of article editable
$(document).on("dblclick","#commandesArticlesList .panel-collapse",function(){
	var e = $(this).children().find('.article-description');
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
$(document).on("keydown",".article-description", function(k){
	// allow to edit by maintenaing shift+enter
	if(k.which==13) {
		var e = $(this);
		if((!k.shiftKey) && (e.find('textarea').length)){
			validateArtDescription(e);
		}
	}
});