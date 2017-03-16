<?php
	session_start();
	require("Model/Model.php");
	require('Model/RecetteManager.php');
	require('Model/RecetteProposeManager.php');
	require('Model/UserManager.php');
	require('Model/IngredientManager.php');
	require('Model/ForumManager.php');
	$rm = new RecetteManager();
	$um = new UserManager();
	$im = new IngredientManager();
	$rpm = new RecetteProposeManager();
	$fm = new ForumManager();
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
				$_SESSION['typeUtilisateur'] = $result['STATUT'];
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
			
			$target_dir = "Web/img/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Verifie si cest une image ou un fake
			if(isset($_POST["AjoutRecette"]) || isset($_POST["ProposerRecette"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					echo $target_file;
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			//Verifie si image existe deja
				if (file_exists($target_file)) {
					echo "Sorry, file already exists.";
					$uploadOk = 0;
				}
				// ¨Permet que quelque format d'image
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
				}
				// verifie uploadOK
				if ($uploadOk == 0) {
					echo "Sorry, your file was not uploaded.";
				// SI tout marche upload image
				} else {
					move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
				}
			
			// pour admin ajoute la recette
			if(isset($_POST['AjoutRecette']))
				$rm -> ajoutRecette($_POST['nomRecette'], $_POST['dureeRecette'], $_POST['Origine'], $_POST['Definition'], $ingredient, $target_file);
			// pour membre propose une recette a ajouter
			if(isset($_POST['ProposerRecette']))
				$rpm -> proposerRecette($_POST['nomRecette'], $_POST['dureeRecette'], $_POST['Origine'], $_POST['Definition'], $ingredient, $target_file);
		}
		// si utilisateurs admin fait la recherche de toutes les recettes proposes puis les affiche dans les pages accueil et page recette
		if(isset($_SESSION['typeUtilisateurs'])and $_SESSION['typeUtilisateur']=='Admin'){
			$recettePropose = $rpm -> getRecettePropose();
		}
		
	    if(isset($_POST['effacerRecette'])){
			$rm -> effacerRecette($_POST['effacerRecette']);
		}
		
		if(isset($_GET['recetteid']))
		{
			if ($_GET['recetteid']=="")
			{
				$erreur='Identifiant de recette requis';
				require("View/error.php");
			}
			else if(isset($_GET['recetteid']))
			{
				
				$result = $rm -> getRecetteDetail($_GET['recetteid']);
			}
		}

		$results= $rm -> getRecette();
		require("View/Recette.php");
	}
	else if(isset($_GET['action']) && $_GET["action"]=='forum'){
		$topic = $fm->getTopic();
		require("View/Forum.php");
	}
	//affiche page recette detail si erreur renvoie a page erreur
	/*else if(isset($_GET['recetteid']))
	{
		if ($_GET['recetteid']=="")
		{
			$erreur='Identifiant de recette requis';
			require("View/error.php");
		}
		else if(isset($_GET['recetteid']))
		{
			$results= $rm -> getRecette();
			$result = $rm -> getRecetteDetail($_GET['recetteid']);
			require("View/Recette.php");
		}
	}*/
	// Affiche page  ajout recette
	else if(isset($_GET['action']) && $_GET["action"]=='AjoutRecette'){
		$results = $im -> getIngredient();
		require("View/AjoutRecette.php");
	}
	else if(isset($_GET['action']) && $_GET["action"]=='ProposeRecette'){
		$results = $im -> getIngredient();
		require("View/AjoutRecette.php");
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
	//ajout ingredient
	else if(isset($_GET['action']) && $_GET["action"]=='ajoutIngredient'){
		require("View/ajoutIngredient.php");
	}
	else
	{
		//ajout recette propose
		if(isset($_POST['ajoutRecettePropose'])){
			$rm -> ajoutRecettePropose($_POST['ajoutRecettePropose']);
			$rpm -> effacerRecettePropose($_POST['ajoutRecettePropose']);
		}
		else if(isset($_POST['effacerRecettePropose'])){
			$rpm -> effacerRecettePropose($_POST['effacerRecettePropose']);
		}
		//vide le tableau avec toutes les recettes de la liste de choix
		if(isset($_POST['effacerArray'])){
			$_SESSION['arrayRecette'] = array();
		}
		// recupere tous les recettes proposes par des utilisateurs membres
		if(isset($_SESSION['typeUtilisateur']) and $_SESSION['typeUtilisateur']=='Admin'){
			$recettePropose = $rpm -> getRecettePropose();
			if(isset($_GET['recetteid'])){
				$detailPropose = $rpm -> getRecetteProposeID($_GET['recetteid']);
			}
		}
		$result = $rm -> getRecette();
		require("View/accueil.php");
	}
?>
