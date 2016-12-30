<?php
	$titre='StudentCook : Acueil';
	ob_start();

	$results['texte'];
	$contenu = ob_get_clean();
	require('layout.php');
?>