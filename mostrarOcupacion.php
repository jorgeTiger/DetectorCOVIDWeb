<?php
$codigo = $_GET['codigo'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM `Ocupacion UDG` WHERE `Codigo UDG`='$codigo'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    echo "<table cellpadding=2 style='font-size: 10pt; margin-left:200; margin-top:15; background-color:lightblue; text-align:center'><tr>
    <td><font face='Arial'><b>Código UDG</b></font></td>
    <td><font face='Arial'><b>Puesto</b></font></td>
    <td><font face='Arial'><b>Carrera</b></font></td>
    <td><font face='Arial'><b>Semestre</b></font></td>
    <td><font face='Arial'><b>Fecha de Ingreso</b></font></td>
    </tr>";
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr><td width=\"12%\"><font face=\"Arial\">" . $row["Codigo UDG"] . "</font></td>";
      echo "<td width=\"15%\"><font face=\"Arial\">" . $row["Puesto"] . "</font></td>"; 
      echo "<td width=\"12%\"><font face=\"Arial\">" . $row["Carrera"] . "</font></td>";
      echo "<td width=\"12%\"><font face=\"Arial\">" . $row["Semestre"] . "</font></td>";
      echo "<td width=\"12%\"><font face=\"Arial\">" . $row["Fecha Ingreso"] . "</font></td></tr>";
    }
    echo "</table>";
}else{
    echo "<p style='margin-top:10; margin-left:200'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>