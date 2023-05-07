<?php 
	$Montitle= 'Calendrier';


	require '../Views/Header_V.php' ;

	require '../Models/DALConnectionToDB.class.php' ;

	require '../Models/DALAppointment.class.php' ;

		$OBJConnectionToDB = new DALAppointment($host,$dbname,$username,$password);
	//var_dump($OBJConnectionToDB);
	$OBJConnectionToDB->connection();
	$id_appointment = (int) $_GET['id'];
	$requeteLireAppointments = $OBJConnectionToDB->delete($id_appointment);
	header("location: ../Controllers/Calendar_C.php");


?>