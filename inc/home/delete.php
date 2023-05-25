<?php
require('../config.php');
$db =  new Database();
if (isset($_POST['delete_chapter'])) {
  try {
    $id = $_POST["delete_chapter"];
    $sql = $sql = 'DELETE FROM story WHERE id =' . $id;
    $db->conn->exec($sql);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
  header("Location: ../../admin.php");
}
