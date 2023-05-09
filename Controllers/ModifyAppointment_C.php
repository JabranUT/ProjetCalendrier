<?php

	require '../Views/Header_V.php' ;

	require '../Models/DALConnectionToDB.class.php' ;

	require '../Models/DALAppointment.class.php' ;

		$OBJConnectionToDB = new DALAppointment($host,$dbname,$username,$password);
	//var_dump($OBJConnectionToDB);
	$OBJConnectionToDB->connection();

if ( !isset( $_POST['submit'] ) ){
	$id_appointment = (int) $_GET['id'];

	$requeteLireAppointments = $OBJConnectionToDB->read($id_appointment);
	var_dump($requeteLireAppointments);
	$appointment = $requeteLireAppointments->fetch(PDO::FETCH_ASSOC);}

if ( isset( $_POST['submit'] ) ){

$id_appointment = (int) $_POST['id_appointment'];
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = (int) $_POST['phone'];
$date = date('Y-m-d', strtotime($_POST['date'])); // format de date MySQL (YYYY-MM-DD)
$hour = date('H:i', strtotime($_POST['hour'])); // format de temps MySQL (HH:MM:SS)

	$requeteModifyAppointment = $OBJConnectionToDB->update($id_appointment, $last_name, $first_name, $email, $password, $address, $phone, $date, $hour);
	//var_dump($requeteModifyAppointment);
	header("location: ../Controllers/ListAppointments_C.php");
}

	require '../Views/ModifyAppointment_V.php' ;

	require '../Views/Foot_V.php' ;
