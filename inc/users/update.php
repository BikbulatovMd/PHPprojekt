<?php
require('../config.php');
$user = $User->get_users();
$db =  new Database();
if (isset($_POST['update_user'])) {

  $data = [
    'email' => $_POST["user_email"],
    'name' => $_POST["user_name"],
    'password' => $_POST["user_password"],
    'role' => $_POST["user_role"]
  ];
  try {
    $sql =  "UPDATE users SET user_email=:email, user_name=:name, user_password=:password, user_role=:role WHERE id=:id";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
    header("Location: ../../admin.php");
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
} else {
  print_r("Fasle");
}
