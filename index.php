<?php
	session_start();
	require("Model/Model.php");
	require('Model/RecetteManager.php');
	require('Model/RecetteProposeManager.php');
	require('Model/UserManager.php');
	require('Model/IngredientManager.php');
	require('Model/ForumManager.php');
	require('Model/MessageManager.php');
	$rm = new RecetteManager();
	$um = new UserManager();
	$im = new IngredientManager();
	$mm = new MessageManager();
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
		$_SESSION['rechercheIngre'] = false;
		// si utilisateur a choisi une recette pour sa liste de choix l'increment a un tableau avec tous ces choix
		if(isset($_GET['incr'])){
			 $rm -> incrVisite($_GET['incr']);
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
				 $rm -> incrVisite($_GET['recetteid']);
				$result = $rm -> getRecetteDetail($_GET['recetteid']);
			}
		}

		$results= $rm -> getRecette();
		require("View/Recette.php");
	}
	// page forum
	else if(isset($_GET['action']) && $_GET["action"]=='forum'){
		$topicsParPage = 5;
		$id = $fm->getMaxId();
		$nombreDePages=ceil($id/$topicsParPage);
		if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
		{
		 $pageActuelle=intval($_GET['page']);
		if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
		 {
					$pageActuelle=$nombreDePages;
		 }
		}
		else // Sinon
		{
		 $pageActuelle=1; // La page actuelle est la n°1
		}

		$premiereEntree=($pageActuelle-1)*$topicsParPage; // On calcul la première entrée à lire
		$topic = $fm->getTopic($premiereEntree,$topicsParPage);
		require("View/Forum.php");

	}
	else if(isset($_GET['action']) && $_GET["action"]=='postTopic'){
		if(isset($_POST['sujet']) && isset($_POST['description']) && isset($_POST['message'])){

			$sujet = $_POST['sujet'];
			$description = $_POST['description'];
			$message = $_POST['message'];
			$id = $fm->getMaxId();
			$id = $id+1;
			$createur =  $_SESSION['identifiant'];
			$today = getdate();

			$fm->addTopic($id,$sujet,$description,$createur,$today['year'].'-'.$today['mon'].'-'.$today['mday'],$today['hours'].'h'.$today['minutes'],1);
			$mm->addMessage($id,1,$message,$createur,$today['year'].'-'.$today['mon'].'-'.$today['mday'],$today['hours'].'h'.$today['minutes']);
			header("Location: index.php?action=forum");
		}

	}

	else if(isset($_GET['DelId']) && $_GET["DelId"] != NULL){
		$idtopic = $_GET['DelId'];
		$mm->deleteMessage($idtopic);
		$fm->deleteTopic($idtopic);
		$fm->updateTopicID($idtopic);
		$mm->updateTopicID($idtopic);
		header("Location: index.php?action=forum");
	}

	else if(isset($_GET['idtopic']) && $_GET["idtopic"] != NULL){
		$idtopic = $_GET['idtopic'];
		$msg = $mm->getMessage($idtopic);
		$titre = $fm->getTopicName($idtopic);
		$today = getdate();

		if(isset($_GET['msgDelId']) && $_GET["msgDelId"] != NULL){
			$idmsg = $_GET['msgDelId'];
			$mm->deleteMessage($idtopic, $idmsg);
			$fm->nbMsgMoins($idtopic);
			header('Location: index.php?idtopic='.$idtopic.'');
		}

		if(isset($_GET['action']) && $_GET["action"]=='postMsg'){
			$rang = $mm->getMaxRang();
			$rang = $rang + 1;
			$message = $_POST['message'];
			$createur =  $_SESSION['identifiant'];
			$mm->addMessage($idtopic,$rang,$message,$createur,$today['year'].'-'.$today['mon'].'-'.$today['mday'],$today['hours'].'h'.$today['minutes']);
			$fm->nbMsgPlus($idtopic);
			header('Location: index.php?idtopic='.$idtopic.'');
		}

		require("View/Topic.php");
	}


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
		else if (isset($_POST['effacerIngredient'])){
			$im -> effacerIngredient($_POST['effacerIngredient']);
		}

	    if (isset($_POST['rechercheRecette'])){
			$ingredient[] = array();
			$_SESSION['rechercheIngredient'] = array();
			$_SESSION['rechercheIngredient'][0] = null;
			$N = count($_POST['recetteChoisi']);
			$idingredient = $im ->getIngredient();
			if(!empty($_POST['recetteChoisi'])){
				foreach($idingredient as $id){
					for($i=0;$i<$N;$i++){
						if($_POST['recetteChoisi'][$i] == $id['IDINGREDIENT']){
							$ingredient[] = $id['NOMINGREDIENT'];
							$_SESSION['rechercheIngredient'][] = $id['NOMINGREDIENT'];
						}
					}
				}
			}
			$_SESSION['rechercheIngre'] = true;
			$results = $rm -> rechercheRecetteIngredient($ingredient);
			require("View/recette.php");
		}
		else if(isset($_GET['rechercheRecette'])){
			$ingredient[] = array();
			$N = count($_SESSION['rechercheIngredient']);
			$idingredient = $im ->getIngredient();
			if(!empty($_SESSION['rechercheIngredient'])){
				foreach($idingredient as $id){
					for($i=0;$i<$N;$i++){
						if(is_array($_SESSION['rechercheIngredient']) && in_array($id['NOMINGREDIENT'], $_SESSION['rechercheIngredient'])){
							$ingredient[] = $id['NOMINGREDIENT'];
						}
					}
				}
			}
			//echo $ingredient[1];
			$_SESSION['rechercheIngre'] = true;
			$result = $rm ->  getRecetteDetail($_GET['rechercheRecette']);
			$results = $rm -> rechercheRecetteIngredient($ingredient);
			require("View/recette.php");
		}
		else{
		$results= $im -> getIngredient();
		require("View/ingredient.php");
		}
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



		if (isset($_GET['recetteListeid'])){
			$detailPropose = $rm ->getRecetteDetail($_GET['recetteListeid']);
		}
		$recetteConsult = $rm -> getRecetteConsult();
		$result = $rm -> getRecette();
		require("View/accueil.php");
	}
?>
