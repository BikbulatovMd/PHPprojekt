<?php
require('../config.php');
$db =  new Database();
if (isset($_POST['add_character'])) {
  print_r("Success");
  $data = [
    'img' => $_POST["img"],
    'name' => $_POST["name"],
    'info' => $_POST["info"]
  ];
  try {
    $sql = "INSERT INTO characters (img, name, info) VALUES (:img, :name, :info)";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
    header("Location: ../../admin.php");
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
} else {
  print_r("Failed");
}
