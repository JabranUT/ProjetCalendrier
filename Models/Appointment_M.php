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

$maRequete = 'SELECT * FROM appointments';
$requeteLireAppointments= $maConnection->prepare($maRequete);
$requeteLireAppointments->execute();

}

if ( isset( $_POST['submit'] ) ){

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

$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = (int) $_POST['phone'];
$date = date('Y-m-d', strtotime($_POST['date'])); // format de date MySQL (YYYY-MM-DD)
$hour = date('H:i:s', strtotime($_POST['hour'])); // format de temps MySQL (HH:MM:SS)


var_dump($last_name);
var_dump($first_name);
var_dump($email);
var_dump($password);
var_dump($address);
var_dump($phone);
var_dump($date);
var_dump($hour);

$maRequete = "INSERT INTO appointments (`id_appointment`, `last_name`, `first_name`, `email`, `password`, `address`, `phone`, `date`, `hour`) VALUES(NULL, '$last_name', '$first_name', '$email', '$password', '$address', '$phone', '$date', '$hour')";

$requeteAjoutAppointment= $maConnection->prepare($maRequete);
$requeteAjoutAppointment->execute();
var_dump($requeteAjoutAppointment);

header("location: ../Controllers/Welcome_C.php");
}