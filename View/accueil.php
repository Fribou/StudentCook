<?php
	$title='StudentCook : Accueil';
	ob_start();
	//inscription au site valider
	if (isset($_GET['action']) && $_GET["action"]=='confirmAjout') {
		echo '<h3>Votre inscription a été validée, merci de faire partie de notre projet vous pouvez dés a present vous connecter et profitez des fonctionnalités de nos utilisateurs comme enregistrer vos liste de recette.</h3>';
	}
	echo '<div class="texte">Les recettes les plus cliqués</div><br>';
	echo'<div id="cont">';
	echo'<div id="inner">';
	foreach($recetteConsult as $re){
		echo'<div class="child">
		 <p><img id = "imgconsult"  src="./'.$re['IMAGE'].'" alt="tortilla" width="200" /></p>
		<p>'.$re['NOMRECETTE'].'</p>
		</div>';
	}
	echo'</div>';
	echo'</div>';

	//affiche la liste de recette choisi
	if(isset($_SESSION['arrayRecette']) && !empty($_SESSION['arrayRecette'])){
			echo '<div class="texte">Votre liste de recette choisi</div>';
			//echo' <ol class="rounded-list">';
			echo'<table class="table-fill">
			';
			foreach($result as $recette){
				if(in_array($recette['IDRECETTE'], $_SESSION['arrayRecette'])){
					echo '<tr>';
					echo '
					<form action="index.php" method="post">
					  <td><img src="./'. $recette['IMAGE'].'" alt="tortilla" width="200" /></td>
					  <td>'.$recette['NOMRECETTE'].'</td>
					  <td><a href='.'"index.php?recetteListeid='.$recette['IDRECETTE'].'#popup1">details de la recette</a></td>
					</form>
					';
					echo '</tr>';
				}
			}
			echo'</tbody>
		</table>';

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
		if (!isset($_GET['action']))
		echo'<div class="texte">Votre liste de recette est vide<br><br><br></div>';
	}
	// affiche les recettes proposes par les membres
if(isset($_SESSION['typeUtilisateur']) and $_SESSION['typeUtilisateur']=='Admin'){
	if(isset($recettePropose) and $recettePropose!=Null){
		echo '<div class="texte">Des utilisateurs ont propose ces recettes, voulez-vous les ajouter au site?</div>';
		//echo' <ol class="rounded-list">';
		echo'<table class="table-fill">';

		foreach($recettePropose as $recette){
			echo '<tr>';
			echo '
			<form action="index.php" method="post">
			  <td><img src="./'. $recette['IMAGE'].'" alt="tortilla" width="200" /></td>
			  <td>'.$recette['NOMRECETTE'].'</td>
			  <td><a href='.'"index.php?recetteid='.$recette['IDRECETTE'].'#popup1">details de la recette</a></td>
			  <td><button type="submit" name="ajoutRecettePropose" value="'.$recette['IDRECETTE'].'">Ajouter</button></td>
			  <td><button type="submit" name="effacerRecettePropose" value ="'.$recette['IDRECETTE'].'">X</button></td>
		</form>
			';
			echo '</tr>';
		}
		echo'
		</table>';
			echo '	 <div id="popup1" class="overlay">
						<div class="popup">
							<h1>Détails de la recette</h1>
								<a class="close" href="">&times;</a>
									<div class="content" id="center">';

									echo '<h1>' . $detailPropose['NOMRECETTE'] .'</h1>';
									echo '<br />';
									echo '<img src="./'. $detailPropose['IMAGE'].'" alt="tortilla" width="300" /><br />';
									echo $detailPropose['DEFINITION'];
									echo '<br />';
									echo '<br />';
									echo 'Ingrédients:';
									echo '<br />';
									echo $detailPropose['INGREDIENT1'];
									echo '<br />';
									echo $detailPropose['INGREDIENT2'];
									echo '<br />';
									echo $detailPropose['INGREDIENT3'];
									echo '<br />';
									echo $detailPropose['INGREDIENT4'];
									echo '<br />';
									echo $detailPropose['INGREDIENT5'];

									echo'</div>
									</div>
									</div>';
	}
	else{
		echo'<div class="texte"> Pas de propositions de recettes en cours</div>';
	}
}


	$contenu = ob_get_clean();
	require('layout.php');
?>
