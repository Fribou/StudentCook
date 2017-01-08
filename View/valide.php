<?php
  $titre="StudentCook Valider une recette";
  ob_start();
  echo '<h1> Valider une recette <h1>'
  echo $results['Nomrecette'];
  echo $results['Ingredient1'];
	echo $results['Ingredient2'];
	echo $results['Ingredient3'];
	echo $results['Ingredient4'];
	echo $results['Ingredient5'];
  echo $results['Definition'];
  $contenu=ob_get_clean();
  require('View/layout.php');
?>
