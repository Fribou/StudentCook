<?php
class ForumManager extends Model
{
  public function getTopic(){
    $req = $this -> executerRequete('SELECT * FROM Topic order by date_creation DESC, SUBSTRING_INDEX(heure_creation,"h", -1) DESC, SUBSTRING_INDEX(heure_creation,"h", 1) DESC');
    $results = $req->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }

  public function addTopic($idtopic,$sujet,$description,$createur,$date_creation,$heure_creation,$nb_msg){
    $req = $this->executerRequete('INSERT INTO Topic VALUES (?,?,?,?,?,?,?)', array($idtopic,$sujet,$description,$createur,$date_creation,$heure_creation,$nb_msg));
  }

  public function UpdateNbMsg($idtopic){
    $req = $this -> executerRequete('UPDATE Topic SET nb_msg = nb_msg + 1 where idtopic = ? ', array($idtopic));
    $results = $req->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }
}
?>
