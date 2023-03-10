<?php
$nombrePaciente = $_GET['nombrePaciente'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM Diagnostico WHERE `Nombre Paciente`='$nombrePaciente'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    echo "<table cellpadding=2 style='font-size: 10pt; margin-left:200; margin-top:15; background-color:lightblue; text-align:center'><tr>
    <td><font face='Arial'><b>Promedio de Aciertos</b></font></td>
    <td><font face='Arial'><b>Fecha Diagnostico</b></font></td>
    </tr>";
    while($row = mysqli_fetch_array($result)){
      echo "<tr><td width=\"25%\"><font face=\"Arial\">" . $row["Promedio Aciertos"] . "</font></td>";
      echo "<td width=\"25%\"><font face=\"Arial\">" . $row["Fecha Diagnostico"] . "</font></td></tr>";
    }
    echo "</table>";
}else{
    echo "<p style='margin-left:200'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>