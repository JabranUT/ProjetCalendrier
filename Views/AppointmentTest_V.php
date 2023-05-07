<?php

$OBJConnectionToDB = new DALAppointment($host,$dbname,$username,$password);
//var_dump($OBJConnectionToDB);
$OBJConnectionToDB->connection();
$result = $OBJConnectionToDB->read();

foreach ($result as $row) {
    // Accéder aux colonnes de chaque ligne de résultat

    $id_appointment = $row['id_appointment'];
    $last_name = $row['last_name'];
    $date = $row['date'];
    $hour = $row['hour'];
    
    // Afficher les valeurs correspondantes à chaque colonne
   echo "<table>
          <tr>
          <td>ID : $id_appointment </td>
          <td>Nom : $last_name </td>
          <td>date : $date </td>
          <td>hour : $hour </td>
          </tr>";
        };


