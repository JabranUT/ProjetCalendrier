<?php 

	$Montitle= 'prendre un rendez-vous';


	require '../Models/ConnectionToDB.class.php' ;

	require '../Models/DALAppointment.class.php' ;

	if ( isset( $_POST['submit'] ) ){


	$last_name = $_POST['last_name'];
	$first_name = $_POST['first_name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = (int) $_POST['phone'];
	$date = date('Y-m-d', strtotime($_POST['date'])); // format de date MySQL (YYYY-MM-DD)
	$hour = date('H:i', strtotime($_POST['hour'])); // format de temps MySQL (HH:MM:SS)

var_dump($last_name);
var_dump($first_name);

	$OBJConnectionToDB = new DALAppointment($host,$dbname,$username,$passwordDB);
	var_dump($OBJConnectionToDB);
	$OBJConnectionToDB->connection();

	$requeteAddAppointment = $OBJConnectionToDB->add($last_name, $first_name, $email, $address, $phone, $date, $hour);
	var_dump($requeteAddAppointment);

}


header("location: ../Controllers/NOTLogedNotification_C.php");
?>