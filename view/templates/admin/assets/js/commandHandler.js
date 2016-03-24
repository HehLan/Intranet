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
$("#btn-add-article").click(function(){
	
});
$(document).on("click","#btn-add-article .remove",function(){
	console.log("test");
});
/*$(document).on("dblclick",".article-nom",function(){
	 $('.article-nom').each(
        function(){
			var e = $(this);
            if (e.find('input').length){
                e.text(e.find('input').val());
            }
            else {
                var t = e.text();
                e.html($('<input />',{'value' : t}).val(t));
            }
        });
});*/
$(document).on("dblclick",".article-nom, .article-description",function(){
	var e = $(this);
	if (e.find('input').length){
		e.text(e.find('input').val());
	}
	else {
		var t = e.text();
		e.html($('<input />',{'value' : t}).val(t));
	}
});
// validate modification