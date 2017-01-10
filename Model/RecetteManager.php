<?php
	class RecetteManager extends Model
	{
		function getRecette(){
			$sql='SELECT * FROM Recette';
			$req = $this -> executerRequete($sql);
			$results = $req->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}

		public function getRecetteDetail($recetteID)
		{
			$sql='SELECT * from Recette where IDRECETTE = :numrecette';
			$req = $this -> executerRequete($sql,array('numrecette' => $recetteID));
			$results = $req->fetch(PDO::FETCH_ASSOC);
			return $results;
		}

		public function getValidation()
		{
			$sql='SELECT Nomrecette, Ingredient1, Ingredient2, Ingredient3, Ingredient4, Ingredient5, Definition from Recette where Valider= False';
			$req = $this -> executerRequete($sql);
			$results = $req -> fetchAll(PDO::FETCH_ASSOC);
			$resfin = array($sql[0][0],$sql[0][1],$sql[0][2],$sql[0][3],$sql[0][4],$sql[0][5],$sql[0][6]);
			return $resfin;
		}
		
		
		public function ajoutRecette($nom, $duree, $origine, $definition, $ingredient){
		$i = 2;
		$first = true;
		$conditions = '';
		foreach($ingredient as $c)
		{
			// si c'est la premiere condition, on met where, sinon on met and
			if ($first)
			{
				$first = false;
				$conditions .= $c;
				$statement .= 'INGREDIENT1';
			}
			else
			{
				$conditions .=", ".$c;
				$statement .= 'INGREDIENT'.$i;
				$i++;
			}
		}
		
		$sql = 'INSERT INTO Recette (IDRECETTE, NOMRECETTE, INGREDIENT1, INGREDIENT2, INGREDIENT3, INGREDIENT4, INGREDIENT5, DEFINITION, DUREE, ORIGINE) values (?,?,?,?,?,?)';
		$req = $this -> executerRequete($sql,array($id, $nom, $conditions, $definition, $duree, $origine));

		}
	}
?>
