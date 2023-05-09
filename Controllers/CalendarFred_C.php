<?php
session_start();

if(isset($_SESSION['email'])){
	
	require '../Views/Header_V.php' ;

	require '../Models/DALCalendrierFred.class.php' ;


	require '../Views/CalendarFred_V.php' ;

	require '../Views/Foot_V.php' ;

}
if(!isset($_SESSION['email'])){
header("location: ../Controllers/NOTLogedWelcome_C.php");
}
?>