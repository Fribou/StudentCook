<?php
class ForumManager extends Model
{
  function getTopic(){
    $sql='SELECT * FROM Topic';
    $req = $this -> executerRequete($sql);
    $results = $req->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  }
}
?>
