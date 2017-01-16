<?php
$title = "StudentCook : Inscription";
ob_start();


//On est dans la page de formulaire


echo'<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h1>Inscription</h1>
				<p>Pour vous inscrire, veuillez remplir les champs ci dessous:</p>
					<form class="" method="post" action="./index.php?action=inscription">

					<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Nom</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="nom" id="nom"  placeholder="Entrer votre nom"/>
							</div>
						</div>
					</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="mail" id="mail"  placeholder="Entrer votre mail"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Pseudo</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="identifiant" id="identifiant"  placeholder="Entrer votre pseudo"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Entrer votre mot de passe"/>
								</div>
							</div>
						</div>


						<div class="form-group ">
							<input  type="submit" value="Inscription" id="button" class="btn btn-primary btn-lg btn-block login-button"/>
						</div>

					</form>
				</div>
			</div>
		</div>';

if(isset($_GET['donnees'])){
  if($_GET['donnees']=='error'){
	echo '<p id="warning">Veuillez remplir tous les champs svp.</p>';
	}
}

$contenu = ob_get_clean();
require('View/layout.php');

?>
