<?php
include('partials/header.php');
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
      include('inc/contact/select.php');
      ?>
    </section>
    <section>
      <h2>Characters</h2>
      <form action="inc/qna/insert.php" method="post">
        <input type="text" name="question" placeholder="Názov otázky">
        <input type="text" name="answer" placeholder="Názov odpovede">
        <input type="submit" value="Pridať" name="add_qna">
      </form>
    </section>
    <section>
      <h2>Games</h2>
    </section>
    <section>
      <h2>Idit story</h2>
    </section>
    <section>
      <h2>Users</h2>
    </section>
</main>

<?php
include('partials/footer.php');
?>