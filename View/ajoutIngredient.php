<?php
$title='StudentCook : AjoutRecettes';
	ob_start();
echo '<div id="contact-form">
<form method="post" action="./index.php?action=ingredient">
			<div>
		      <label for="name">
		      	<span class="required">Nom Ingredient: *</span> 
		      	<input type="text" id="name" name="Ingredient" value="" placeholder="Nom Ingredient" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
		<span class="required"> Type ingredient :</span> <select name="typeIngredient">
							<option value="VPO">Viande, poulet, oeuf</option>
							<option value="Feculent">Feculent</option>
							<option value="ProLai">Produit laitier</option>
							<option value="Gras">Produit gras</option>
							<option value="LegFru">Legume, Fruit</option>
							</select>
			<div>
		      <label for="name">
		      	<span class="required">Apport Calorique: *</span> 
		      	<input type="number" id="name" name="apportCal" value="0" placeholder="Apport Calorique" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div>
		      <label for="name">
		      	<span class="required">Prix: *</span> 
		      	<input type="number" id="name" name="prixIngredient" value="0" step="0.01 placeholder="Prix" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div>
		 <input name="AjoutIngredient" value="Ajouter" type="submit"></input></form>
		 </div>
		 </form>
		   </div>
		';
	$contenu = ob_get_clean();
	require('View/layout.php');
	?>