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

  <main class="d-flex align-items-center justify-content-center">
    <section class="container mt-3 pb-3" id="contact-form">
      <h3 class="text-center">Feedback Form</h3>
      <!-- Form -->
      <form id="form">
        <div class="form-input">
          <label for="name" class="label">Name</label>
          <input type="text" name="name" id="name" placeholder="Name" class="input" />
          <small class="form-error-feedback"></small>
        </div>
        <div class="form-input">
          <label for="email" class="label">E-mail</label>
          <input type="text" name="email" id="email" placeholder="E-mail" class="input" />
          <small class="form-error-feedback"></small>
        </div>
        <div class="form-input">
          <label for="text" class="label">Your comment on the project</label>
          <textarea name="text" id="text" placeholder="Your comments" rows="5" class="input textarea"></textarea>
          <small class="form-error-feedback"></small>
        </div>
        <div class="form-input checkbox-input">
          <input type="checkbox" id="check" class="checkbox" />
          <label for="check" class="label">Consent to the processing of personal data</label>
          <small class="form-error-feedback"></small>
        </div>
        <button type="submit" id="form-btn">Submit</button>
      </form>
    </section>
  </main>
  <?php
  include('partials/footer.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="./js/contacts.js"></script>
</body>

</html>