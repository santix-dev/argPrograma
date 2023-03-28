<?php 
if (isset($_POST["nom"])) 
{
	echo "Hola, mi nombre es {$_POST['nom']} {$_POST['ape']}, tengo {$_POST['edad']} años de edad. <br>";
	echo "Vivo en {$_POST['dir']} nro: {$_POST['nro']} y mi telefono de contacto es {$_POST['tel']} <br>";
	echo "Soy una persona proactiva en busca de nuevas experiencias y actualmente me encuentro realizando <br>";
	echo "la cuarta edicion de argentina programa";
}

?>