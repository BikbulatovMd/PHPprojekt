<?php
$game = $Game->get_game();
echo '<section class="container">';
echo '<table class="admin-table">';
echo '<div class="table-wrap">';
echo '<table class="table table-bordered table-light table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>№</th>';
echo '<th>Name</th>';
echo '<th>Date</th>';
echo '<th>Story</th>';
echo '<th>Manage</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody class="table-group-divider">';
echo '<tr>';
echo '<td colspan="5"><form class="add" action="inc/games/insert.php" method="post"><input  type="text" name="game_name" required>';
echo '<input type="text" name="game_date" required>';
echo '<input type="text" name="story" required>';
echo '
<button type = "submit" name="add_game">Add</button>
</form></td></td>';
echo '</tr>';
foreach ($game as $c) {
  echo '<tr>';
  echo '<td>' . $c->id;
  '</td>';
  echo '<td>' . $c->game_name;
  '</td>';
  echo '<td>' . $c->game_date;
  '</td>';
  echo '<td>' . $c->story;
  '</td>';
  echo '<td>
                            <form action="inc/games/delete.php" method="post">
                                <button type = "submit" name="delete_game" value="' . $c->id . '"' . '>Delete</button>
                            </form>';
  echo '</td>';
  echo '</tr>';
  echo '<td colspan="5"><form class="add" action="inc/games/update.php" method="post">';
  echo '<input  type="hidden" name="game_id" required value="' . $c->id . '">';
  echo '<input  type="text" name="game_name" required value="' . $c->game_name . '">';
  echo '<input type="text" name="game_date" required value="' . $c->game_date . '">';
  echo '<input type="text" name="story" required value="' . $c->story . '">';
  echo '<button type = "submit" name="update_game">Change</button></form></td></td>';
  echo '</tr>';
  echo '</div>';
}
echo '</table>';
echo '</section>';
