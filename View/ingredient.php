<?php
	$title='StudentCook : Liste des ingredients';
	ob_start();
	//ajout ingredient
	if(isset($_SESSION['typeUtilisateur'])&& $_SESSION['typeUtilisateur']=='Admin'){
		echo '<form method="post" action="./index.php?action=ingredient">
		<div class="hot-container">
				<p>
					<input class="btn btn-blue" name="ajoutIngredient" value="Ajouter un Ingredient" type="submit"></input>
				</p>
			</div>
		</form>';
	}
	//formulaire pour ajout ingredient
	if(isset($_POST['ajoutIngredient'])){
		echo '<form method="post" action="./index.php?action=ingredient">
		 <li>Nom Ingredient :<input name="Ingredient" type="text"/></li>
		 <li>Type ingredient :<select name="typeIngredient">
							<option value="VPO">Viande, poulet, oeuf</option>
							<option value="Feculent">Feculent</option>
							<option value="ProLai">Produit laitier</option>
							<option value="Gras">Produit gras</option>
							<option value="LegFru">Legume, Fruit</option>
							</select>
		 <li>Apport calorique : <input type="number" name="apportCal" value="0"  step="0.01"></li>
		 <li>Prix de lingredient : <input type="number" name="prixIngredient" value="0" step="0.01"></li>
		 <li><input name="AjoutIngredient" value="Ajouter" type="submit"></input></form></li>
		';
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

</script>
<div class="listeIngredient">
<form name="formulaire" id="formulaire">
	<input type="radio" name="choix" value="All" onclick="afficherVPO('visible');afficherFeculent('visible');afficherLegFru('visible');afficherProLai('visible');afficherGras('visible');" checked> Tous les ingredients
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('visible');afficherFeculent('hidden');afficherLegFru('hidden');afficherProLai('hidden');afficherGras('hidden');"> Viandes, Poissons, Oeufs
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('visible');afficherLegFru('hidden');afficherProLai('hidden');afficherGras('hidden');"> Feculents
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('hidden');afficherLegFru('visible');afficherProLai('hidden');afficherGras('hidden');"> Legumes et fruits
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('hidden');afficherLegFru('hidden');afficherProLai('visible');afficherGras('hidden');"> Produits laitiers
	<input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('hidden');afficherLegFru('hidden');afficherProLai('hidden');afficherGras('visible');"> Corps gras
</form>

<h2> Liste des ingredients </h2>
<p> Tous les ingredients utilises dans les recettes sont ici !</p>
   <ol class="rounded-list">
<?php
	//affiche les ingredients en fonction de la base de donnee d'ingredient
	foreach($results as $ingredient){
		echo '<div class="'.$ingredient['typeIngredient'].'"><li><a href="">'.$ingredient['NOMINGREDIENT'].'</a></li></div>';
	}
	echo'</ol></div>';
	$contenu=ob_get_clean();
	require('View/layout.php');
?>
