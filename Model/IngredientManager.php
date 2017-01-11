<?php
   class IngredientManager extends Model{
	   
    function getIngredient(){
       $sql='SELECT * FROM Ingredient';
      $req = $this->executerRequete($sql);
      $results = $req->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }
	
	function ajoutIngredient($nom, $typeIngredient, $apport, $prix){
		$sql='SELECT * FROM Ingredient';
		$req = $this->executerRequete($sql);
		$result = $req->fetchAll(PDO::FETCH_ASSOC);
		$id = count($result)+1;
		
		$sql='Insert into Ingredient (IDINGREDIENT, NOMINGREDIENT, typeIngredient, APPORTCAL, PRIX) values (?,?,?,?,?)';
		$req = $this->executerRequete($sql, array($id, $nom, $typeIngredient, $apport, $prix));
	}
	
  }
?>