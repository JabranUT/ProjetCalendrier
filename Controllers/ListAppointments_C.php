<?php

	require '../Views/Header_V.php' ;

	require '../Models/DALConnectionToDB.class.php' ;

	require '../Models/DALAppointment.class.php' ;


	$OBJConnectionToDB = new DALAppointment($host,$dbname,$username,$password);
	//var_dump($OBJConnectionToDB);
	$OBJConnectionToDB->connection();
	$requeteLireAppointments = $OBJConnectionToDB->read();


	require '../Views/ListAppointments_V.php' ;

	require '../Views/Foot_V.php' ;
