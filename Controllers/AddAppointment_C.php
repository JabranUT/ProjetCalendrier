<?php
session_start();

$Montitle = 'prendre un rendez-vous';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = (int) $_POST['phone'];

    // Validation de la longueur des champs introduits:
    if (strlen($last_name) > 20) 
    {
        $error_message_last_name = "La saisie dans le champs Nom ne doit pas dépasser 20 caractères.";
        // Stockez le message d'erreur dans une variable de session
        $_SESSION['error_message_last_name'] = $error_message_last_name;
        header("Location: ../Views/FormAppointment_V.php?error_message=");
        exit(); // Arrêter l'exécution du script
    } 
    elseif (strlen($first_name) > 20) 
    {
        $error_message_first_name = "La saisie dans le champs Prénom ne doit pas dépasser 20 caractères.";
        // Stockez le message d'erreur dans une variable de session
        $_SESSION['error_message_first_name'] = $error_message_first_name;
        header("Location: ../Views/FormAppointment_V.php?error_message=");
        exit();
    }
    elseif (strlen($email) > 50)
    {
        $error_message_email = "La saisie dans le champs email ne doit pas dépasser 50 caractères.";
        // Stockez le message d'erreur dans une variable de session
        $_SESSION['error_message_email'] = $error_message_email;
        header("Location: ../Views/FormAppointment_V.php?error_message=");
        exit();
    }
    elseif (strlen($address) > 50)
    {
        $error_message_address = "La saisie dans le champs adresse ne doit pas dépasser 50 caractères.";
        // Stockez le message d'erreur dans une variable de session
        $_SESSION['error_message_address'] = $error_message_email;
        header("Location: ../Views/FormAppointment_V.php?error_message=");
        exit();
    }
    elseif (strlen($phone) > 15)
    {
        $error_message_phone = "La saisie dans le champs phone ne doit pas dépasser 15 caractères.";
        // Stockez le message d'erreur dans une variable de session
        $_SESSION['error_message_phone'] = $error_message_phone;
        header("Location: ../Views/FormAppointment_V.php?error_message=");
        exit();
    }

    // Le nom est valide, poursuivre le traitement
    // ...
}

if (isset($_SESSION['email'])) {
    require '../Models/ConnectionToDB.class.php';
    require '../Models/DALAppointment.class.php';

    if (isset($_POST['submit'])) {
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = (int) $_POST['phone'];
        $date = date('Y-m-d', strtotime($_POST['date'])); // format de date MySQL (YYYY-MM-DD)
        $hour = date('H:i', strtotime($_POST['hour'])); // format de temps MySQL (HH:MM:SS)

        $OBJConnectionToDB = new DALAppointment($host, $dbname, $username, $passwordDB);
        $OBJConnectionToDB->connection();

        $requeteAddAppointment = $OBJConnectionToDB->add($last_name, $first_name, $email, $address, $phone, $date, $hour);
        var_dump($requeteAddAppointment);
        
        header("Location: ../Controllers/ListAppointments_C.php");
        exit(); // Terminer le script après la redirection
    }
} else {
    header("Location: ../Controllers/NOTLogedWelcome_C.php");
    exit();
}
?>
