<?php
   class IngredientManager extends Model{
	   
    function getIngredient(){
       $sql='SELECT *
      FROM ingredient';
      $req = $this->executeRequest($sql);
      $results = $req->fetch(PDO::FETCH_ASSOC);
      return $results;
    }
	
  }
?>