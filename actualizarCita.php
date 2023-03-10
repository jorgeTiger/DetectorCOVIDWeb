<?php
$nombrePaciente = $_GET['nombrePaciente'];
$fechaNueva = $_GET['fechaNueva'];
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

$sql = "UPDATE Cita SET Fecha='$fechaNueva', Sintomas='$sintomas' WHERE `Nombre Paciente`='$nombrePaciente' AND Fecha='$fecha'";
if(mysqli_query($conn,$sql)){
    echo "Actualizacion correcta";
}else{
    echo "Error en la actualizacion";
}
mysqli_close($conn);
?>