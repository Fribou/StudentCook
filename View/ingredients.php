<?php
	$title='Liste des ingr�dients';
	ob_start();
?>

<h1> Liste des ingr�dients </h1>

<?php
	$contenu=ob_get_clean();
	require('View/layout.php');
?>