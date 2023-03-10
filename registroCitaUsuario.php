<?php
$nombrePaciente = $_GET['nombrePaciente'];
$fecha = $_GET['fecha'];
$sintomas = $_GET['sintomas'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "INSERT INTO Cita (`Nombre Paciente`,Fecha,Sintomas) VALUES('$nombrePaciente',$fecha','$sintomas')";
if(mysqli_query($conn,$sql)){
    echo "Datos registrados correctamente";
}else{
    echo "Error en la insercion";
}
mysqli_close($conn);
include ('registroDiagnostico.php');
?>