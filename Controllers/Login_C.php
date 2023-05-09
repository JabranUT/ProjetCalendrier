<?php

session_start();

	require '../Views/Header_V.php' ;

	require '../Models/DALConnectionToDB.class.php' ;

	require '../Models/DALUser.class.php' ;

	// Vérifier si le formulaire a été soumis
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Récupérer les informations d'identification soumises
			
		$emailLogin = $_POST['email'];
		$passwordLogin = $_POST['password'];

	$OBJConnectionToDB = new DALUser($host,$dbname,$username,$password);
	$OBJConnectionToDB->connection();

	$requeteLoginLook = $OBJConnectionToDB->LoginLook($emailLogin,$passwordLogin);

	// Récupération du résultat
$user = $stmt->fetch();

if ($user) {
    // L'utilisateur existe
} else {
    // L'utilisateur n'existe pas ou les informations d'identification sont incorrectes
}





	// Vérifier si les informations d'identification sont valides
	if ($username == 'mon_nom_utilisateur' && $password == 'mon_mot_de_passe') {

		// Les informations d'identification sont valides, créer une session pour l'utilisateur
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;

		// Rediriger l'utilisateur vers une page sécurisée
		header("Location: page_securisee.php");
		exit;
