<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) 
{
    $emailLogin = $_POST['email'];
    $passwordLogin = $_POST['password'];

    require '../Models/ConnectionToDB.class.php';
    require '../Models/DALUser.class.php';

    // Récupérer les informations d'identification soumises
    $OBJConnectionToDB = new DALUser($host, $dbname, $username, $passwordDB);
    $OBJConnectionToDB->connection();
    $requeteLoginLook = $OBJConnectionToDB->LoginLook($emailLogin, $passwordLogin);
    $result = $requeteLoginLook->fetch(PDO::FETCH_ASSOC);

    if (!empty($emailLogin) && !empty($passwordLogin) && $result && $result['email'] == $emailLogin && $result['password'] == $passwordLogin) 
    {
            // Les informations d'identification sont correctes
            $_SESSION['email'] = $emailLogin;
            header("Location: ../Controllers/ListUsers_C.php");
            exit(); // Terminer le script après la redirection
    }else{
            // Les informations d'identification sont incorrectes
            $errorMessage = "Nom d'utilisateur ou mot de passe incorrect !";
            header("Location: ../Views/Login_V.php?error=" . urlencode($errorMessage));
            exit(); // Terminer le script après la redirection
    }
}

?>
