$('#commandesArticlesPane').on(function(){
	$.ajax{
		url : 'commandHandler.php',
		type : 'GET',
		data : {
			'action' : 'getArticles'
		}
		success : function(data) {
			)
		}
	};
});