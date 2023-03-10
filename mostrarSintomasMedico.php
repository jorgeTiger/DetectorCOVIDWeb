<?php
$nombrePersona = $_GET['nombrePersona'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM Sintoma WHERE `Nombre Persona` LIKE '$nombrePersona%'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){ 
  echo "<table cellpadding=2 style='font-size: 10pt; margin-left:25; margin-top:20; background-color:lightblue; text-align:center'><tr>
    <td><font face='Arial'><b>Nombre de Persona</b></font></td>
    <td><font face='Arial'><b>Tipo</b></font></td>
    <td><font face='Arial'><b>Descripcion</b></font></td>
    <td><font face='Arial'><b>Fecha Inicio</b></font></td>
    <td><font face='Arial'><b>Resultado</b></font></td>
    <td><font face='Arial'><b>Medicamento</b></font></td>
    <td><font face='Arial'><b>Contacto Con Infectado</b></font></td>
    <td><font face='Arial'><b>Salido Viaje</b></font></td>
    </tr>";
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr><td width=\"18%\"><font face=\"Arial\">". $row["Nombre Persona"] . "</font></td>";
      echo "<td width=\"20%\"><font face=\"Arial\">". $row["Tipo"] . "</font></td>";
      echo "<td width=\"25%\"><font face=\"Arial\">" . $row["Descripcion"] . "</font></td>";
      echo "<td width=\"10%\"><font face=\"Arial\">" . $row["Fecha Inicio"] . "</font></td>";
      echo "<td width=\"12%\"><font face=\"Arial\">" . $row["Resultado"] . "</font></td>";
      echo "<td width=\"18%\"><font face=\"Arial\">" . $row["Medicamento"] . "</font></td>";
      echo "<td width=\"25%\"><font face=\"Arial\">" . $row["Contacto Con Infectado"] . "</font></td>";
      echo "<td width=\"25%\"><font face=\"Arial\">" . $row["Salido Viaje"] . "</font></td></tr>";
    }
    echo "</table>";
}else{
    echo "<p style='margin-left:400'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>