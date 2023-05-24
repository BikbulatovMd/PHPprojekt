<section class="container">
  <h2>Character Knowledge Base</h2>
  <div class="card-list" style="color: black">
    <?php
    $character = $Character->get_character();
    for ($i = 0; $i < count($character); $i++) {
      echo '<div class="myCardWrapper">';
      echo '<div class="card myCard">';
      echo '<img src="' . $character[$i]->img . '" class="card-img-top myCardImg" alt="' . $character[$i]->name . '" />';
      echo '<div class="card-body myCardBody">';
      echo '<h5 class="card-title myCardTitle">' . $character[$i]->name . '</h5>';
      echo '<p class="card-text myCardText">' . $character[$i]->info . '</p>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    ?>
  </div>
</section>