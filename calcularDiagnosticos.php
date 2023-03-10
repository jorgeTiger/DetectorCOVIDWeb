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
$sql = "SELECT * FROM Sintoma, Cita WHERE `Nombre Persona`='$nombrePersona'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    if($row = mysqli_fetch_assoc($result)){
      $nombrePaciente = $row["Nombre Persona"];
      $fechaSintoma = new DateTime($row['Fecha Inicio']);
      $fechaInicioPandemia = new DateTime("2020-03-01");
      $diferencia = $fechaSintoma->diff($fechaInicioPandemia);
      if($diferencia->invert <= 0){
        $promedioAciertos = 20;
      }else{
        $promedioAciertos = 0;
      }
      if($row["Resultado"]=="Grave"){
        $promedioAciertos = $promediosAciertos + 20;
      }else if($row["Resultado"]=="Moderado"){
        $promedioAciertos = $promedioAciertos + 10;
      }else if($row["Resultado"]=="Leve"){
        $promedioAciertos = $promedioAciertos + 0;
      }
      if($row["Medicamento"]=="Ninguno"){
        $promedioAciertos = $promedioAciertos + 0;
      }else{
        $promedioAciertos = $promedioAciertos + 20;
      }
      if($row["Contacto Con Infectado"]=="Si"){
        $promedioAciertos = $promedioAciertos + 20;
      }else{
        $promedioAciertos = $promedioAciertos + 0;
      }
      if($row["Salido Viaje"]=="Si"){
        $promedioAciertos = $promedioAciertos + 20;
      }else{
        $promedioAciertos = $promedioAciertos + 0;
      }
      $fechaDiagnostico = $row["Fecha"];
    }
}else{
    echo "<p style='margin-left:400'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>