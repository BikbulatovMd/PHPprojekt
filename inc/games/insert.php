<?php
require('../config.php');
$db =  new Database();
if (isset($_POST['add_game'])) {
  print_r("Success");
  $data = [
    'name' => $_POST["game_name"],
    'date' => $_POST["game_date"],
    'story' => $_POST["story"]
  ];
  try {
    $sql = "INSERT INTO games (game_name, game_date, story) VALUES (:name, :date, :story)";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
} else {
  print_r("Failed");
}
