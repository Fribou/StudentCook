<?php
	$title='StudentCook : Recettes';
	ob_start();
?>
	<h1>Liste des Recettes</h1>

	<table>
	<?php		
	if(isset($_SESSION['typeUtilisateur'])&& $_SESSION['typeUtilisateur']=='Admin'){
		echo '<form method="post" action="./index.php?action=recette">
		<input  name="ajoutRecette" value="Ajouter une Recette" type="submit"></input></form>';
	}
	
	if(isset($_POST['ajoutRecette'])){
		echo '<form method="post" action="./index.php?action=recette">
		 <li>Nom Recette :<input name="nomRecette" type="text"/></li>
		 <li>Ingredient 1 : <input type="text" name="ingredient1"></li>
		 <li>Ingredient 2 : <input type="text" name="ingredient2"></li>
		 <li>Ingredient 3 : <input type="text" name="ingredient3"></li>
		 <li>Ingredient 4 : <input type="text" name="ingredient4"></li>
		 <li>Ingredient 5 : <input type="text" name="ingredient5"></li>
		 <li>Duree : <input type="number" name="dureeRecette" value="0"></li>
		 <li>Origine : <input type="text" name="Origine"></li>
		 <li>Definition : <input type="text" name="Definition"></li>
		 <li><input  name= "AjoutRecette" value="Ajouter" type="submit"></input></form></li>
		';
	}
		foreach($results as $donnees){
				echo '<tr>';
				echo '<td>'.$donnees['NOMRECETTE'].'</td>';
				echo '<td><a href='.'"index.php?recetteid='.$donnees['IDRECETTE'].'">details de la recette</a></td>';	
				echo '</tr>';
			}
			
	 ?>
	 </table>
<?php
	$contenu = ob_get_clean();
	require('View/layout.php');
?>