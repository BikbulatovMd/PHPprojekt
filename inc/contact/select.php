<?php
$contact = $Contact->get_contact();
echo '<table class="admin-table">';
foreach ($contact as $c) {
  echo '<tr>';
  echo '<td>' . $c->contact_name;
  '</td>';
  echo '<td>' . $c->contact_email;
  '</td>';
  echo '<td>' . $c->comment;
  '</td>';
  echo '<td>
                            <form action="inc/contact/edit.php" method="post">
                                <button type = "submit" name="edit_contact" value="' . $c->id . '"' . '>Editovať</button>
                            </form></td>';
  echo '<td>
                            <form action="inc/contact/delete.php" method="post">
                                <button type = "submit" name="delete_contact" value="' . $c->id . '"' . '>Vymazať</button>
                            </form></td>';
  echo '</tr>';
}
echo '</table>';
