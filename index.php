<!DOCTYPE html>
<html lang="en">

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
  <?php
  include('partials/header.php');
  ?>

  <main class="container">
    <div class="page-wrapper scrollspy">
      <div class="col-2 d-none d-md-block">
        <div class="list-group" id="list-example">
          <a class="list-group-item list-group-item-action" href="#lord">Lord of the Rings</a>
          <a class="list-group-item list-group-item-action" href="#conflict">Main conflict</a>
          <a class="list-group-item list-group-item-action" href="#backstory">Backstory</a>
          <a class="list-group-item list-group-item-action" href="#synopsis">Synopsis</a>
          <a class="list-group-item list-group-item-action" href="#frodo">Frodo</a>
          <a class="list-group-item list-group-item-action" href="#bilbo">Bilbo</a>
          <a class="list-group-item list-group-item-action" href="#gandalf">Gandalf</a>
          <a class="list-group-item list-group-item-action" href="#sauron">Sauron</a>
          <a class="list-group-item list-group-item-action" href="#aragorn">Aragorn</a>
          <a class="list-group-item list-group-item-action" href="#legolas">Legolas</a>
          <a class="list-group-item list-group-item-action" href="#gimli">Gimli</a>
          <a class="list-group-item list-group-item-action" href="#mary">Mary</a>
          <a class="list-group-item list-group-item-action" href="#sam">Sam</a>
        </div>
      </div>
      <?php
      include('partials/accordion.php');
      ?>
    </div>

    <!-- Kreativny kod -->
    <div class="go-top hide d-flex d-sm-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
      </svg>
    </div>
  </main>

  <?php
  include('partials/footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>