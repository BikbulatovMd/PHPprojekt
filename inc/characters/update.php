<?php
require('../config.php');
$character = $Character->get_character();
$db =  new Database();
if (isset($_POST['update_character'])) {

  $data = [
    'id' => $_POST["char_id"],
    'img' => $_POST["update_img"],
    'name' => $_POST["update_name"],
    'info' => $_POST["update_info"]
  ];
  try {
    $sql =  "UPDATE characters SET img=:img, name=:name,info=:info WHERE id=:id";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
    if (isset($_SERVER['HTTP_REFFERER'])) {
      header("Location: {$_SERVER['HTTP_REFFERER']}");
    } else {
      header("Location: ../../admin.php");
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
} else {
  print_r("Fasle");
}
