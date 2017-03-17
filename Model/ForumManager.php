<?php
class ForumManager extends Model
{
  public function getTopic($premiereEntree,$messagesParPage){
    $req = $this -> executerRequete('SELECT * FROM Topic order by date_creation DESC, heure_creation DESC LIMIT '.$premiereEntree.', '.$messagesParPage.'');
    $results = $req->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }

  public function addTopic($idtopic,$sujet,$description,$createur,$date_creation,$heure_creation,$nb_msg){
    $req = $this->executerRequete('INSERT INTO Topic VALUES (?,?,?,?,?,?)', array($sujet,$description,$createur,$date_creation,$heure_creation,$nb_msg));
  }

  public function NbMsgplus($idtopic){
    $req = $this -> executerRequete('UPDATE Topic SET nb_msg = nb_msg + 1 where idtopic = ? ', array($idtopic));
  }

  public function NbMsgmoins($idtopic){
    $req = $this -> executerRequete('UPDATE Topic SET nb_msg = nb_msg - 1 where idtopic = ? ', array($idtopic));
  }

  public function getMaxId(){
    $req = $this -> executerRequete('SELECT max(idtopic) from Topic');
    $results = $req->fetch();
    $value = $results['max(idtopic)'];
    return $value;
  }

  public function deleteTopic($idtopic){
    $req = $this -> executerRequete('Delete from Topic where idtopic = ? ', array($idtopic));
  }

  public function updateTopicID($idtopic){
    $req = $this -> executerRequete('UPDATE Topic SET idtopic = idtopic-1 where idtopic > ? ', array($idtopic));
  }

  public function getTopicName($idtopic){
    $req = $this -> executerRequete('SELECT sujet FROM Topic where idtopic = ?', array($idtopic));
    $results = $req->fetch();
    $value = $results['sujet'];
    return $value;
  }
}
?>
