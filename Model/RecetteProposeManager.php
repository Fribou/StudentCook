<?php
	class RecetteProposeManager extends Model
	{
		function getRecette(){
			$sql='SELECT * FROM RecettePropose';
			$req = $this -> executerRequete($sql);
			$results = $req->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}

		/*public function getValidation()
		{
			$sql='SELECT Nomrecette, Ingredient1, Ingredient2, Ingredient3, Ingredient4, Ingredient5, Definition from Recette where Valider= False';
			$req = $this -> executerRequete($sql);
			$results = $req -> fetchAll(PDO::FETCH_ASSOC);
			$resfin = array($sql[0][0],$sql[0][1],$sql[0][2],$sql[0][3],$sql[0][4],$sql[0][5],$sql[0][6]);
			return $resfin;
		}*/
		
		
		public function proposerRecette($nom, $duree, $origine, $definition, $ingredient){
		$i = 2;
		$first = true;
		$conditions = '';
		$statement = '';
		
		$sql = 'select * from RecettePropose';
		$req = $this->executerRequete($sql);
		$result = $req->fetchAll(PDO::FETCH_ASSOC);
		$id = count($result)+1;
		
		foreach($ingredient as $c)
		{
			if ($first)
			{
				$first = false;
				$conditions .= "'".$c."'";
				$statement .= 'INGREDIENT1';
			}
			else
			{
				$conditions .=", '".$c."'";
				$statement .= 'INGREDIENT'.$i;
				$i++;
			}
			
		}
		$sql = 'INSERT INTO RecettePropose (IDRECETTE, NOMRECETTE, INGREDIENT1, INGREDIENT2, INGREDIENT3, INGREDIENT4, INGREDIENT5, DEFINITION, DUREE, ORIGINE) values(?,?,'.$conditions.',?,?,?)';
		$req = $this -> executerRequete($sql, array($id, $nom, $definition, $duree, $origine));

		}
	}
?>
