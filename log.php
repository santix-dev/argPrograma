<?php 
$usuario="santi";
$contraseña="gimenez";
if ($_POST['user']!=$usuario && $_POST['psw']!=$contraseña)
	include 'mensaje.php';
else
	header("location: mensaje.php")




?>