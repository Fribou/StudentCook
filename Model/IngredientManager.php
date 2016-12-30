<?php
   class IngredientManager extends Model{
	   
    function getIngredient(){
       $sql='SELECT * FROM ingredient';
      $req = $this->executerRequete($sql);
      $results = $req->fetchAll(PDO::FETCH_ASSOC);
      return $results;
    }
	
  }
?>