<?php
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

$sql = "DELETE FROM Cita WHERE Resultado='$resultado' AND Fecha='$fecha'";
if(mysqli_query($conn,$sql)){
    echo "Eliminacion correcta";
}else{
    echo "Error en la eliminacion";
}
mysqli_close($conn);
?>