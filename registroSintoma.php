<?php
$nombrePersona = $_GET['nombrePersona'];
$tipo = $_GET['tipo'];
$descripcion = $_GET['descripcion'];
$fechaInicio = $_GET['fechaInicio'];
$resultado = $_GET['resultado'];
$medicamento = $_GET['medicamento'];
$contactoInfectado = $_GET['contactoInfectado'];
$salidoViaje = $_GET['salidoViaje'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "INSERT INTO Sintoma (`Nombre Persona`,Tipo,Descripcion,`Fecha Inicio`,Resultado,Medicamento,`Contacto Con Infectado`,`Salido Viaje`) VALUES('$nombrePersona','$tipo','$descripcion',
'$fechaInicio','$resultado','$medicamento','$contactoInfectado','$salidoViaje')";
if(mysqli_query($conn,$sql)){
    echo "1";
}else{
    echo "0";
}
mysqli_close($conn);
?>