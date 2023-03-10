<?php
$codigo = $_GET['codigo'];
$correo = $_GET['correo'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "DELETE FROM Usuario WHERE `Codigo UDG`='$codigo' AND `Correo Electronico`='$correo'";
if(mysqli_query($conn,$sql)){
    echo "Eliminado correctamente";
}else{
    echo "Error al eliminar";
}
mysqli_close($conn);
?>