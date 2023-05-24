<?php
require('../config.php');
$db =  new Database();
if (isset($_POST['delete_user'])) {
  try {
    $id = $_POST["delete_user"];
    $sql = $sql = 'DELETE FROM users WHERE id =' . $id;
    $db->conn->exec($sql);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
  header("Location: ../../admin.php");
}
