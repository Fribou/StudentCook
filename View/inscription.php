<?php
$title = "StudentCook : Inscription";
ob_start();

echo '<h1>Inscription</h1>';

//On est dans la page de formulaire

echo'<p>Pour vous inscrire, veuillez remplir les champs ci dessous:</p>
	
<form method="post" action="./index.php?action=inscription">
  <fieldset>
	<legend>Inscription</legend>
	<p>
	  <label name="pseudo">Pseudo :</label><input name="identifiant" type="text" placeholder="identifiant">
	  <label name="password">Mot de Passe :</label><input name="password" type="password" placeholder="password">
	  <label name="nom">Nom :</label><input name="nom" type="text" placeholder="nom" >
	  <label name="mail">Mail :</label><input name="mail" type="text" placeholder="mail" >
	</p>
  </fieldset>
<p><input type="submit" value="inscription" /></p></form>';
	
if(isset($_GET['donnees'])){
  if($_GET['donnees']=='error'){
	echo '<p id="warning">Veuillez remplir tous les champs svp.</p>';
	}
}
    
$contenu = ob_get_clean();
require('View/layout.php');

?>