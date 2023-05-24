<?php
$user = $User->get_users();
echo '<section class="container">';
echo '<table class="admin-table">';
echo '<div class="table-wrap">';
echo '<table class="table table-bordered table-light table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>Email</th>';
echo '<th>Name</th>';
echo '<th>Password</th>';
echo '<th>Role</th>';
echo '<th>Manage</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody class="table-group-divider">';
echo '<tr>';
echo '<td colspan="5"><form class="add"  action="inc/users/insert.php" method="post"><input  type="text" name="email" required>';
echo '<input type="text" name="name" required>';
echo '<input type="text" name="password" required>';
echo '<input type="text" name="role" required>';
echo '
<button type = "submit" name="add_user">Add</button>
</form></td></td>';
echo '</tr>';
foreach ($user as $c) {
  echo '<tr>';
  echo '<td>' . $c->user_email;
  '</td>';
  echo '<td>' . $c->user_name;
  '</td>';
  echo '<td>' . $c->user_password;
  '</td>';
  echo '<td>' . $c->user_role;
  '</td>';
  echo '<td>
                            <form action="inc/users/delete.php" method="post">
                                <button type = "submit" name="delete_user" value="' . $c->id . '"' . '>Delete</button>
                            </form>';
  echo '</td>';
  echo '</tr>';
  echo '<td colspan="5"><form class="add"  action="inc/users/update.php" method="post">';
  echo '<input  type="hidden" name="id" required value="' . $c->id . '">';
  echo '<input  type="text" name="email" required value="' . $c->user_email . '">';
  echo '<input type="text" name="name" required value="' . $c->user_name . '">';
  echo '<input type="hidden" name="password" required value="' . $c->user_password . '">';
  echo '<input type="text" name="role" required value="' . $c->user_role . '">';
  echo '<button type = "submit" name="update_user">Change</button></form></td></td>';
  echo '</tr>';
  echo '</div>';
}
echo '</table>';
echo '</section>';
