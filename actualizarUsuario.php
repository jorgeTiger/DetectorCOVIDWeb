<?php
$nombre = $_GET['nombre'];
$codigo = $_GET['codigo'];
$correoNuevo = $_GET['correoNuevo'];
$correo = $_GET['correo'];
$password = $_GET['password'];
$newPass = $_GET['newPass'];
$fechaNacimiento = $_GET['fechaNacimiento'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "UPDATE Usuario SET Nombre='$nombre', `Codigo UDG`='$codigo', `Correo Electronico`='$correoNuevo', Password='$newPass', `Fecha Nacimiento`='$fechaNacimiento' WHERE `Correo Electronico`='$correo' AND Password='$password'";
if(mysqli_query($conn,$sql)){
    echo "Datos actualizados correctamente";
}else{
    echo "Error en la actualizacion de datos";
}
mysqli_close($conn);
?>