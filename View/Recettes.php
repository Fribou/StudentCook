<?php
	$titre='StudentCook : Recettes';
	ob_start();
?>
	<h1>Liste des Recettes</h1>

	<table>
	<?php		
		foreach($results as $donnees){
				echo '<tr>';
				print_r($donnees);
				echo '<td>'.$donnees['NOMRECETTE'].'</td>';
				echo '</tr>';
			}
			
	 ?>
	 </table>
<?php
	$contenu = ob_get_clean();
	require('View/layout.php');
?>