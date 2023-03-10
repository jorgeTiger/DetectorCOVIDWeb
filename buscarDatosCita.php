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
$sql = "SELECT * FROM Cita WHERE `Nombre Paciente`='$nombrePaciente' AND Fecha LIKE '$fecha%'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      echo "<form style='margin-top:10; margin-left:400' action='registroResultadoCita.php' method='GET'>
      <input type='hidden' id='nombrePaciente' value='".$row['Nombre Paciente']."' name='nombrePaciente' style='margin-top:5'>
      <input type='hidden' value='".$row['Fecha']."' id='fecha' name='fecha' style='margin-top:5'>
      Resultado: <input type='text' value='".$row['Resultado']."' id='resultado' size=20 name='resultado' style='margin-left:80'>
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