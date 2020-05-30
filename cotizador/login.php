<?php
session_start();
if(!empty($_SESSION['login_user']))
{
header('Location: cotizaciones.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Eduardo Carrasco Fotografia | Login - Cotizaciones</title>
	<link rel="stylesheet" type="text/css" href="librerias/css/login.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
	<script src="librerias/alertifyjs/alertify.js"></script>
</head>
<body>
	<div id="error"></div>
	<div id="login-button">
  <img src="img/login-w-icon.png">
  </img>
</div>
<div id="container">
  <h1>Log In</h1>
  <span class="close-btn .fa .fa-window-close">
  </span>

  <form id="frmlg" name="frmlg" method="post">
    <input type="text" name="username" placeholder="Usuario" id="username">
    <input type="password" name="pass" placeholder="Password" id="pass">
    <input type="submit" class="botonlg orange-btn" value="Ingresar" id="login">
    <div id="remember-container">
      <span id="forgotten">Olvidaste el password</span>
    </div>
</form>
</div>

<!-- Forgotten Password Container -->
<div id="forgotten-container">
   <h1>Olvido</h1>
  <span class="close-btn .fa .fa-window-close">
  </span>

  <form id="frmrecovery" name="frmrecovery" method="post">
    <input type="email" name="email" placeholder="E-mail" id="email">
    <input type="submit" class="botonrecovery orange-btn" value="Recuperar password" id="recuperar">
</form>
</div>


<script src="librerias/TweenMax.min.js"></script>
<script src="librerias/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/auth.js"></script>
</body>
</html>