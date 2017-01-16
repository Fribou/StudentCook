<?php
	session_start();
	require("Model/Model.php");
	require('Model/RecetteManager.php');
	require('Model/RecetteProposeManager.php');
	require('Model/UserManager.php');
	require('Model/IngredientManager.php');
	$rm = new RecetteManager();
	$um = new UserManager();
	$im = new IngredientManager();
	$rpm = new RecetteProposeManager();
	$ingredient= array();

	//deconnexion de l'utilisateur reviens a page d'acueil
	if(isset($_GET['action'])&& $_GET['action']=='deconnexion')
	{
		session_destroy();
		header ('Location: index.php');
		exit(0);
	}


	// page inscription, genere la page ou on met les infornmations et aussi ajoute le nouveau utilisateur si y a erreur reviens a la page inscription avec un message d'erreur
	if(isset($_GET['action']) && $_GET["action"] == 'inscription')
	{
		require("View/inscription.php");

		if (isset($_POST['identifiant']))
		{
			$identifiant = $_POST['identifiant'];
			$password = $_POST['password'];
			$nom = $_POST['nom'];
			$mail = $_POST['mail'];
			if(filter_var($mail, FILTER_VALIDATE_EMAIL))
			{
				$test = $um->getConnexion($identifiant);
				if ($test == NULL){
					$result = $um->setInscription($identifiant, $password, $nom, $mail);
					header ('Location: index.php?action=confirmAjout');
				}
				else
					echo "<p id='erreur'> Une erreur est survenue : Identifiant déjà utilisé.</p>";
			}
			else
				echo "<p id='erreur'> Une erreur est survenue : Email invalide.</p>";
		}
	}

	// page connexion, valide connexion avec creation de valeur session si erreur dans les identifiants renvoi a page connexion avec message d'erreur
	else if(isset($_GET['action']) && $_GET["action"]=='connexion')
	{
		require("View/connexion.php");
		if(isset($_POST['pseudo']))
		{
			$identifiant = $_POST['pseudo'];
			$password = $_POST['password'];
			$result = $um -> getConnexion($identifiant);
			if ($result == NULL)
				echo "<p id='erreur'> Une erreur est survenue : Identifiant inconnu.</p>";
			else if ($result['PASS'] != $password)
				echo "<p id='erreur'> Une erreur est survenue : Mot de passe incorrect.</p>";
			else if($result['PASS'] == $password)
			{
				$_SESSION['identifiant']=$identifiant;
				$_SESSION['UserID'] = $result['USERID'];
				$_SESSION['typeUtilisateur'] = $result['typeUtilisateur'];
				$_SESSION['arrayRecette'] = array();
				header ('Location: index.php');
				exit(0);
			}
		}
	}

	//page recette affiche toute les recettes disponible
	else if(isset($_GET['action']) && $_GET["action"]=='recette')
	{
		// si utilisateur a choisi une recette pour sa liste de choix l'increment a un tableau avec tous ces choix
		if(isset($_GET['incr'])){
			$_SESSION['arrayRecette'][] = $_GET['incr'];
		}
		// ajoute tous les ingredients a un tableau pour faciliter les requetes sql
		if (isset($_POST['AjoutRecette']) or isset($_POST['ProposerRecette'])){
			if(isset($_POST['ingredient1'])){
				$ingredient[] = $_POST['ingredient1'];
			}
			if(isset($_POST['ingredient2'])){
				$ingredient[] = $_POST['ingredient2'];
			}
			if(isset($_POST['ingredient3'])){
				$ingredient[] = $_POST['ingredient3'];
			}
			if(isset($_POST['ingredient4'])){
				$ingredient[] = $_POST['ingredient4'];
			}
			if(isset($_POST['ingredient5'])){
				$ingredient[] = $_POST['ingredient5'];
			}
			// pour admin ajoute la recette
			if(isset($_POST['AjoutRecette']))
				$rm -> ajoutRecette($_POST['nomRecette'], $_POST['dureeRecette'], $_POST['Origine'], $_POST['Definition'], $ingredient);
			// pour membre propose une recette a ajouter
			if(isset($_POST['ProposerRecette']))
				$rpm -> proposerRecette($_POST['nomRecette'], $_POST['dureeRecette'], $_POST['Origine'], $_POST['Definition'], $ingredient);
		}
		// si utilisateurs admin fait la recherche de toutes les recettes proposes puis les affiche dans les pages accueil et page recette
		if(isset($_SESSION['typeUtilisateurs'])and $_SESSION['typeUtilisateur']=='Admin'){
			$recettePropose = $rpm -> getRecettePropose();
		}

		$results= $rm -> getRecette();
		require("View/Recette.php");
	}

	//affiche page recette detail si erreur renvoie a page erreur
	else if(isset($_GET['recetteid']))
	{
		if ($_GET['recetteid']=="")
		{
			$erreur='Identifiant de recette requis';
			require("View/error.php");
		}
		else
		{
			$results= $rm -> getRecette();
			$result = $rm -> getRecetteDetail($_GET['recetteid']);
			require("View/Recette.php");
		}
	}

	// affiche page ingredient
	else if(isset($_GET['action']) && $_GET["action"]=='ingredient')
	{
		//ajoute un ingredient
		if (isset($_POST['AjoutIngredient'])){
			$im -> ajoutIngredient($_POST['Ingredient'], $_POST['typeIngredient'], $_POST['apportCal'], $_POST['prixIngredient']);
		}

		$results= $im -> getIngredient();
		require("View/ingredient.php");
	}
	else
	{
		//vide le tableau avec toutes les recettes de la liste de choix
		if(isset($_POST['effacerArray'])){
			$_SESSION['arrayRecette'] = array();
		}
		// recupere tous les recettes proposes par des utilisateurs membres
		if(isset($_SESSION['typeUtilisateur']) and $_SESSION['typeUtilisateur']=='Admin'){
			$recettePropose = $rpm -> getRecettePropose();
		}
		$result = $rm -> getRecette();
		require("View/accueil.php");
	}
?>
