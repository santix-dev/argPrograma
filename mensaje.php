<?php 
if (isset($_POST['user']) || isset($_POST['psw'])) {
	echo "datos incorrectos";
	echo "<a href='login.php'>volver</a>";
}else
{
	echo "<h1>Hola santi gimenez</h1>";
	echo "<p>Este es tu mensaje de bienvenida</h1>";
}
?>
