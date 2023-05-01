<?php


try
{
  // On se connecte à MySQL
  $maConnection = new PDO('mysql:host=127.0.0.1; dbname=test; charset=utf8', 'root', '');
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

	$maRequete = 'SELECT * FROM evenements';
$requeteTest= $maConnection->prepare($maRequete);
$requeteTest->execute();
?>