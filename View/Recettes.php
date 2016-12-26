<?php
	$titre='StudCook';
	ob_start();
?>
		<h1>Liste des Recettes</h1>
		
		
		<table>
		<?php		
			foreach($results as $donnees){
					echo '<tr>';
					echo '<td class="centre">' . $donnees['Nom'] . '</td>';
					echo '<td class="centre"><a href="studcook.php?recette='.$donnees['ID'].'"></a></td>';
					echo '</tr>';
				}
				
		 ?>
		 </table>
<?php
$contenu = ob_get_clean();
require('layout.php'); ?>