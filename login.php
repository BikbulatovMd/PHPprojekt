<?php
include('partials/header.php');
?>

<main class="d-flex align-items-center justify-content-center">
  <section class="container mt-3 pb-3" id="contact-form">
    <h3 class="text-center">Log in to your account</h3>
    <form action="inc/login/login.php" method="post">
      <div class="form-input">
        <label for="email" class="label">Email</label>
        <input type="email" name="user_email" placeholder="Your email" class="input">
        <small class="form-error-feedback"></small>
      </div>
      <div class="form-input">
        <label for="email" class="label">Password</label>
        <input type="password" name="user_password" placeholder="Your password" class="input">
        <small class="form-error-feedback"></small>
      </div>
      <input id="form-btn" type="submit" value="Login in" name="log_user">
    </form>
    <br>
    <p>Is this your first time here? <a href="register.php">Create account</a></p>
    </div>
    </div>
  </section>
</main>
<?php
include('partials/footer.php');
?>