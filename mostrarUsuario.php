<?php
$correo = $_GET['correo'];
$password = $_GET['password'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM Usuario WHERE `Correo Electronico`='$correo' AND Password='$password'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    echo "<table cellpadding=2 style='font-size: 10pt; margin-left:100; margin-top:10; background-color:lightblue; text-align:center'><tr>
    <td width=\"22%\"><font face='Arial'><b>Nombre</b></font></td>
    <td width=\"13%\"><font face='Arial'><b>Codigo de UDG</b></font></td>
    <td width=\"22%\"><font face='Arial'><b>Correo Electronico</b></font></td>
    <td width=\"16%\"><font face='Arial'><b>Fecha de Nacimiento</b></font></td></tr>";
    if($row = mysqli_fetch_assoc($result)){
      echo "<td width=\"22%\"><font face=\"Arial\">".$row['Nombre']. "</font></td>";
      echo "<td width=\"13%\"><font face=\"Arial\">" .$row['Codigo UDG']. "</font></td>"; 
      echo "<td width=\"22%\"><font face=\"Arial\">" .$row['Correo Electronico']. "</font></td>";
      echo "<td width=\"16%\"><font face=\"Arial\">" .$row['Fecha Nacimiento']. "</font></td></tr>";
      echo "</table>";
    }else{
      echo "<p style='margin-left:100; marginTop:10'>Usuario no encontrado</p>";
    }
}else{
    echo "<p style='margin-left:100; marginTop:10'>No hay datos a mostrar<p>";
}
mysqli_close($conn);
?>