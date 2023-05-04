<?php



  try
{
  // On se connecte à MySQL
  $maConnection = new PDO('mysql:host=127.0.0.1;dbname=projet_calendrier;charset=utf8', 'root', '');
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$id_appointment = (int) $_GET['id'];
var_dump($id_appointment);




$maRequete = 'DELETE FROM appointments WHERE id_appointment='.$id_appointment.'';
$requeteDeleteAppointment= $maConnection->prepare($maRequete);
$requeteDeleteAppointment->execute();



header("location: ../Controllers/Calendar_C.php");