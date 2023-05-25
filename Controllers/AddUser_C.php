<?php
session_start();

$Montitle = 'prendre un rendez-vous';

if (isset($_SESSION['email'])) {
    require '../Models/ConnectionToDB.class.php';
    require '../Models/DALUser.class.php';

    if (isset($_POST['submit'])) {
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = (int) $_POST['phone'];

        $OBJConnectionToDB = new DALUser($host, $dbname, $username, $passwordDB);
        $OBJConnectionToDB->connection();
        $requeteAddUser = $OBJConnectionToDB->add($last_name, $first_name, $email, $password, $address, $phone);
    }

    header("Location: ../Controllers/ListUsers_C.php");
    exit(); // Terminer le script après la redirection
} else {
    header("Location: ../Controllers/NOTLogedWelcome_C.php");
    exit();
}
?>
