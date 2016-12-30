<?php	
	session_start();
	require("Model/Model.php");
	require('Model/RecetteManager.php');
	require('Model/UserManager.php');
	require('Model/IngredientManager.php');
	
	if(isset($_GET['action'])&& $_GET['action']=='deconnexion') {
		session_destroy();
		header ('Location: index.php');
		exit(0);
	}
	
	require("View/ingredients.php");	
?>