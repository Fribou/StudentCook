<?php	
	session_start();
	require("Model/Model.php");
	require('Model/RecetteManager.php');
	require('Model/UserManager.php');
	require('Model/IngredientManager.php');
	$rm = new RecetteManager();
	$um = new UserManager();
	$im = new IngredientManager();
	
	if(isset($_GET['action'])&& $_GET['action']=='deconnexion')
	{
		session_destroy();
		header ('Location: index.php');
		exit(0);
	}
	
	if ($_GET["action"] == 'inscription') 
	{
		require("View/inscription.php");
	
		if (isset($_POST['inscription']))
		{
			require("Model/ConnexionManager.php");
			$identifiant = $_POST['identifiant'];
			$password = sha1($_POST['password']);
			$nom = $_POST['nom'];
			$mail = $_POST['mail'];
			if(filter_var($mail, FILTER_VALIDATE_EMAIL))
			{
				$test = $um->getConnexion($identifiant);
				if ($test == NULL)
					$result = $um->setInscription($identifiant, $password, $nom, $mail);
				else
					echo "<p id='erreur'> Une erreur est survenue : Identifiant déjà utilisé.</p>";
			}
			else
				echo "<p id='erreur'> Une erreur est survenue : Email invalide.</p>";
		}
	}
	
	require("View/ingredients.php");	
?>