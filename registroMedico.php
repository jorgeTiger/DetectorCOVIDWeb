<?php
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$password = $_GET['password'];
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

$sql = "INSERT INTO Medico (Nombre,Correo,Password,`Numero Cedula`,`Fecha Nacimiento`) VALUES('$nombre','$correo','$password','$numeroCedula','$fechaNacimiento')";
if(mysqli_query($conn,$sql)){
    echo "Captura de datos correcta";
}else{
    echo "Error en la captura";
}
mysqli_close($conn);
?>