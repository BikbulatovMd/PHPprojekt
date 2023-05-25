<?php
require('../config.php');
$story = $Story->get_story();
$db =  new Database();
if (isset($_POST['update_story'])) {

  $data = [
    'id' => $_POST["chapter_id"],
    'chapter_name' => $_POST["chapter_name"],
    'description' => $_POST["description"],
  ];
  try {
    $sql =  "UPDATE story SET  chapter_name=:chapter_name, description=:description WHERE id=:id";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
    header("Location: ../../admin.php");
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
} else {
  print_r("Fasle");
}
