<?php
$codigo = $_GET['codigo'];
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

$sql = "INSERT INTO `Ocupacion UDG` (`Codigo UDG`,Puesto,Carrera,Semestre,`Fecha Ingreso`) VALUES('$codigo','$puesto','$carrera','$semestre','$fechaIngreso')";
if(mysqli_query($conn,$sql)){
    echo "Datos guardados exitosamente";
}else{
    echo "Error al guardar";
}
mysqli_close($conn);
?>