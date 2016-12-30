<?php
	$titre = "StudentCook : Erreur";
	ob_start();
	echo "<p> Une erreur est survenue : ".$erreur.'</p>';
	$contenu= ob_get_clean()
	require("View/layout.php");
?>
