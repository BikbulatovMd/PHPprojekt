<?php
$story = $Story->get_story();
echo '<section class="container">';
echo '<table class="admin-table">';
echo '<div class="table-wrap">';
echo '<table class="table table-bordered table-light table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>№</th>';
echo '<th>Name</th>';
echo '<th>Story</th>';
echo '<th>Manage</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody class="table-group-divider">';
echo '<tr>';
echo '<td colspan="4"><form class="add" action="inc/home/insert.php" method="post"><input  type="text" name="chapter_name" required>';
echo '<input type="text" name="description" required>';
echo '
<button type = "submit" name="add_chapter">Add</button>
</form></td></td>';
echo '</tr>';
foreach ($story as $c) {
  echo '<tr>';
  echo '<td>' . $c->id;
  '</td>';
  echo '<td>' . $c->chapter_name;
  '</td>';
  echo '<td>' . $c->description;
  '</td>';

  echo '<td>
                            <form action="inc/home/delete.php" method="post">
                                <button type = "submit" name="delete_chapter" value="' . $c->id . '"' . '>Delete</button>
                            </form>';
  echo '</td>';
  echo '</tr>';
  echo '<td colspan="5"><form class="add" action="inc/home/update.php" method="post">';
  echo '<input  type="hidden" name="chapter_id" required value="' . $c->id . '">';
  echo '<input  type="text" name="chapter_name" required value="' . $c->chapter_name . '">';
  echo '<input type="text" name="description" required value="' . $c->description . '">';
  echo '<button type = "submit" name="update_story">Change</button></form></td></td>';
  echo '</tr>';
  echo '</div>';
}
echo '</table>';
echo '</section>';
