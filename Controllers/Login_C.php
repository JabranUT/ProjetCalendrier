<?php
session_start();

	require '../Views/NOTLogedHeader_V.php' ;

if(!isset($_POST['email']) && !isset($_POST['password'])){	
?>	
	<form action="login_C.php" method="POST">
		<label>Entrer votre email:</label>
		<input type="email" name="email">
		<label>Entrer votre mot de passe:</label>
		<input type="password" name="password">
		<input type="submit" name="submit" value="envoyer">
	</form> 
<?php
	echo "        ---->erreur email ou mdp<----";
};


if(isset($_POST['email']) && isset($_POST['password'])){

	//echo ''.$_POST['email'].'';

		$emailLogin = $_POST['email'];
		$passwordLogin = $_POST['password'];

	require '../Models/ConnectionToDB.class.php' ;

	require '../Models/DALUser.class.php' ;

	// Récupérer les informations d'identification soumises
			
	$OBJConnectionToDB = new DALUser($host,$dbname,$username,$passwordDB);
	$OBJConnectionToDB->connection();

	$requeteLoginLook = $OBJConnectionToDB->LoginLook($emailLogin,$passwordLogin);

	$result = $requeteLoginLook->fetch(PDO::FETCH_ASSOC);
	if(!empty($emailLogin) && !empty($passwordLogin) && $result['email'] == $emailLogin && $result['password'] == $passwordLogin) {
        // Les informations d'identification sont correctes
                $_SESSION['email'] = $emailLogin;
        echo "L'utilisateur est connecté avec succès !";
        header("location: ../Controllers/ListUsers_C.php");
    } else {
        // Les informations d'identification sont incorrectes

        echo "Nom d'utilisateur ou mot de passe incorrect !";
		header("location: ../Controllers/Login_C.php");
    }

};

