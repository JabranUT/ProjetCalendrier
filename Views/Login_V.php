<?php
require '../Views/NOTLogedHeader_V.php';
	// Afficher le message d'erreur s'il est présent dans l'URL
if (isset($_GET['error'])) {
    $errorMessage = $_GET['error'];
    echo $errorMessage;
}
?>
<div class="container">
	<h3>Page d'authentification</h3>
	<form action="../Controllers/Login_C.php" method="POST">
		<label for="email">Email de l'utilisateur :</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">Mot de passe :</label>
		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Se connecter">
	</form>
</div>
</body>
</html>
<?php
require '../Views/Foot_V.php';
?>