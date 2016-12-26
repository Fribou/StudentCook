<?php
$titre = "Inscription au site";
ob_start();
// index.php?action=connexion - movieid=12 - action=voter&movieid=12
// Model à le droit d'utiliser le contrôleur mais les vues non

echo '<h1>Inscription</h1>';

//On est dans la page de formulaire
echo'<p>Pour vous inscrire, veuillez remplir les champs ci dessous:</p>
	
<form method="post" action="./studcook.php?action=inscrit">
  <fieldset>
	<legend>Inscription</legend>
	<p>
	  <label name="pseudo">Pseudo :</label><input name="pseudo" type="text" />
	  <label name="password">Mot de Passe :</label><input type="password" name="password"" />
	  <label name="nom">Nom :</label><input type="nom" name="nom"/>
	  <label name="mail">Mail :</label><input type="mail" name="mail"" />
	</p>
  </fieldset>
<p><input type="submit" value="Inscription" /></p></form>';
	
if(isset($_GET['donnees'])){
  if($_GET['donnees']=='error'){
	echo '<p id="warning">Veuillez remplir tous les champs svp.</p>';
	}
}
    
$contenu = ob_get_clean();
require('layout.php');

?>