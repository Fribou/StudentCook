<?php
	$titre=$results['Nom'];
	ob_start();
	echo '<h1>' . $results['Nom'] .'</h1>';

	echo $results['ingredient1'];
	echo $results['ingredient2'];
	echo $results['ingredient3'];
	echo $results['ingredient4'];
	echo $results['ingredient5'];
	
	$contenu=ob_get_clean();
	require('layout.php');
?>
