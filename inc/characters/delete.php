<?php
require('../Database.php');
$db =  new Database();
if (isset($_POST['delete_character'])) {
  try {
    $id = $_POST["delete_character"];
    $sql = $sql = 'DELETE FROM characters WHERE id =' . $id;
    $db->conn->exec($sql);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
  header("Location: ../../admin.php");
}
