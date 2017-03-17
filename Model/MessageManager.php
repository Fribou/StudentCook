<?php
class MessageManager extends Model
{

  public function getMessage($idtopic){
    $req = $this -> executerRequete('SELECT * FROM message where idtopic = ? order by rang ASC', array ($idtopic));
    $results = $req->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }

  public function addMessage($idtopic,$rang,$contenu,$pseudo,$date_message,$heure_message){
    $req = $this->executerRequete('INSERT INTO message VALUES (?,?,?,?,?,?)', array($idtopic,$rang,$contenu,$pseudo,$date_message,$heure_message));
}

public function deleteMessage($idtopic, $idmsg){
  $req = $this -> executerRequete('Delete from Message where idtopic = ? and rang = ?', array($idtopic, $idmsg));
}

public function updateTopicID($idtopic){
  $req = $this -> executerRequete('UPDATE Message SET idtopic = idtopic-1 where idtopic > ? ', array($idtopic));
}

public function updateRangMsg($idtopic,$idmsg){
  $req = $this -> executerRequete('UPDATE Message SET rang = rang -1 where idtopic = ? and rang > ? ', array($idtopic,$idmsg));
}

public function getMaxRang(){
  $req = $this -> executerRequete('SELECT max(rang) from Message');
  $results = $req->fetch();
  $value = $results['max(rang)'];
  return $value;
}
}
