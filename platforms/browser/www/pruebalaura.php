<?php 
header("Acess-Control-Allow-Origin:http://especialistasenlaweb.com");

$n=$_POST['nombre'];
$c=$_POST['correo'];
$com=$_POST['com'];

$conectar=new mysqli("localhost","dxxsmxei_psuser","w[cRi.gC#ClP","dxxsmxei_psmibase");
$consulta="INSERT into persona(nombre,correo,comentario) values('$n','$c','$com'";
$conectar->query($consulta)or die(mysqli_error());
echo "<hr><h2>Dato insertado</h2>";

 ?>