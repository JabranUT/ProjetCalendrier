<?php
session_start();

if(isset($_SESSION['email'])){
	
	require '../Views/Header_V.php' ;

	require '../Models/ConnectionToDB.class.php' ;

	require '../Models/DALUser.class.php' ;

		$OBJConnectionToDB = new DALUser($host,$dbname,$username,$passwordDB);
	//var_dump($OBJConnectionToDB);
	$OBJConnectionToDB->connection();

if ( !isset( $_POST['submit'] ) ){
	$id_user = (int) $_GET['id'];

	$requeteLireUsers = $OBJConnectionToDB->read($id_user);
	//var_dump($requeteLireUsers);
	$user = $requeteLireUsers->fetch(PDO::FETCH_ASSOC);}

if ( isset( $_POST['submit'] ) ){

$id_user = (int) $_POST['id_user'];
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = (int) $_POST['phone'];




	$requeteModifyUser = $OBJConnectionToDB->update($id_user, $last_name, $first_name, $email, $password, $address, $phone);
	//var_dump($requeteModifyUser);
	header("location: ../Controllers/ListUsers_C.php");
}

	require '../Views/ModifyUser_V.php' ;

	require '../Views/Foot_V.php' ;
}
if(!isset($_SESSION['email'])){
header("location: ../Controllers/NOTLogedWelcome_C.php");
}
?>