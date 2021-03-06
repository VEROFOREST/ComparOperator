<?php
abstract class Manager
{
  private $db; // Instance de PDO
  
  public function __construct($db)
  {
    $this->setDb($db);
  }


//   SETTER --------------------------------------------------
  public function getDb()
  {
    return $this->db;
  }

  public function setDb(PDO $db)
  {
    $this->db = $db;
  }
}