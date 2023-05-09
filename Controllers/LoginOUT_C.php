<?php 
session_start();
session_destroy();  
header("location: ../Controllers/NOTLogedWelcome_C.php");
?>