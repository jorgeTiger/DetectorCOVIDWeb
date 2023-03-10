<?php
$nombrePaciente = $_GET['nombrePaciente'];
$promedioAciertos = $_GET['promedioAciertos'];
$fechaDiagnostico = $_GET['fechaDiagnostico'];

include("calcularDiagnosticos.php");

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "INSERT INTO Diagnostico (`Nombre Paciente`,`Promedio Aciertos`,`Fecha Diagnostico`) VALUES('$nombrePaciente','$promedioAciertos','$fechaDiagnostico')";
if(mysqli_query($conn,$sql)){
    echo "1";
}else{
    echo "0";
}
mysqli_close($conn);
?>