<?php
session_start();
unset($_SESSION["user_name"]);
echo 'Boli ste odhlásení';
session_destroy();
header("Location: ../../index.php");
