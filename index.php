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
	
	if(isset($_GET['action']) && $_GET["action"] == 'inscription') 
	{
		require("View/inscription.php");
	
		if (isset($_POST['inscription']))
		{
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
	else if(isset($_GET['action']) && $_GET["action"]=='connexion')
	{		
		require("View/connexion.php");	
		if(isset($_POST['connexion']))
		{	
			$identifiant = $_POST['identifiant'];
			$password = sha1($_POST['password']);
			$result = $um -> getConnexion($identifiant);
			if ($result == NULL)
				echo "<p id='erreur'> Une erreur est survenue : Identifiant inconnu.</p>";	
			else if ($result['Pass'] != $password)
				echo "<p id='erreur'> Une erreur est survenue : Mot de passe incorrect.</p>";	
			else if($result['Pass'] == $password)
			{
				$_SESSION['identifiant']=$identifiant;
				$_SESSION['UserID'] = $result['UserID'];
				header ('Location: index.php');
				exit(0);
			}
		}
	}
	else
	{
		require("View/accueil.php");
	}
?>