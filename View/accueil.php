<?php
	$title='StudentCook : Accueil';
	ob_start();
	//inscription au site valider
	if (isset($_GET['action']) && $_GET["action"]=='confirmAjout') {
		echo 'Votre inscription a été validée, merci de faire partie de notre projet vous pouvez dés a present vous connecter et profitez des fonctionnalités de nos utilisateurs comme enregistrer vos liste de recette.';
	}

	//affiche la liste de recette choisi
	if(isset($_SESSION['arrayRecette']) && !empty($_SESSION['arrayRecette'])){
			echo 'Votre liste de recette choisi';
			foreach($result as $recette){
				if(in_array($recette['IDRECETTE'], $_SESSION['arrayRecette'])){
					echo '<li>'.$recette['NOMRECETTE'].'</li>';
				}
			}
		// propose d'effacer la liste de choix de recette
		echo'Pas satisfait de votre liste?
		<form method="post" action="./index.php">
		<input  name="effacerArray" class"btn btn-primary" value="Effacer liste" type="submit"></input></form>';
	}
	else{
		echo'Votre liste de recette est vide<br><br><br>';
	}
	// affiche les recettes proposes par les membres
	if(isset($recettePropose) and $recettePropose!=Null){
		echo 'Des utilisateurs ont propose ces recettes, voulez-vous les ajouter au site?';
		foreach($recettePropose as $recette){
			echo '<li>'.$recette['NOMRECETTE'].'</li>';
		}
	}



	$contenu = ob_get_clean();
	require('layout.php');
?>
