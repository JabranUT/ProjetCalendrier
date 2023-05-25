<?php
session_start();

	if(isset($_SESSION['email'])){
		
		require '../Models/ConnectionToDB.class.php' ;

		require '../Models/DALAppointment.class.php' ;

		$OBJConnectionToDB = new DALAppointment($host,$dbname,$username,$passwordDB);
		$OBJConnectionToDB->connection();
		$requeteLireAppointments = $OBJConnectionToDB->read();

		require '../Views/ListAppointments_V.php' ;

		}
		
	if(!isset($_SESSION['email'])){
		header("location: ../Controllers/NOTLogedWelcome_C.php");
	}
?>