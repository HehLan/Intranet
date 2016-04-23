{* Smarty *}
{foreach $items item=item}
	<div class="" id-article="{article.id_article}">
		<!--
		//groupe
		//article (loaded from groupe)
		//nombre (updown)
		//prix (loaded from article*nombre)
		//remove article from commande
		-->
		<span class="groupe-article">
			<select class="groupe_select">
				{include file="default/listRows.tpl" rows={$groupesArt}}
			</select>
		</span>
		<span class="article-article">
			<select class="article_select">
			</select>
		</span>
		<span class="number-article"><input class="number-article-input" type="number" min="0" max="10" step="1" value ="0"/>
		<span class="prix-article">0.00€</span>
		<span class="glyphicon glyphicon-remove remove-article"></span>
	</div>
{/foreach}