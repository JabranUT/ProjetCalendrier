<?php


try
{
  // On se connecte à MySQL
  $maConnection = new PDO('mysql:host=127.0.0.1; dbname=projet_calendrier; charset=utf8', 'root', '');
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

	$maRequete = 'SELECT * FROM appointement';
$requeteLireAppointement= $maConnection->prepare($maRequete);
$requeteLireAppointement->execute();
?>