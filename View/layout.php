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
				</ul>
			</nav>
		</header>
		<?php echo $contenu; ?>
	</body>
</html>
