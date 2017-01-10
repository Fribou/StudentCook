<?php
	$title="StudentCook".$results['NOMRECETTE'];
	ob_start();
	echo '<h1>' . $results['NOMRECETTE'] .'</h1>';
	echo $results['DEFINITION'];
	echo $results['INGREDIENT1'];
	echo $results['INGREDIENT2'];
	echo $results['INGREDIENT3'];
	echo $results['INGREDIENT4'];
	echo $results['INGREDIENT5'];
	
	$contenu=ob_get_clean();
	require('View/layout.php');
?>
