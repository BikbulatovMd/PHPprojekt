<section class="container">
  <h2>Games</h2>
  <div class="table-wrap">
    <table class="table table-bordered table-light table-striped">
      <thead>
        <tr>
          <th>№</th>
          <th>Name</th>
          <th>Date</th>
          <th>Story</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php
        $game = $Game->get_game();
        for ($i = 0; $i < count($game); $i++) {
          echo '<tr>';
          echo '<th>' . $game[$i]->id . '</th>';
          echo '<td>' . $game[$i]->game_name . '</td>';
          echo '<td>' . $game[$i]->game_date . '</td>';
          echo '<td>' . $game[$i]->story . '</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</section>