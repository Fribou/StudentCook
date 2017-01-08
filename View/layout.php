<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> <?php echo $title; ?> </title>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li> <a href="index.php"> Accueil </a> </li>
					<li> <a href="index.php?action=recette"> Mes recettes </a> </li>
					<li> <a href="index.php?action=ingredient"> Ingredients </a> </li>
					<li> <a href="index.php?action=inscription"> Inscription </a> </li>
					<li> <a href="index.php?action=connexion"> Connexion </a> </li>
					<?php
						if ($_SESSION['Statut']=='Membre')
						{
							<li> <a href="index.php?action=proposer"> Proposer une recette </a> </li>
						}
						else if ($_SESSION['Statut']=='Administrateur')
						{
							<li> <a href="index.php?action=confirmer"> Confirmer une recette </a> </li>
						}
					?>
				</ul>
			</nav>
		</header>
		<?php echo $contenu; ?>
	</body>
</html>
