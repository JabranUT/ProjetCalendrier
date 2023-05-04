
<div class="container">

  <h2>Liste des rendez-vous</h2>

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
            <th>date</th>
            <th>heure</th>
          </tr>
          </thead>
            <tbody>

<?php

while ($appointments = $requeteLireAppointments->fetch(PDO::FETCH_ASSOC)) {
 echo " <tr>
        <td>$appointments[id_appointment]</td>
        <td>$appointments[last_name]</td>
        <td>$appointments[first_name]</td>
        <td>$appointments[email]</td>
        <td>$appointments[password]</td>
        <td>$appointments[address]</td>
        <td>$appointments[phone]</td>
        <td>$appointments[date]</td>
        <td>$appointments[hour]</td>

        <td>
        <a class='btn btn-primary btn-sm' href='../Controllers/ModifyAppointment_C.php?id=$appointments[id_appointment]'>modif</a>
        <a class='btn btn-primary btn-sm' href='../Models/DeleteAppointment_M.php?id=$appointments[id_appointment]'>delete</a>
        </td>
        </tr>";
      }
?>

        </tbody>
      </table>
      </div>


