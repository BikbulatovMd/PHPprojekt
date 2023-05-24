<?php
require('../config.php');
$game = $Game->get_game();
$db =  new Database();
if (isset($_POST['update_game'])) {

  $data = [
    'id' => $_POST["game_id"],
    'name' => $_POST["game_name"],
    'date' => $_POST["game_date"],
    'story' => $_POST["story"]
  ];
  try {
    $sql =  "UPDATE games SET game_name=:name, game_date=:date, story=:story WHERE id=:id";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
    header("Location: ../../admin.php");
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
} else {
  print_r("Fasle");
}
