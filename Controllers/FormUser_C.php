<?php 
session_start();

	$Montitle= 'Ajouter un utilisateur';

	if(isset($_SESSION['email'])){

		require '../Views/FormUser_V.php' ;
		}
		
		
	if(!isset($_SESSION['email'])){
		header("location: ../Controllers/NOTLogedWelcome_C.php");
	}
?>