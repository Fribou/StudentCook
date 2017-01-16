<?php
	$title='StudentCook : Recettes';
	ob_start();
	$tabOrigine = array();
	$condition = true;
	$i = 1;
	//ajout recette que disponible pour admin
	if(isset($_SESSION['typeUtilisateur']) && $_SESSION['typeUtilisateur']=='Admin' ){
		echo '<form method="post" action="./index.php?action=recette">

			<div class="hot-container">
				<p>
					<input class="btn btn-blue" name="ajoutRecette" value="Ajouter une Recette" type="submit"></input>
				</p>
			</div>
		</form>';
	}
	// proposer recette disponible que pour Membre

	if(isset($_SESSION['typeUtilisateur'])&& $_SESSION['typeUtilisateur']=='Membre' ){
		echo '<form method="post" action="./index.php?action=recette">
		<div class="hot-container">
				<p>
					<input class="btn btn-blue" name="proposerRecette" value="Ajouter une Recette" type="submit"></input>
				</p>
			</div></form>';
	}

	//formulaire pour ajouter recette
	if(isset($_POST['proposerRecette']) or isset($_POST['ajoutRecette']))
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
			echo'<li><input  name= "AjoutRecette" value="Ajouter" type="submit"></input></form></li>';
		 if(isset($_POST['proposerRecette']))
			echo'<input  name= "ProposerRecette" value="Proposer" type="submit"></input></form>';
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
		<form method="post" action="./index.php">
		
		<div class="hot-container">
				<p>
					<input class="btn btn-blue" name="effacerArray" value="Effacer liste" type="submit"></input>
				</p>
			</div>';
		}


	$contenu = ob_get_clean();
	require('View/layout.php');
?>
