<section class="container">
  <?php
  $story = $Story->get_story();
  for ($i = 0; $i < count($story); $i++) {
    echo '<section class="story">';
    echo '<h2>' . $story[$i]->chapter_name . '</h2>';
    echo '<p>' . $story[$i]->description . '</p>';
    echo '</section>';
  }
  ?>
</section>