<?php
	$title='StudentCook : Recettes';
	ob_start();
	$tabOrigine = array();
	$condition = true;
	$i = 1;
	//ajout recette que disponible pour admin
	if(isset($_SESSION['typeUtilisateur']) && $_SESSION['typeUtilisateur']=='Admin'){
		echo '<form method="post" action="./index.php?action=recette">

			<div class="hot-container">
				<p>
					<input class="btn btn-blue" name="ajoutRecette" value="Ajouter une Recette" type="submit"></input>
				</p>
			</div>
		</form>';
	}
	// proposer recette disponible que pour Membre

	if(isset($_SESSION['typeUtilisateur'])&& $_SESSION['typeUtilisateur']=='Membre' && (is_null($_POST['proposeRecette']))){
		echo '<form method="post" action="./index.php?action=recette#popup2">
		div
		<input class="boutonAjout" name="proposerRecette" value="Proposer une Recette" type="submit"></input></form>';
	}

	echo '<div id="popup2" class="overlay">
					<div class="popup">
						<h1>Recette proposée</h1>
							<a class="close" href="">&times;</a>
								<div class="content" id="center">';
	//formulaire pour ajouter recette
		echo '<form method="post" action="./index.php?action=recette">
		 <li>Nom Recette :<input name="nomRecette" type="text"/></li>
		 <br />
		 <li>Ingredient 1 : <input type="text" name="ingredient1"></li>
		 <br />
		 <li>Ingredient 2 : <input type="text" name="ingredient2"></li>
		 <br />
		 <li>Ingredient 3 : <input type="text" name="ingredient3"></li>
		 <br />
		 <li>Ingredient 4 : <input type="text" name="ingredient4"></li>
		 <br />
		 <li>Ingredient 5 : <input type="text" name="ingredient5"></li>
		 <br />
		 <li>Duree : <input type="number" name="dureeRecette" value="0"></li>
		 <br />
		 <li>Origine : <input type="text" name="Origine"></li>
		 <br />
		 <li>
		 Definition :
		 <textarea ></textarea></p></li>
		 <br />';
		 if(isset($_POST['ajoutRecette']))
			echo'<li><input  name= "AjoutRecette" class="btn btn-warning" value="Ajouter" type="submit"></input></form></li>';
		 if(isset($_POST['proposerRecette']))
			echo'<input  name= "ProposerRecette" class="btn btn-warning" value="Proposer" type="submit"></input></form>';
	echo '</div>
	</div>
	</div>';
	//recherche recette
	/*echo '	<h2>Recherche des Recettes</h2>

	<form method="post" action="./index.php?action=recette">
		 <li class="white">Duree : <input type="number" name="dureeRecette" value="0"></li>
		 <li class="white">Origine : <select name="Origine"><option value="pas_origine">Selectionner une origine</option></li>';
				foreach($results as $origine){
							if(!in_array($origine['ORIGINE'], $tabOrigine)){
								$tabOrigine[] = $origine['ORIGINE'];
								echo '<option value="'.$origine['ORIGINE'].'">'.$origine['ORIGINE'].'</option>';
							}
						}*/
//</select>
		//echo' <li>Ingredient : <input type="text" name="ingredient1"></li>';





		echo'<div class="hot-container">
				<p>
					<input class="btn btn-red" name="rechercheRecette" value="Rechercher une Recette" type="submit"></input>
				</p>
			</div>

		</form>';
>>>>>>> origin/master
?>
	<h1>Liste des Recettes</h1>

	<table>
	<?php

	//affiche liste recette
		foreach($results as $donnees){
				echo '<tr>';
				echo '<td>'.$donnees['NOMRECETTE'].'</td>';
				echo '<td><a href='.'"index.php?recetteid='.$donnees['IDRECETTE'].'#popup1">details de la recette</a></td>';
				echo '<td><a href='.'"index.php?action=recette&incr='.$donnees['IDRECETTE'].'">Ajouter recette a votre liste</a></td>';
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
//affiche la liste de choix de recette
echo'<br />';
if(isset($_SESSION['arrayRecette']) && !empty($_SESSION['arrayRecette'])){
			echo '<div class="white">Votre liste de recette choisi</div>';
			foreach($results as $recette){
				if(in_array($recette['IDRECETTE'], $_SESSION['arrayRecette'])){
					echo '<li class="white">'.$recette['NOMRECETTE'].'</li>';
				}
			}
			//propose effacement de la liste de choix de recette
			echo'<div class="white">
			Pas satisfait de votre liste?	</div>
		<form method="post" action="./index.php">
		<input  name="effacerArray" class="btn btn-warning" id="c"  value="Effacer liste" type="submit"></input></form>';
		}
		else{
		echo'<div class="white">Votre liste de recette est vide</div>';
	}


	$contenu = ob_get_clean();
	require('View/layout.php');
?>
