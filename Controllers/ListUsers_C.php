<?php
session_start();

	if(isset($_SESSION['email'])){

		require '../Models/ConnectionToDB.class.php' ;
		require '../Models/DALUser.class.php' ;

		$OBJConnectionToDB = new DALUser($host,$dbname,$username,$passwordDB);
		//var_dump($OBJConnectionToDB);
		$OBJConnectionToDB->connection();
		$requeteLireUsers = $OBJConnectionToDB->read();

		require '../Views/ListUsers_V.php' ;
		
		}
		
	if(!isset($_SESSION['email'])){
		header("location: ../Controllers/NOTLogedWelcome_C.php");
	}
?>