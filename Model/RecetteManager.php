<?php
   class RecetteManager extends Model{
	   
    function getRecette(){
		$sql='SELECT NOMRECETTE FROM recette';
		$req = $this -> executerRequete($sql);
		$results = $req->fetchAll(PDO::FETCH_ASSOC);
		return $results;
    }
	
	/*function getRecetteDétail($ID){
       $sql='SELECT *
      FROM RecetteDetails where ID='.$ID;
      $req = $this->executeRequest($sql);
      $results = $req->fetch(PDO::FETCH_ASSOC);
      return $results;
    }*/
  }
?>