
<div class="container">

  <h2>Liste des rendez-vous</h2>

  <br>

      <table class="table">
        <thead>
          <tr>
            <th>id_patient</th>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>adresse</th>
            <th>téléphone</th>
            <th>date</th>
            <th>heure</th>
          </tr>
          </thead>
            <tbody>

<?php

while ($ppointements = $requeteLireAppointement->fetch(PDO::FETCH_ASSOC)) {
 echo " <tr>
        <td>$appointements[id]</td>
        <td>$appointements[last_name]</td>
        <td>$appointements[first_name]</td>
        <td>$appointements[email]</td>
        <td>$appointements[address]</td>
        <td>$appointements[phone]</td>
        <td>$appointements[date]</td>
        <td>$appointements[hour]</td>

        <td>
        <a class='btn btn-primary btn-sm' href='../Controllers/modifyAppointment.php?id=$appointements[id_appointment]'>modif</a>
        <a class='btn btn-primary btn-sm' href='../Modele/DeleteAppointment.php?id=$appointements[id_appointment]'>delete</a>
        </td>
        </tr>";
      }
?>

        </tbody>
      </table>
      </div>


