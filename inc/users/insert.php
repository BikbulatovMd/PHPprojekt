<?php
require('../config.php');
$db =  new Database();
if (isset($_POST['add_user'])) {
  print_r("Success");
  $data = [
    'email' => $_POST["user_email"],
    'name' => $_POST["user_name"],
    'password' => md5($_POST["user_password"]),
    'role' => $_POST["user_role"]
  ];
  try {
    $sql = "INSERT INTO users (user_email, user_name, user_password, user_role) VALUES (:email, :name, :password, :role)";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
} else {
  print_r("Failed");
}
