<?php
include('inc/config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="style/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Akaya Kanadaka" rel="stylesheet" />
  <title>Document</title>

</head>

<body>

  <header class="header">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container container-fluid">
        <a class="navbar-brand" href="index.php">
          LOTR
          <img src="./img/logo2.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top ms-2" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LOTR</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <?php
              print_menu($Header_menu);
              if (isset($_SESSION['user_name'])) {
                echo '<li class="nav-item" ><a class="nav-link" href="inc/login/logout.php">' . $_SESSION['user_name'] . '</a></li>';
              } else {
                echo '<li class="nav-item" ><a class="nav-link" href="login.php">Login/Registration</a></li>';
              }
              if (isset($_SESSION['user_name']) && ($_SESSION['user_role'] == 1)) {
                echo '<li class="nav-item" ><a class="nav-link" href="admin.php">Admin</a></li>';
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>