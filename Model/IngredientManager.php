<?php
   class IngredientManager extends Model{
	   
    function getIngredient(){
       $sql='SELECT * FROM ingredient';
      $req = $this->executerRequete($sql);
      $results = $req->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }
	
	function ajoutIngredient($nom, $apport, $prix){
		$sql='SELECT * FROM Ingredient';
		$req = $this->executerRequete($sql);
		$result = $req->fetchAll(PDO::FETCH_ASSOC);
		$id = count($result);
		
		$sql='Insert into Ingredient (IDINGREDIENT, NOMINGREDIENT, APPORTCAL, PRIX) values (?,?,?,?)';
		$req = $this->executerRequete($sql, array($id, $nom, $apport, $prix));
	}
	
  }
?>