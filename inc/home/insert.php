<?php
require('../config.php');
$db =  new Database();
if (isset($_POST['add_chapter'])) {
  print_r("Success");
  $data = [
    'chapter_name' => $_POST["chapter_name"],
    'description' => $_POST["description"],
  ];
  try {
    $sql = "INSERT INTO story (chapter_name, description) VALUES (:chapter_name, :description)";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
  header("Location: ../../admin.php");
} else {
  print_r("Failed");
}
