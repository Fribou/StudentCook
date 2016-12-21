<?php
	$title='Liste des ingrédients';
	ob_start();
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
	
	function afficherLegume(etat) 
	{ 
		var elems = document.getElementsByClassName('legume');
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
		var elems = document.getElementsByClassName('Prolai');
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

<div class="champ">Affichage du div</div> 
<div class="legume">legume</div> 


<form name="formulaire" id="formulaire"> 
	Tous les ingredients <input type="radio" name="choix" value="All" onclick="afficherVPO('visible');afficherFeculent('visible');afficherLegume('visible');afficherProLai('visible');afficherGras('visible');" checked> 
	Viandes, Poissons, Oeufs <input type="radio" name="choix" value="vpo" onclick="afficherVPO('visible');afficherFeculent('hidden');afficherLegume('hidden');afficherProLai('hidden');afficherGras('hidden');"> 
	Feculents <input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('visible');afficherLegume('hidden');afficherProLai('hidden');afficherGras('hidden');"> 
	Legumes et fruits <input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('hidden');afficherLegume('visible');afficherProLai('hidden');afficherGras('hidden');"> 
	Produits laitiers <input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('hidden');afficherLegume('hidden');afficherProLai('visible');afficherGras('hidden');"> 
	Corps gras <input type="radio" name="choix" value="vpo" onclick="afficherVPO('hidden');afficherFeculent('hidden');afficherLegume('hidden');afficherProLai('hidden');afficherGras('visible');"> 
</form>

<h1> Liste des ingredients </h1>

<ul>
	<li><a> Tous les ingredients </a></li>
	<li><a> Viandes,Poisson,Oeuf </a></li>
	<li><a>Feculents</a></li>
	<li><a>Legumes et fruits</a></li>
	<li><a>Produits laitiers</a></li>
	<li><a>Corps gras</a></li>
</ul>

<p data-filter=".vpo"> Bonjour </p>

<?php
	$contenu=ob_get_clean();
	require('View/layout.php');
?>