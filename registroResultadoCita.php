<?php
$nombrePaciente = $_GET['nombrePaciente'];
$resultado = $_GET['resultado'];
$fecha = $_GET['fecha'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "UPDATE Cita SET Resultado='$resultado' WHERE `Nombre Paciente`='$nombrePaciente' AND Fecha='$fecha'";
if(mysqli_query($conn,$sql)){
    echo "Actualizacion correcta";
}else{
    echo "Error al acatualizar";
}
mysqli_close($conn);
?>