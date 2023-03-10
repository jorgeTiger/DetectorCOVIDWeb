<?php
$nombre = $_GET['nombre'];
$correoNuevo = $_GET['correoNuevo'];
$correo = $_GET['correo'];
$password = $_GET['password'];
$newPass = $_GET['newPass'];
$numeroCedula = $_GET['numeroCedula'];
$fechaNacimiento = $_GET['fechaNacimiento'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "UPDATE Medico SET Nombre='$nombre', Correo='$correoNuevo', Password='$newPass', `Numero Cedula`='$numeroCedula', `Fecha Nacimiento`='$fechaNacimiento' WHERE `Correo Electronico`='$correo' AND Password='$password'";
if(mysqli_query($conn,$sql)){
    echo "Datos actualizados correctamente";
}else{
    echo "Error en la actualizacion de datos";
}
mysqli_close($conn);
?>