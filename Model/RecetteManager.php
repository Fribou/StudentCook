<?php
	class RecetteManager extends Model
	{
		function getRecette(){
			$sql='SELECT * FROM Recette';
			$req = $this -> executerRequete($sql);
			$results = $req->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
		
		function getRecetteConsult(){
			$sql='SELECT * FROM Recette ORDER BY NBVISITE DESC LIMIT 3 ';
			$req = $this -> executerRequete($sql);
			$results = $req->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
		
		function incrVisite($id){
			$sql='UPDATE Recette SET NBVISITE = NBVISITE + 1 where IDRECETTE = :numrecette';
			$req = $this -> executerRequete($sql,array('numrecette' => $id));
		}

		public function getRecetteDetail($recetteID)
		{
			$sql='SELECT * from Recette where IDRECETTE = :numrecette';
			$req = $this -> executerRequete($sql,array('numrecette' => $recetteID));
			$results = $req->fetch(PDO::FETCH_ASSOC);
			return $results;
		}
		
		function effacerRecette($id){
			$sql='DELETE FROM Recette WHERE IDRECETTE = ?';
			$req = $this -> executerRequete($sql, array($id));
		}
		
		
		function rechercheRecetteIngredient($ingredient){
		$conditions = '';
		$N = count($ingredient);
		for($j = 1; $j<$N;$j++){
				for($i = 1; $i<6; $i++){
					if($j==$N-1 && $i == 5){
						$conditions .= "INGREDIENT".$i." = '".$ingredient[$j]."'";
					}else{
						$conditions .= "INGREDIENT".$i." = '".$ingredient[$j]."' OR ";
					}
				}
		}

			
		 $sql="SELECT * FROM Recette where ".$conditions;
		 $req = $this->executerRequete($sql);
    	 $recette = $req->fetchAll(PDO::FETCH_ASSOC);
		 return $recette;
			
		}
		
		
		public function getValidation()
		{
			$sql='SELECT Nomrecette, Ingredient1, Ingredient2, Ingredient3, Ingredient4, Ingredient5, Definition from Recette where Valider= False';
			$req = $this -> executerRequete($sql);
			$results = $req -> fetchAll(PDO::FETCH_ASSOC);
			$resfin = array($sql[0][0],$sql[0][1],$sql[0][2],$sql[0][3],$sql[0][4],$sql[0][5],$sql[0][6]);
			return $resfin;
		}
		
		
		public function ajoutRecette($nom, $duree, $origine, $definition, $ingredient, $image){
		$i = 2;
		$first = true;
		$conditions = '';
		$statement = '';
		
		
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
				$statement .= ', INGREDIENT'.$i;
				$i++;
			}
			
		}
		$sql = 'INSERT INTO Recette (NOMRECETTE,'.$statement.', DEFINITION, DUREE, ORIGINE, NBVISITE, IMAGE) values(?,'.$conditions.',?,?,?,?,?)';
		$req = $this -> executerRequete($sql, array( $nom, $definition, $duree, $origine, 0, $image));

		}
		
		public function ajoutRecettePropose($idrecette){
			$sql='SELECT * FROM RecettePropose WHERE IDRECETTE = ?';
			$req = $this -> executerRequete($sql, array($idrecette));
			$recette = $req->fetch(PDO::FETCH_ASSOC);
			
		$sql = 'select * from Recette';
		$req = $this->executerRequete($sql);
		$result = $req->fetchAll(PDO::FETCH_ASSOC);
		$id = count($result)+1;
			
		$sql = 'INSERT INTO Recette (IDRECETTE, NOMRECETTE,INGREDIENT1, INGREDIENT2, INGREDIENT3, INGREDIENT4, INGREDIENT5, DEFINITION, DUREE, ORIGINE, IMAGE) values(?,?,?,?,?,?,?,?,?,?,?)';
		$req = $this -> executerRequete($sql, array($id, $recette['NOMRECETTE'], $recette['INGREDIENT1'], $recette['INGREDIENT2'], $recette['INGREDIENT3'], $recette['INGREDIENT4'], $recette['INGREDIENT5'], $recette['DEFINITION'], $recette['DUREE'], $recette['ORIGINE'], $recette['IMAGE']));
			
		}
	}
?>
