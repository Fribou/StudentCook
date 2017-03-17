<?php
	$title='StudentCook : Liste des ingredients';
	ob_start();
	//ajout ingredient
	if(isset($_SESSION['typeUtilisateur'])&& $_SESSION['typeUtilisateur']=='Admin'){
		echo '<form method="post" action="./index.php?action=ajoutIngredient">
		<div class="hot-container">
				<p>
					<input class="btn btn-blue" name="ajoutIngredient" value="Ajouter un Ingredient" type="submit"></input>
				</p>
			</div>
		</form>';
	}

	//javascript pour afficher les ingredients et les trier par type d'ingredient
?>
<script type="text/javascript">

	function afficherVPO(etat)
	{
		var elems = document.getElementsByClassName('VPO');
		for(var i = 0; i < elems.length; i++)
		{
			elems[i].style.visibility=etat;
		}
	}

	function afficherFeculent(etat)
	{
		var elems = document.getElementsByClassName('Feculent');
		for(var i = 0; i < elems.length; i++)
		{
			elems[i].style.visibility=etat;
		}
	}

	function afficherLegFru(etat)
	{
		var elems = document.getElementsByClassName('LegFru');
		for(var i = 0; i < elems.length; i++)
		{
			elems[i].style.visibility=etat;
		}
	}

	function afficherProLai(etat)
	{
		var elems = document.getElementsByClassName('ProLai');
		for(var i = 0; i < elems.length; i++)
		{
			elems[i].style.visibility=etat;
		}
	}

	function afficherGras(etat)
	{
		var elems = document.getElementsByClassName('Gras');
		for(var i = 0; i < elems.length; i++)
		{
			elems[i].style.visibility=etat;
		}
	}
	function afficherCondiment(etat)
	{
		var elems = document.getElementsByClassName('Condiment');
		for(var i = 0; i < elems.length; i++)
		{
			elems[i].style.visibility=etat;
		}
	}

</script>
<div class="listeIngredient">
<form name="formulaire" id="formulaire">
	<input type="radio" name="choix" value="All" onclick="afficherVPO('visible');afficherFeculent('visible');afficherLegFru('visible');afficherProLai('visible');afficherGras('visible');afficherCondiment('visible');" checked> Tous les ingredients
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('visible');afficherFeculent('hidden');afficherLegFru('hidden');afficherProLai('hidden');afficherGras('hidden');afficherCondiment('hidden');"> Viandes, Poissons, Oeufs
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('visible');afficherLegFru('hidden');afficherProLai('hidden');afficherGras('hidden');afficherCondiment('hidden');"> Feculents
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('hidden');afficherLegFru('visible');afficherProLai('hidden');afficherGras('hidden');afficherCondiment('hidden');"> Legumes et fruits
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('hidden');afficherLegFru('hidden');afficherProLai('visible');afficherGras('hidden');afficherCondiment('hidden');"> Produits laitiers
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('hidden');afficherLegFru('hidden');afficherProLai('hidden');afficherGras('visible');afficherCondiment('hidden');"> Corps gras
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('hidden');afficherLegFru('hidden');afficherProLai('hidden');afficherGras('visible');afficherCondiment('visible');"> Condiments
</form>

<h2> Liste des ingredients </h2>
<p> Tous les ingredients utilises dans les recettes sont ici !</p>
   <ol class="rounded-list">
<?php
	//affiche les ingredients en fonction de la base de donnee d'ingredient
	echo'<form action="index.php?action=ingredient" method="post">';
	foreach($results as $ingredient){
			echo '<div class="'.$ingredient['typeIngredient'].'"><li><a href="">'.$ingredient['NOMINGREDIENT'].'</a></li>';
			echo '<input type="checkbox" name="recetteChoisi[]" value="'.$ingredient['IDINGREDIENT'].'">O</div>';
			if(isset($_SESSION['typeUtilisateur'])&& $_SESSION['typeUtilisateur'] == 'Admin')
			echo '<button type="submit" name="effacerIngredient" value ="'.$ingredient['IDINGREDIENT'].'">X</button>';
	}
	echo '<input type="submit" name="rechercheRecette">';
	echo'</form>';
	echo'</ol></div>';
	$contenu=ob_get_clean();
	require('View/layout.php');
?>
