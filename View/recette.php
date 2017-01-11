<?php
	$title='StudentCook : Recettes';
	ob_start();
	$tabOrigine = array();
	$condition = true;
	$i = 1;
	//ajout recette que disponible pour admin
	if(isset($_SESSION['typeUtilisateur'])&& $_SESSION['typeUtilisateur']=='Admin'){
		echo '<form method="post" action="./index.php?action=recette">
		<input  name="ajoutRecette" value="Ajouter une Recette" type="submit"></input></form>';
	}
	// proposer recette disponible que pour Membre
	if(isset($_SESSION['typeUtilisateur'])&& $_SESSION['typeUtilisateur']=='Membre'){
		echo '<form method="post" action="./index.php?action=recette">
		<input  name="proposerRecette" value="Proposer une Recette" type="submit"></input></form>';
	}
	
	//formulaire pour ajouter recette
	if(isset($_POST['ajoutRecette']) or isset($_POST['proposerRecette'])){
		echo '<form method="post" action="./index.php?action=recette">
		 <li>Nom Recette :<input name="nomRecette" type="text"/></li>
		 <li>Ingredient 1 : <input type="text" name="ingredient1"></li>
		 <li>Ingredient 2 : <input type="text" name="ingredient2"></li>
		 <li>Ingredient 3 : <input type="text" name="ingredient3"></li>
		 <li>Ingredient 4 : <input type="text" name="ingredient4"></li>
		 <li>Ingredient 5 : <input type="text" name="ingredient5"></li>
		 <li>Duree : <input type="number" name="dureeRecette" value="0"></li>
		 <li>Origine : <input type="text" name="Origine"></li>
		 <li>Definition : <input type="text" name="Definition"></li>';
		 if(isset($_POST['ajoutRecette']))
			echo'<li><input  name= "AjoutRecette" value="Ajouter" type="submit"></input></form></li>';
		 if(isset($_POST['proposerRecette']))
			echo'<li><input  name= "ProposerRecette" value="Proposer" type="submit"></input></form></li>';
	}
	
	//recherche recette
	echo '	<h2>Recherche des Recettes</h2>
	
	<form method="post" action="./index.php?action=recette">
		 <li>Duree : <input type="number" name="dureeRecette" value="0"></li>
		 <li>Origine : <select name="Origine"><option value="pas_origine">Selectionner une origine</option></li>';
				foreach($results as $origine){
							if(!in_array($origine['ORIGINE'], $tabOrigine)){
								$tabOrigine[] = $origine['ORIGINE'];
								echo '<option value="'.$origine['ORIGINE'].'">'.$origine['ORIGINE'].'</option>';
							}
						}
	
		//echo' <li>Ingredient : <input type="text" name="ingredient1"></li>';
	
	
	
	
		echo'<input  name="rechercheRecette" value="Rechercher une Recette" type="submit"></input></form></select>';
?>
	<h1>Liste des Recettes</h1>

	<table>
	<?php	
	
	//affiche liste recette 
		foreach($results as $donnees){
				echo '<tr>';
				echo '<td>'.$donnees['NOMRECETTE'].'</td>';
				echo '<td><a href='.'"index.php?recetteid='.$donnees['IDRECETTE'].'">details de la recette</a></td>';
				echo '<td><a href='.'"index.php?action=recette&incr='.$donnees['IDRECETTE'].'">Ajouter recette a votre liste</a></td>';	
				echo '</tr>';
			}
	
		
	 ?>
	 </table>
<?php
//affiche la liste de choix de recette
if(isset($_SESSION['arrayRecette']) && !empty($_SESSION['arrayRecette'])){
			echo 'Votre liste de recette choisi';
			foreach($results as $recette){
				if(in_array($recette['IDRECETTE'], $_SESSION['arrayRecette'])){
					echo '<li>'.$recette['NOMRECETTE'].'</li>';
				}
			}
			//propose effacement de la liste de choix de recette
			echo'Pas satisfait de votre liste?
		<form method="post" action="./index.php">
		<input  name="effacerArray" value="Effacer liste" type="submit"></input></form>';
		}
		else{
		echo'Votre liste de recette est vide';
	}
	$contenu = ob_get_clean();
	require('View/layout.php');
?>