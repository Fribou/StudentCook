<?php
	abstract class Model{

		// Objet PDO d'acc�s � la BD
		private static $bdd;

		// Ex�cute une requ�te SQL �ventuellement param�tr�e
		protected function executerRequete($sql, $params = null) {
			if ($params == null) {
				$resultat = self::getBdd()->query($sql);// ex�cution directe
			}
			else {
				$resultat = self::getBdd()->prepare($sql);// requ�te pr�par�e
				$resultat->execute($params);
			}
			return $resultat;
		}

		private static function getBdd() {
			if(self::$bdd == null){
				require './bin/infoBase.php';

				self::$bdd = new PDO('mysql:host='.$host .';dbname='.$nombase ,$user,$password);
				self::$bdd->exec('SET NAMES utf8');
				self::$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}   
			return self::$bdd;
		}
	}
?>