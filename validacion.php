<a href='./'>volver</a><br>
<?php 
$usuario="santi";
$contraseña="1234";
$arre=[
	"materias" => 9,
	"aprobadas" => rand(1,9),
	"regularizadas" => rand(1,9),
	"año" => "2do",
	"promedio" => rand(5,9)
];
if ($_POST['user']==$usuario && $_POST['psw']==$contraseña)
{
	foreach ($arre as $key => $value) {
		echo "$key: $value <br>";
	}
}


?>