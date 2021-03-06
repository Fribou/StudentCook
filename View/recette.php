<?php
	$title='StudentCook : Recettes';
	ob_start();
	$tabOrigine = array();
	$condition = true;
	$i = 1;
	//ajout recette que disponible pour admin
	if(isset($_SESSION['typeUtilisateur']) && $_SESSION['typeUtilisateur']=='Admin' ){
		echo '<form method="post" action="./index.php?action=AjoutRecette">

			<div class="hot-container">
				<p>
					<input class="btn btn-blue" name="ajoutRecette" value="Ajouter une Recette" type="submit"></input>
				</p>
			</div>
		</form>';
	}
	// proposer recette disponible que pour Membre

	if(isset($_SESSION['typeUtilisateur'])&& $_SESSION['typeUtilisateur']=='Membre' ){
		echo '<form method="post" action="./index.php?action=ProposeRecette">
		<div class="hot-container">
				<p>
					<input class="btn btn-blue" name="proposerRecette" value="Proposer une Recette" type="submit"></input>
				</p>
			</div></form>';
	}

if(empty($results)){
		echo "<div class='texte'>Existe aucune Recette avec ces ingrédients</div>";
	}
	else{
?>
	<h1>Liste des Recettes</h1>
	<?php

	echo '<table class="table-fill">';
	//affiche liste recette
		foreach($results as $donnees){
				echo '<tr>';
				echo '<td><img src="./'. $donnees['IMAGE'].'" alt="tortilla" width="200" /></td>';
				echo '<td>'.$donnees['NOMRECETTE'].'</td>';

				if(isset($_SESSION['rechercheIngre']) and $_SESSION['rechercheIngre']== true)
					echo '<td><a href='.'"index.php?action=ingredient&rechercheRecette='.$donnees['IDRECETTE'].'#popup1">détails de la recette</a></td>';

				else
					echo '<td><a href='.'"index.php?action=recette&recetteid='.$donnees['IDRECETTE'].'#popup1">Détails de la recette</a></td>';

				echo '<td><a href='.'"index.php?action=recette&incr='.$donnees['IDRECETTE'].'">Ajouter recette a votre liste</a></td>';
				echo'<form action="index.php?action=recette" method="post">';
				echo'<td><button type="submit" name="effacerRecette" value ="'.$donnees['IDRECETTE'].'">X</button></form></td>';
				echo '</tr>';
			}


	 ?>
	 </table>


<?php
	//Details de la recette
	echo '	 <div id="popup1" class="overlay">
						<div class="popup">
							<h1>Détails de la recette</h1>
								<a class="close" href="">&times;</a>
									<div class="content" id="center">';

									echo '<h1>' . $result['NOMRECETTE'] .'</h1>';
									echo '<br />';
									echo '<img src="./'.$result['IMAGE'].'" alt="image" width="200" /><br />';
									echo $result['DEFINITION'];
									echo '<br />';
									echo '<br />';
									echo 'Ingrédients:';
									echo '<br />';
									echo $result['INGREDIENT1'];
									echo '<br />';
									echo $result['INGREDIENT2'];
									echo '<br />';
									echo $result['INGREDIENT3'];
									echo '<br />';
									echo $result['INGREDIENT4'];
									echo '<br />';
									echo $result['INGREDIENT5'];

									echo'</div>
									</div>
									</div>';
	}
//affiche la liste de choix de recette
echo'<br />';
if(isset($_SESSION['arrayRecette']) && !empty($_SESSION['arrayRecette'])){

			echo '<div class="texte">Votre liste de recette choisi</div>';
			echo' <ol class="rounded-list">';
			foreach($results as $recette){
				if(in_array($recette['IDRECETTE'], $_SESSION['arrayRecette'])){
					echo '<li><a href="">'.$recette['NOMRECETTE'].'</a></li>';
				}
			}


			echo'</ol>';
			//propose effacement de la liste de choix de recette

			echo'<div class="texte">Pas satisfait de votre liste?</div>
		<form method="post" action="index.php?action=recette">
		<div class="hot-container">
				<p>
					<input class="btn btn-blue" name="effacerArray" value="Effacer liste" type="submit"></input>
				</p>
			</div>';
		}


	$contenu = ob_get_clean();
	require('View/layout.php');
?>
