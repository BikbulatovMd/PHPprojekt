<?php
include('partials/header.php');
if ($_SESSION['user_role'] == 1) {
  header("Location: admin.php");
} else {
  header("Location: login.php");
}
?>

<main class="container">

  <body class="container">
    <section>
      <h1>Admin Page</h1>
      <p>Admin user - <?php echo ($_SESSION['user_name']); ?></p><br>
      <a href="inc/login/logout.php">Logout</a>
    </section>
    <section>
      <h2>Requests from the site</h2>
      <?php
      include('inc/contact/change.php');
      ?>
    </section>
    <section>
      <h2>Characters</h2>
      <?php
      include('inc/characters/change.php');
      ?>
    </section>
    <section>
      <h2>Games</h2>
      <?php
      include('inc/games/change.php');
      ?>
    </section>
    <section>
      <h2>Users</h2>
      <?php
      include('inc/users/change.php');
      ?>
    </section>
    <section>
      <h2>Home page</h2>
      <?php
      include('inc/home/change.php');
      ?>
    </section>
</main>

<?php
include('partials/footer.php');
?>