<?php
$character = $Character->get_character();
echo '<section class="container">';
echo '<table class="admin-table">';
echo '<div class="table-wrap">';
echo '<table class="table table-bordered table-light table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>Img</th>';
echo '<th>Name</th>';
echo '<th>Info</th>';
echo '<th>Manage</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody class="table-group-divider">';
echo '<tr>';
echo '<td colspan="4"><form class="add"  action="inc/characters/insert.php" method="post"><input  type="text" name="img" required>';
echo '<input type="text" name="name" required>';
echo '<input type="text" name="info" required>';
echo '
<button type = "submit" name="add_character">Add</button>
</form></td></td>';
echo '</tr>';
foreach ($character as $c) {
  echo '<tr>';
  echo '<td>' . $c->img;
  '</td>';
  echo '<td>' . $c->name;
  '</td>';
  echo '<td>' . $c->info;
  '</td>';
  echo '<td>
                            <form action="inc/characters/delete.php" method="post">
                                <button type = "submit" name="delete_character" value="' . $c->id . '"' . '>Delete</button>
                            </form>';
  echo '</td>';
  echo '</tr>';
  echo '<td colspan="4"><form class="add"  action="inc/characters/update.php" method="post">';
  echo '<input  type="hidden" name="char_id" required value="' . $c->id . '">';
  echo '<input  type="text" name="update_img" required value="' . $c->img . '">';
  echo '<input type="text" name="update_name" required value="' . $c->name . '">';
  echo '<input type="text" name="update_info" required value="' . $c->info . '">';
  echo '<button type = "submit" name="update_character">Change</button></form></td></td>';
  echo '</tr>';
  echo '</div>';
}
echo '</table>';
echo '</section>';
