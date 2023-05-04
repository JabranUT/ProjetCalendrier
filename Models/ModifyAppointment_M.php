<?php

if ( !isset( $_POST['submit'] ) ){
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

//afficher les fiches médicales du patient selectionner
$id_appointment = (int) $_GET['id'];


$maRequete = 'SELECT * FROM appointments WHERE id_appointment='.$id_appointment.'';


$requeteModifyAppointment= $maConnection->prepare($maRequete);
$requeteModifyAppointment->execute();
$appointment = $requeteModifyAppointment->fetch(PDO::FETCH_ASSOC);
//var_dump($appointment);

}



if ( isset( $_POST['submit'] ) ){

$id_appointment = (int) $_POST['id_appointment'];
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = (int) $_POST['phone'];
$date = date('Y-m-d', strtotime($_POST['date'])); // format de date MySQL (YYYY-MM-DD)
$hour = date('H:i', strtotime($_POST['hour'])); // format de temps MySQL (HH:MM:SS)


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





$maRequete = "UPDATE `appointments` SET `id_appointment` = '$id_appointment', `last_name` = '$last_name', `first_name` = '$first_name', `email` = '$email', `password` = '$password', `address` = '$address', `phone` = '$phone', `date` = '$date' , `hour` = '$hour'  WHERE `appointments`.`id_appointment` = '$id_appointment'";

//var_dump($maRequete);

$requeteModifyAppointment= $maConnection->prepare($maRequete);

$requeteModifyAppointment->execute();


header("location: ../Controllers/Calendar_C");
}

