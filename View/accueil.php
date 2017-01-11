<?php
	$title='StudentCook : Accueil';
	ob_start();
	if (isset($_GET['action']) && $_GET["action"]=='confirmAjout') {
		echo 'Votre inscription a été validée, merci de faire partie de notre projet vous pouvez dés a present vous connecter et profitez des fonctionnalités de nos utilisateurs comme enregistrer vos liste de recette.';
	}
	if(isset($_SESSION['arrayRecette']) && !empty($_SESSION['arrayRecette'])){
			echo 'Votre liste de recette choisi';
			foreach($result as $recette){
				if(in_array($recette['IDRECETTE'], $_SESSION['arrayRecette'])){
					echo '<li>'.$recette['NOMRECETTE'].'</li>';
				}
			}
			
		echo'Pas satisfait de votre liste?
		<form method="post" action="./index.php">
		<input  name="effacerArray" value="Effacer liste" type="submit"></input></form>';
	}
	else{
		echo'Votre liste de recette est vide';
	}
	
	
		
	
	
	$contenu = ob_get_clean();
	require('layout.php');
?>