<?php 
session_start();
if(isset($_SESSION['email'])){

	$Montitle= 'prendre un rendez-vous';


	require '../Models/DALConnectionToDB.class.php' ;

	require '../Models/DALUser.class.php' ;

	if ( isset( $_POST['submit'] ) ){


	$last_name = $_POST['last_name'];
	$first_name = $_POST['first_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$phone = (int) $_POST['phone'];

var_dump($last_name);
var_dump($first_name);
var_dump($password);

	$OBJConnectionToDB = new DALUser($host,$dbname,$username,$passwordDB);
	var_dump($OBJConnectionToDB);
	$OBJConnectionToDB->connection();

	$requeteAddUser = $OBJConnectionToDB->add($last_name, $first_name, $email, $password, $address, $phone);
	//var_dump($requeteAddUser);

}

header("location: ../Controllers/ListUsers_C.php");
}
if(!isset($_SESSION['email'])){
header("location: ../Controllers/NOTLogedWelcome_C.php");
}
?>