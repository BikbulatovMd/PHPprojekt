<?php
require('../config.php');
$user = $User->get_users();
$db =  new Database();
if (isset($_POST['update_user'])) {

  $data = [
    'id' => $_POST["id"],
    'email' => $_POST["email"],
    'name' => $_POST["name"],
    'password' => $_POST["password"],
    'role' => $_POST["role"]
  ];
  try {
    $sql =  "UPDATE users SET id=:id, user_email=:email, user_name=:name, user_password=:password, user_role=:role WHERE id=:id";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
    header("Location: ../../admin.php");
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
} else {
  print_r("Fasle");
}
