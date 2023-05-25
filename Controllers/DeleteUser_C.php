<?php
session_start();

$Montitle = 'Calendrier';

if (isset($_SESSION['email'])) {
    require '../Models/ConnectionToDB.class.php';
    require '../Models/DALUser.class.php';

    $OBJConnectionToDB = new DALUser($host, $dbname, $username, $passwordDB);
    $OBJConnectionToDB->connection();

    if (isset($_GET['id'])) {
        $id_user = (int) $_GET['id'];
        $requeteLireUsers = $OBJConnectionToDB->delete($id_user);
        header("Location: ../Controllers/ListUsers_C.php");
        exit(); // Terminer le script après la redirection
    }
} else {
    header("Location: ../Controllers/NOTLogedWelcome_C.php");
    exit();
}
?>