<?php
$nombrePersona = $_GET['nombrePersona'];
$tipo = $_GET['tipo'];
$tipoNuevo = $_GET['tipoNuevo'];
$descripcion = $_GET['descripcion'];
$fechaInicio = $_GET['fechaInicio'];
$nuevaFecha = $_GET['nuevaFecha'];
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

$sql = "UPDATE Sintoma SET Tipo='$tipoNuevo', Descripcion='$descripcion', `Fecha Inicio`='$nuevaFecha', Resultado='$resultado', Medicamento='$medicamento',
    `Contacto Con Infectado`='$contactoInfectado', `Salido Viaje`='$salidoViaje' WHERE `Nombre Persona`='$nombrePersona' AND Tipo='$tipo' AND `Fecha Inicio`='$fechaInicio'";
if(mysqli_query($conn,$sql)){
    echo "Actualizacion correcta";
}else{
    echo "Error en la actualizacion";
}
mysqli_close($conn);
?>