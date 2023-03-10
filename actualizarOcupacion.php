<?php
$codigo = $_GET['codigo'];
$codigoNuevo = $_GET['codigoNuevo'];
$puesto = $_GET['puesto'];
$carrera = $_GET['carrera'];
$semestre = $_GET['semestre'];
$fechaIngreso = $_GET['fechaIngreso'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "UPDATE `Ocupacion UDG` SET `Codigo UDG`='$codigoNuevo', Puesto='$puesto', Carrera='$carrera', Semestre='$semestre', `Fecha Ingreso`='$fechaIngreso' WHERE `Codigo UDG`='$codigo'";
if(mysqli_query($conn,$sql)){
    echo "Cambios realizados correctamente";
}else{
    echo "Error en la insercion";
}
mysqli_close($conn);
?>