<?php
require('../config.php');
$db =  new Database();
if (isset($_POST['add_user'])) {
  print_r("Success");
  $data = [
    'email' => $_POST["email"],
    'name' => $_POST["name"],
    'password' => md5($_POST["password"]),
    'role' => $_POST["role"]
  ];
  try {
    $sql = "INSERT INTO users (user_email, user_name, user_password, user_role) VALUES (:email, :name, :password, :role)";
    $query_run = $db->conn->prepare($sql);
    $query_run->execute($data);
    header("Location: ../../admin.php");
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
} else {
  print_r("Failed");
}
