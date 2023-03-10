<?php
$nombre = $_GET['nombre'];
$codigo = $_GET['codigo'];
$correo = $_GET['correo'];
$password = $_GET['password'];
$fechaNacimiento = $_GET['fechaNacimiento'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "INSERT INTO Usuario (Nombre,`Codigo UDG`,`Correo Electronico`,Password,`Fecha Nacimiento`) VALUES('$nombre','$codigo','$correo','$password','$fechaNacimiento')";
if(mysqli_query($conn,$sql)){
    echo "Captura de datos correcta";
}else{
    echo "Error en la captura";
}
mysqli_close($conn);
?>