<?php
require('../config.php');
$db =  new Database();
if (isset($_POST['delete_game'])) {
  try {
    $id = $_POST["delete_game"];
    $sql = $sql = 'DELETE FROM games WHERE id =' . $id;
    $db->conn->exec($sql);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
  header("Location: ../../admin.php");
}
