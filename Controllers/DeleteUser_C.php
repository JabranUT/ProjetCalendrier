<?php 

session_start();

if(isset($_SESSION['email'])){

	$Montitle= 'Calendrier';


	require '../Views/Header_V.php' ;

	require '../Models/DALConnectionToDB.class.php' ;

	require '../Models/DALUser.class.php' ;

		$OBJConnectionToDB = new DALUser($host,$dbname,$username,$password);
	//var_dump($OBJConnectionToDB);
	$OBJConnectionToDB->connection();
	$id_user = (int) $_GET['id'];
	$requeteLireUsers = $OBJConnectionToDB->delete($id_user);
	header("location: ../Controllers/ListUsers_C.php");

}
if(!isset($_SESSION['email'])){
header("location: ../Controllers/NOTLogedWelcome_C.php");
}
?>