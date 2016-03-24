{* Smarty *}
{foreach $articles item=article}
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingArt{$article.id_article}"
			data-toggle="collapse" 
			data-parent="#commandesArticlesList" href="#collapseArt{$article.id_article}" 
			aria-expanded="false">
		  <h4 class="panel-title">
			<span class="article-nom">{$article.nom}</span>
			<i class="remove glyphicon glyphicon-remove-sign glyphicon-white"></i>
		  </h4>
		</div>
		<div id="collapseArt{$article.id_article}" class="panel-collapse collapse" 
			role="tabpanel">
			<div class="panel-body">
				<span class="article-description">{$article.description}</span>
			</div>
		</div>
	</div>
{/foreach}