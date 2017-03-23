<?php
	class RecetteProposeManager extends Model
	{
		function getRecettePropose(){
			$sql='SELECT * FROM RecettePropose';
			$req = $this -> executerRequete($sql);
			$results = $req->fetchAll(PDO::FETCH_ASSOC);
			return $results;
		}
		
		function getRecetteProposeID($id){
			$sql='SELECT * from RecettePropose where IDRECETTE = :numrecette';
			$req = $this -> executerRequete($sql,array('numrecette' => $id));
			$results = $req->fetch(PDO::FETCH_ASSOC);
			return $results;
		}
		
		function effacerRecettePropose($id){
			$sql='DELETE FROM RecettePropose WHERE IDRECETTE = ?';
			$req = $this -> executerRequete($sql, array($id));
		}
		
		
	public function proposerRecette($nom, $duree, $origine, $definition, $ingredient, $image){
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
		$sql = 'INSERT INTO RecettePropose ( NOMRECETTE,'.$statement.', DEFINITION, DUREE, ORIGINE, IMAGE) values(?,'.$conditions.',?,?,?,?)';
		$req = $this -> executerRequete($sql, array( $nom, $definition, $duree, $origine, $image));

		}
	}
?>
