<?php 
session_start();

if(isset($_SESSION['email'])){
	$Montitle= 'Ajouter un utilisateur';

	require '../Views/Header_V.php' ;

	require '../Views/FormUser_V.php' ;

	require '../Views/Foot_V.php' ;

}
if(!isset($_SESSION['email'])){
header("location: ../Controllers/NOTLogedWelcome_C.php");
}
?>