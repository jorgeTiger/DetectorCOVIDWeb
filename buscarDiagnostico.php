<?php
$nombrePaciente = $_GET['nombrePaciente'];
$fecha = $_GET['fecha'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM Diagnostico WHERE `Nombre Paciente`='$nombrePaciente' AND `Fecha Diagnostico` LIKE '$fecha%'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      echo "<form style='margin-top:10; margin-left:400' action='actualizarDiagnostico.php' method='GET'>
      <input type='hidden' id='nombrePaciente' value='".$row['Nombre Paciente']."' name='nombrePaciente' style='margin-top:5'>
      <input type='hidden' value='".$row['Fecha Diagnostico']."' id='fecha' name='fecha' style='margin-top:5'>
      Promedio Aciertos: <input type='text' value='".$row["Promedio Aciertos"]."' id='promedioAciertos' size=8 name='promedioAciertos' style='margin-left:10'>
      <br>
      Fecha: <input type='date' value='".$row['Fecha Diagnostico']."' id='fechaNueva' name='fechaNueva' style='margin-left:105'>
      <br>
      <button type='submit' style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Guardar</button>
      <br>
      </form>";
    }
}else{
    echo "<p style='margin-left:400'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>