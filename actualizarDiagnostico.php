<?php
$nombrePaciente = $_GET['nombrePaciente'];
$fechaNueva = $_GET['fechaNueva'];
$fecha = $_GET['fecha'];
$promedioAciertos = $_GET['promedioAciertos'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "UPDATE Diagnostico SET `Promedio Aciertos`='$promedioAciertos', `Fecha Diagnostico`='$fechaNueva' WHERE `Nombre Paciente`='$nombrePaciente' AND `Fecha Diagnostico`='$fecha'";
if(mysqli_query($conn,$sql)){
    echo "Actualizacion correcta";
}else{
    echo "Error en la actualizacion";
}
mysqli_close($conn);
?>