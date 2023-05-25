<?php 
session_start();

	$Montitle= 'Accueil';

if(isset($_SESSION['email']))
{
	header("location: ../Views/Welcome_V.php");
	exit(); // Terminer le script après la redirection
}else{
	header("location: ../Views/NOTLogedWelcome_V.php");
	exit();
}

?>