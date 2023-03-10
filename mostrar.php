<?php
$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM Usuario";
$result = mysqli_query($conn,$sql);
$datos = array();
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $datos[] = array('Nombre'=>$row['Nombre'],'Codigo UDG'=>$row['Codigo UDG'],'Correo Electronico'=>$row['Correo Electronico']
            ,'Fecha Nacimiento'=>$row['Fecha Nacimiento']);
    }
}else{
    echo "No hay datos a mostrar\n";
}
mysqli_close($conn);
$salida = json_encode($datos);
echo $salida;
?>