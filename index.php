<?php
include('partials/header.php');
?>

<main class="container">
  <div class="page-wrapper scrollspy">
    <?php
    include('partials/scroll.php');
    ?>
    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
      <?php
      include('partials/accordion.php');
      ?>
    </div>
  </div>

  <div class="go-top hide d-flex d-sm-none">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
    </svg>
  </div>
</main>

<?php
include('partials/footer.php');
?>