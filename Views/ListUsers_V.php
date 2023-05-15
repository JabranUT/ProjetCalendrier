
<div class="container">

  <h2>Liste des Utilisateurs</h2>

  <br>

      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>password</th>
            <th>adresse</th>
            <th>téléphone</th>
          </tr>
          </thead>
            <tbody>
<?php

while ($users = $requeteLireUsers->fetch(PDO::FETCH_ASSOC)) {
 echo " <tr>
        <td>$users[id_user]</td>
        <td>$users[last_name]</td>
        <td>$users[first_name]</td>
        <td>$users[email]</td>
        <td>$users[password]</td>
        <td>$users[address]</td>
        <td>$users[phone]</td>

        <td>
        <a class='btn btn-primary btn-sm' id='noti' href='../Controllers/ModifyUser_C.php?id=$users[id_user]'>modif</a>
        <a class='btn btn-primary btn-sm' href='../Controllers/DeleteUser_C.php?id=$users[id_user]' onclick='return action()'>delete</a>
        </td>
        </tr>";
      }
?>

        </tbody>
      </table>
      </div>
