<?php
session_start();

if(isset($_SESSION['email'])){

	require '../Views/Header_V.php' ;

	require '../Models/ConnectionToDB.class.php' ;

	require '../Models/DALAppointment.class.php' ;

		$OBJConnectionToDB = new DALAppointment($host,$dbname,$username,$passwordDB);
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
$address = $_POST['address'];
$phone = (int) $_POST['phone'];
$date = date('Y-m-d', strtotime($_POST['date'])); // format de date MySQL (YYYY-MM-DD)
$hour = date('H:i', strtotime($_POST['hour'])); // format de temps MySQL (HH:MM:SS)

	$requeteModifyAppointment = $OBJConnectionToDB->update($id_appointment, $last_name, $first_name, $email, $address, $phone, $date, $hour);
	//var_dump($requeteModifyAppointment);
	header("location: ../Controllers/ListAppointments_C.php");
}

	require '../Views/ModifyAppointment_V.php' ;

	require '../Views/Foot_V.php' ;
}
if(!isset($_SESSION['email'])){
header("location: ../Controllers/NOTLogedWelcome_C.php");
}
?>