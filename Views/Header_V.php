<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gestion des rendez-vous</title>
	<link rel="stylesheet" href="">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<div class="container-fluid">
      <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Gestion des rendez-vous :</a>
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link " href="..\Views\Welcome_V.php">(Home)</a></li>
          <li class="nav-item"><a class="nav-link " href="..\Views\FormAppointment_V.php">(prendre un rendez-vous)</a></li>
          <li class="nav-item"><a class="nav-link " href="..\Controllers\ListAppointments_C.php">(gestion des rendez-vous)</a></li>
          <li class="nav-item"><a class="nav-link " href="..\Controllers\CalendarFred_C.php">(Calendrier)</a></li>
          <li class="nav-item"><a class="nav-link " href="..\Controllers\FormUser_C.php">(ajouter utilisateur)</a></li>
          <li class="nav-item"><a class="nav-link " href="..\Controllers\ListUsers_C.php">(gestion des utilisateurs)</a></li>
     
        </ul>
      </nav>
              <?php 
    if(isset($_SESSION['email'])) {
      Echo '<h3> Bonjour '.$_SESSION['email'].'
        <form action="..\Controllers\LoginOut_C.php" method="post" accept-charset="utf-8">
          <input type="submit" name="" value="Se déconnecter">

        </form></h2>';
    }

  ?>
    </div>

<body>
	
