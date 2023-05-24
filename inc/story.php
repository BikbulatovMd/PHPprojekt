<?php

class Story
{
  public $db;
  function __construct()
  {
    $this->db = new Database();
  }

  function get_story()
  {
    try {
      $query =  $this->db->conn->query("SELECT * FROM story");
      $story = $query->fetchAll(PDO::FETCH_OBJ);
      return $story;
    } catch (PDOException $e) {
      print_r($e->getMessage());
    }
  }
}
$Story = new Story();
