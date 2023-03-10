<?php
$correo = $_GET['correo'];
$password = $_GET['password'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "SELECT * FROM Usuario WHERE `Correo Electronico`='$correo' AND Password='$password' ";
$result = mysqli_query($conn,$sql);
$datos = array();
if(mysqli_num_rows($result) > 0){
    if($row = mysqli_fetch_assoc($result)){
        $datos[] = array('Nombre'=>$row['Nombre'],'Codigo UDG'=>$row['Codigo UDG'],'Correo Electronico'=>$row['Correo Electronico']
            ,'Password'=>$row['Password'],'Fecha Nacimiento'=>$row['Fecha Nacimiento']);
    }else{
      echo "Usuario no encontrado\n";
    }
}else{
    echo "No hay datos a mostrar\n";
}
mysqli_close($conn);
$salida = json_encode($datos);
echo $salida;
?>