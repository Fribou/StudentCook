<header class="header-login-signup">

	<div class="header-limiter">

		<h1><a href="./index.php">StudentCook</a></h1>
			<nav>
				<ul>
					<li> <a href="index.php"> Accueil </a> </li>
					<li> <a href="index.php?action=recette"> Mes recettes </a> </li>
					<li> <a href="index.php?action=ingredient"> Ingredients </a> </li>
					<?php
						if(!isset($_SESSION['identifiant'])){
							echo '<li> <a href="index.php?action=inscription"> Inscription </a> </li>
						<li> <a href="index.php?action=connexion"> Connexion </a> </li>';
						}
					?>
					<li> <a href="index.php?action=deconnexion"> Deconnexion </a> </li>
					<?php
					if(isset($_SESSION['identifiant']))
						echo '<br>'.$_SESSION['identifiant'];
					?>
				</ul>
			</nav>
		</div>