<?php
require('../database.php');
$db =  new Database();
if (isset($_POST['contact_us'])) {

  $data = [
    'contact_name' => $_POST["contact_name"],
    'contact_email' => $_POST["contact_email"],
    'comment' => $_POST["text"],
  ];
  try {
    $query = "INSERT INTO contact (contact_name, contact_email,comment) VALUES (:contact_name, :contact_email,:comment)";
    $query_run = $db->conn->prepare($query);
    $query_run->execute($data);
    header("Location: ../../thank_you.php");
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
  header("Location: ../../admin.php");
} else {
  print_r("F");
}
