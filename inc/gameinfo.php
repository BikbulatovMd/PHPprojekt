<?php

class Game
{
  public $db;
  function __construct()
  {
    $this->db = new Database();
  }

  function get_game()
  {
    try {
      $query =  $this->db->conn->query("SELECT * FROM games");
      $game = $query->fetchAll(PDO::FETCH_OBJ);
      return $game;
    } catch (PDOException $e) {
      print_r($e->getMessage());
    }
  }
}
$Game = new Game();
