{* Smarty *}
<button class="btn btn-primary" id="btn-add-article">
	Ajouter un article
</button>
{foreach $articles item=article}
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingArt{$article.id_article}">
		  <h4 class="panel-title">
			<a role="button" data-toggle="collapse" 
				data-parent="#commandesArticlesPane" href="#commandesArticlesPane" 
				aria-expanded="false" aria-controls="collapseArt{$article.id_article}">
				{$article.nom}
			</a>
			<i class="remove glyphicon glyphicon-remove-sign glyphicon-white"></i>
		  </h4>
		</div>
		<div id="collapseArt{$article.id_article}" class="panel-collapse collapse in" 
			role="tabpanel" aria-labelledby="headingArt{$article.id_article}">
			<div class="panel-body">
				{$article.description}
			</div>
		</div>
	</div>
{/foreach}