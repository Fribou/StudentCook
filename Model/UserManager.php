<?php
   class UserManager extends Model{

   /*
   function getUser($pseudo, $password){
      $sql='SELECT Login, Pass, UserID
      FROM User
      WHERE Login = "'.$pseudo.'" and Pass = "'.$password.'"';
      $req = $this->executeRequest($sql);
      $results = $req->fetch(PDO::FETCH_ASSOC);
      return $results;
    }
	*/

	public function setInscription($login, $pass, $nom, $mail)
	{

		$sql = 'SELECT * FROM User';
		$req = $this->executerRequete($sql);
		$id = $req -> fetchAll();
		$idNouv = count($id) + 1;

        $sql = 'Insert into User (USERID, LOGIN, PASS, NOM, MAIL, STATUT) values (:idNouv,:login, :pass, :nom, :mail, "Membre")';
        $req = $this->executerRequete($sql, array('idNouv' => $idNouv,'login' => $login, 'pass' => $pass, 'nom' => $nom, 'mail' => $mail));
        $req->closeCursor();
		}

	public function getConnexion($userid)
	{

		$sql = 'Select * from User where Login = ?';
		$req= $this -> executerRequete($sql, array($userid));
		$results = $req -> fetch(PDO::FETCH_ASSOC);
		$req -> closeCursor();
		return $results;
	}

	public function getMembre($login)
	{
		$sql = 'Select UserID, Nom, Mail from User where Nom = :login';
		$req = $this->executerRequete($sql, array('login' => $login));
		$results = $req -> fetch();
		$req->closeCursor();
		return $results;
	}



  }
?>
