<?php
session_start();

$Montitle = 'Calendrier';

if (isset($_SESSION['email'])) {
    require '../Views/Header_V.php';
    require '../Models/ConnectionToDB.class.php';
    require '../Models/DALAppointment.class.php';

    $OBJConnectionToDB = new DALAppointment($host, $dbname, $username, $password);
    $OBJConnectionToDB->connection();

    if (isset($_GET['id'])) {
        $id_appointment = (int) $_GET['id'];
        $requeteLireAppointments = $OBJConnectionToDB->delete($id_appointment);
        header("Location: ../Controllers/ListAppointments_C.php");
        exit(); // Terminer le script après la redirection
    }
} else {
    header("Location: ../Controllers/NOTLogedWelcome_C.php");
    exit();
}
?>