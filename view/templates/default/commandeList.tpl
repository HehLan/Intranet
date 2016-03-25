{* Smarty *}
{foreach $commandes item=commande}
	<div class="panel panel-default" id-commande="{$commande.id_commande}">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<span class="glyphicon glyphicon-chevron-down commandeExpander glyphicon-white" 
				role="tab" id="headingComm{$commande.id_commande}"
				data-toggle="collapse" 
				data-parent="#commandesList" href="#collapseComm{$commande.id_commande}" 
				aria-expanded="true">
			</span>
			<span class="commande-nom">{$commande.nom}</span>
			<div class="float-me">
				<span class="commande-date">il y a {$commande.date}</span>
				<span class="paid glyphicon glyphicon-euro" commande-status="{$commande.paye}"
					{if $commande.paye}style="color:goldenrod"{/if}>
				</span>
				<span class="commanded glyphicon glyphicon-earphone" commande-status="{$commande.commanded}"
					{if $commande.commanded}style="color:darkblue"{/if}>
				</span>
				<span class="received glyphicon glyphicon-ok" commande-status="{$commande.disponible}"
					{if $commande.disponible}style="color:darkgreen"{/if}>
				</span>
				{if !$commande.commanded}
					<span class="remove glyphicon glyphicon-remove-sign"></span>
				{/if}
			</span>
		  </h4>
		</div>
		<div id="collapseComm{$commande.id_commande}" class="panel-collapse collapse in" 
			role="tabpanel" aria-labelledby="headingComm{$commande.id_commande}">
			<div class="panel-body">
				<div class="commande-description">
					<div class="commande-items">
					{foreach $commande.commande item=item}
						<div class="commande-item">
							<div class="commande-item-quantite col-md-2">{$item.quantite}X</div>
							<div class="commande-item-nom col-md-4">{$item.nom}</div>
							<div class="commande-item-grp col-md-4">{$item.grp}</div>
							<div class="commande-item-prix col-md-2">{$item.prix} €</div>
						</div>
					{/foreach}
					</div>
					<div class="commande-closing-items">
						<div class="commande-comment col-md-offset-1 col-md-8">{$commande.comment}</div>
						<div class="commande-total col-md-2">TOTAL {$commande.total}€</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{/foreach}