<?php
	$titre='StudentCook : Recettes';
	ob_start();
?>
		<h1>Liste des Recettes</h1>
		
		
		<table>
		<?php		
			foreach($results as $donnees){
					echo '<tr>';
					echo '<td>'.$donnees['Nom'] . '</td>';
					echo '</tr>';
				}
				
		 ?>
		 </table>
<?php
$contenu = ob_get_clean();
require('layout.php'); ?>