<?php
	$title='StudentCook : Accueil';
	ob_start();
	//inscription au site valider
	if (isset($_GET['action']) && $_GET["action"]=='confirmAjout') {
		echo 'Votre inscription a été validée, merci de faire partie de notre projet vous pouvez dés a present vous connecter et profitez des fonctionnalités de nos utilisateurs comme enregistrer vos liste de recette.';
	}
	
	//affiche la liste de recette choisi
	if(isset($_SESSION['arrayRecette']) && !empty($_SESSION['arrayRecette'])){
			echo '<div class="texte">Votre liste de recette choisi</div>';
			echo' <ol class="rounded-list">';
			foreach($result as $recette){
				if(in_array($recette['IDRECETTE'], $_SESSION['arrayRecette'])){
					echo '<li><a href="">'.$recette['NOMRECETTE'].'</a></li>';
				}
			}
			echo'</ol>';
		// propose d'effacer la liste de choix de recette	
		echo'<div class="texte">Pas satisfait de votre liste?</div>
		<form method="post" action="./index.php">
		
		<div class="hot-container">
				<p>
					<input class="btn btn-blue" name="effacerArray" value="Effacer liste" type="submit"></input>
				</p>
			</div>';
	}
	else{
		echo'<div class="texte">Votre liste de recette est vide<br><br><br></div>';
	}
	// affiche les recettes proposes par les membres
	if(isset($recettePropose) and $recettePropose!=Null){
		echo '<div class="texte">Des utilisateurs ont propose ces recettes, voulez-vous les ajouter au site?</div>';
		echo' <ol class="rounded-list">';
		foreach($recettePropose as $recette){
			echo '<li><a href="">'.$recette['NOMRECETTE'].'</a></li>';
		}
			echo'</ol>';
	}
		
	
	
	$contenu = ob_get_clean();
	require('layout.php');
?>