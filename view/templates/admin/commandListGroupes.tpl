{* Smarty *}
<div id="side_command_group">
	{foreach $articles item=article}
	<div class="panel panel-default" id-article="{$article.id_article}">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<span class="article-nom">{$article.nom}</span>
		  </h4>
		</div>
		<div id="collapseArt{$article.id_article}" class="panel-collapse collapse" 
			role="tabpanel" aria-labelledby="headingArt{$article.id_article}">
			<div class="panel-body">
				<span class="article-description">{$article.description}</span>
			</div>
		</div>
	</div>
	{/foreach}
</div>
{foreach $groupes item=groupe}
	<div class="panel panel-default" id-grp="{$groupe.id_groupe}">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<span class="glyphicon glyphicon-chevron-up articleExpander glyphicon-white" 
				role="tab" id="headingArt{$article.id_article}"
				data-toggle="collapse" 
				data-parent="#commandesArticlesList" href="#collapseArt{$article.id_article}" 
				aria-expanded="true">
			</span>
			<span class="article-nom">{$groupe.nom}</span>
			<i class="remove glyphicon glyphicon-remove-sign glyphicon-white"></i>
		  </h4>
		</div>
		<div id="collapseArt{$article.id_article}" class="panel-collapse collapse" 
			role="tabpanel" aria-labelledby="headingArt{$article.id_article}">
			<div class="panel-body">
				<span class="article-description">{$article.description}</span>
			</div>
		</div>
	</div>
	<div>
		<input class="article_price" type="number" min="0" step="0.01" value ="0"/>
	</div>
{/foreach}