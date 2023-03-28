<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<a href='./'>volver</a><br>
<div>
	<form action="carta.php" method="post">
		<label>nombre</label>
		<input type="text" name="nom" placeholder="nombre"><br>
		<label>apellido</label>
		<input type="text" name="ape" placeholder="apellido"><br>
		<label>edad</label>
		<input type="number" name="edad" placeholder="edad"><br>
		<label>telefono</label>
		<input type="tel" name="tel" placeholder="telefono"><br>
		<label>direccion</label>
		<input type="text" name="dir" placeholder="direccion"><br>
		<label>numero de direccion</label>
		<input type="number" name="nro" placeholder="numero de direccion"><br>

		<button type="submit">enviar</button>
	</form>
</div>
<content>
	<?php 
		include "presentacion.php"

	?>
</content>
</body>
</html>