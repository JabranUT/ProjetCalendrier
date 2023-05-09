<?php

	require '../Views/Header_V.php' ;

	require '../Models/DALConnectionToDB.class.php' ;

	require '../Models/DALUser.class.php' ;


	$OBJConnectionToDB = new DALUser($host,$dbname,$username,$password);
	//var_dump($OBJConnectionToDB);
	$OBJConnectionToDB->connection();
	$requeteLireUsers = $OBJConnectionToDB->read();


	require '../Views/ListUsers_V.php' ;

	require '../Views/Foot_V.php' ;
