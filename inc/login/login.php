<?php
require('../config.php');
session_start();

$users = $User->get_users();
$db =  new Database();
$data = [
    'user_email' => $_POST["user_email"],
    'user_password' => md5($_POST["user_password"]),
];
$found = False;
$user_name = "";
$user_role = 0;
if (isset($_POST['log_user'])) {
    foreach ($users as $user) {
        if ($data['user_password'] == $user->user_password) {
            $found = True;
            $user_name = $user->user_name;
            $user_role = $user->user_role;
        }
    }
    if ($found == True) {
        $_SESSION['valid'] = true;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_role'] = $user_role;
        header("Location: ../../index.php");
    } else {
        header("Location: ../../wrong_password.php");
    }
}
