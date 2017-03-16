<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="Web/CSS/bootstrap.min.css" type="text/css">
		<link href="Web/CSS/font-awesome.min.css" rel="stylesheet">
		<link href="Web/CSS/foundation.min.css" rel="stylesheet">
		<?php
		if(isset($_GET['action']) && $_GET["action"]=='forum'){
			echo '<link rel="stylesheet" href="Web/CSS/styles.css" type="text/css">';
			echo '<link rel="stylesheet" href="Web/CSS/style.css" type="text/css">';
		}
		else{
		echo '<link rel="stylesheet" href="Web/CSS/styles.css" type="text/css">';
		}
		?>
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
