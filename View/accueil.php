<?php
	$title='StudentCook : Accueil';
	ob_start();
	
	if (isset($_GET['action']) && $_GET["action"]=='confirmAjout') {
		echo 'Votre inscription a été validée, merci de faire partie de notre projet vous pouvez dés a present vous connecter et profitez des fonctionnalités de nos utilisateurs comme enregistrer vos liste de recette.';
	}
	
	$contenu = ob_get_clean();
	require('layout.php');
?>