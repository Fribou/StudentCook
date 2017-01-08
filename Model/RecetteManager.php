<?php
	class RecetteManager extends Model
	{
		function getRecette(){
			$sql='SELECT * FROM recette';
			$req = $this -> executerRequete($sql);
			$results = $req->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}

		public function getRecetteD�tail($recetteID)
		{
			$sql='SELECT DEFINITION from recette where IDRECETTE = :numrecette -1';
			$req = $this -> executerRequete($sql,array('numrecette' => $recetteID));
			$results = $req->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}

		public function getValidation()
		{
			$sql='SELECT Nomrecette, Ingredient1, Ingredient2, Ingredient3, Ingredient4, Ingredient5, Definition from recette where Valider= False';
			$req = $this -> executerRequete($sql);
			$results = $req -> fetchAll(PDO::FETCH_ASSOC);
			$resfin = array($sql[0][0],$sql[0][1],$sql[0][2],$sql[0][3],$sql[0][4],$sql[0][5],$sql[0][6]);
			return $resfin;
		}
	}
?>
