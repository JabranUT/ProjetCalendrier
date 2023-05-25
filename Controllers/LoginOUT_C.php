<?php 
session_start();
session_destroy();  
header("location: ../Views/NOTLogedWelcome_V.php");
exit(); // Terminer le script après la redirection
?>