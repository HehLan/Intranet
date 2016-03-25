{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="default/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/commandes.css" />
    </head>
    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}
        <div id="container" class="container-fluid">
            <div class="row" id="contenu">
                <h2>Commande</h2>
				<div id="commandesPane">
					<button class="btn btn-primary" id="btn-add-commande"
						data-toggle="modal" data-target="#commande-form">
						Ajouter une commande
					</button>
					<div class="panel-group" id="commandesList">
							Aucune commande trouvée
					</div>
					<div id="commande-form" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- Modal Content -->
							<div class="modal-content">
								<!-- Modal Header -->
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Passer commande</h4>
								</div>
								<!-- Modal Body -->
								<div class="modal-body">
									<form class="form-horizontal" role="form">
									  <div class="form-group">
										<label  class="col-sm-2 control-label"
												  for="inputEmail3">Email</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" 
											id="inputEmail3" placeholder="Email"/>
										</div>
									  </div>
									  <div class="form-group">
										<label class="col-sm-2 control-label"
											  for="inputPassword3" >Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control"
												id="inputPassword3" placeholder="Password"/>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <div class="checkbox">
											<label>
												<input type="checkbox"/> Remember me
											</label>
										  </div>
										</div>
									  </div>
									  <div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
										  <button type="submit" class="btn btn-default">Sign in</button>
										</div>
									  </div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										Fermer
									</button>
									<button type="button" class="btn btn-primary">
										Ajouter
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>                
        {include file="default/footer.tpl"}
        <script type="text/javascript" src="{#assets#}/js/commande.js"></script> 
    </body>
</html>