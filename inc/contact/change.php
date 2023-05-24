<?php
$contact = $Contact->get_contact();
echo '<section class="container">';
echo '<table class="admin-table">';
echo '<div class="table-wrap">';
echo '<table class="table table-bordered table-light table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>Name</th>';
echo '<th>E-mail</th>';
echo '<th>Comment</th>';
echo '<th>Delete</th>';
echo '</tr>';
echo '</thead>';
foreach ($contact as $c) {
  echo '<tbody class="table-group-divider">';
  echo '<tr>';
  echo '<td>' . $c->contact_name;
  '</td>';
  echo '<td>' . $c->contact_email;
  '</td>';
  echo '<td>' . $c->comment;
  '</td>';
  echo '<td>
                            <form action="inc/contact/delete.php" method="post">
                                <button type = "submit" name="delete_contact" value="' . $c->id . '"' . '>Delete</button>
                            </form></td>';
  echo '</tr>';
  echo '</div>';
}
echo '</table>';
echo '</section>';
