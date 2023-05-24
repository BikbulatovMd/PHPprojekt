<?php

class Character
{
  public $db;
  function __construct()
  {
    $this->db = new Database();
  }

  function get_character()
  {
    try {
      $query =  $this->db->conn->query("SELECT * FROM characters");
      $character = $query->fetchAll(PDO::FETCH_OBJ);
      return $character;
    } catch (PDOException $e) {
      print_r($e->getMessage());
    }
  }
}
$Character = new Character();
