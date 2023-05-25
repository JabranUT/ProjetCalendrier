<?php

$Montitle = 'prendre un rendez-vous';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_name = $_POST['last_name'];

    // Validation de la longueur du nom
    if (strlen($last_name) > 11) {
        $error_message = "La saisie ne doit pas dépasser 11 caractères.";
        // Gérer l'erreur, par exemple, rediriger vers le formulaire avec le message d'erreur
        header("Location: ../Views/FormAppointment_V.php?error_message=" . urlencode($error_message));
        exit(); // Arrêter l'exécution du script
    }

    // Le nom est valide, poursuivre le traitement
    // ...
}
?>

<?php



?>
