<div class="col-2 d-none d-md-block">
  <div class="list-group" id="list-example">
    <?php
    $story = $Story->get_story();
    for ($i = 0; $i < count($story); $i++) {
      echo '<a class="list-group-item list-group-item-action" href="#' . $story[$i]->chapter_name . '">' . $story[$i]->chapter_name . '</a>';
    }
    ?>
  </div>
</div>