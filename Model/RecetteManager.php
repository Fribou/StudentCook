<?php
	class RecetteManager extends Model
	{
		function getRecette(){
			$sql='SELECT * FROM recette';
			$req = $this -> executerRequete($sql);
			$results = $req->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
		
		public function getRecetteDétail($recetteID)
		{
			$sql='SELECT DEFINITION from recette where IDRECETTE = :numrecette -1';
			$req = $this -> executerRequete($sql,array('numrecette' => $recetteID));
			$results = $req->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
	}
?>