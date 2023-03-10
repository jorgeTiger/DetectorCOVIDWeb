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
$sql = "SELECT * FROM Cita WHERE `Nombre Paciente` LIKE '$nombrePaciente%'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
  echo "<table cellpadding=2 style='font-size: 10pt; margin-left:200; margin-top:15; background-color:lightblue; text-align:center'><tr>
    <td width=\"25%\"><font face='Arial'><b>Nombre de Paciente</b></font></td>
    <td width=\"25%\"><font face='Arial'><b>Resultado</b></font></td>
    <td width=\"25%\"><font face='Arial'><b>Fecha</b></font></td>
    <td width=\"25%\"><font face='Arial'><b>Sintomas</b></font></td>
    </tr>";
  while($row = mysqli_fetch_assoc($result)){
    echo "<td width=\"25%\"><font face=\"Arial\">" . $row["Nombre Paciente"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"Arial\">" . $row["Resultado"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"Arial\">" . $row["Fecha"] . "</font></td>"; 
    echo "<td width=\"25%\"><font face=\"Arial\">" . $row["Sintomas"] . "</font></td><tr>";
  }
  echo "</table>";
}else{
    echo "<p style='margin-left:200'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>