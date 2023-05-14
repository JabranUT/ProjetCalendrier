<?php 
session_start();

if(isset($_SESSION['email'])){

	$Montitle= 'prendre un rendez-vous';

	require '../Views/Header_V.php' ;

	require '../Views/FormAppointment_V.php' ;

	require '../Views/Foot_V.php' ;
	}
	
if(!isset($_SESSION['email'])){
header("location: ../Controllers/NOTLogedWelcome_C.php");
}
?>