<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="Web/CSS/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="Web/CSS/styles.css" type="text/css">
		<title> <?php echo $title; ?> </title>
	</head>
	<body>
		<header>
		 <?php
      // -------------------------------------- HEADER --------------------------------------
      include './includes/header.php';
			?>
		</header>
		<?php echo $contenu; ?>
		<script src="Web/JS/jquery.js"></script>
		<script src="Web/JS/bootstrap.js"></script>
	</body>
</html>
