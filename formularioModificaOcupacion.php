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
   while($row = mysqli_fetch_assoc($result)){
    echo "<form style='margin-top:10; margin-left:400' action='actualizarOcupacion.php' method='GET'>
    <input type='hidden' id='codigo' value='".$row["Codigo UDG"]."' name='codigo'>
    Codigo UDG: <input type='text' id='codigoNuevo' value='".$row["Codigo UDG"]."' name='codigoNuevo' style='margin-top:10; margin-left:42'>
    <br>
    Puesto: <input type='text' id='puesto' value='". $row["Puesto"] ."' name='puesto' style='margin-left:86'>
    <br>
    Carrera: <input type='text' id='carrera' value='".$row["Carrera"]."' name='carrera' style='margin-left:81'>
    <br>
    Semestre: <input type='text' id='semestre' value='".$row["Semestre"]."' name='semestre' style='margin-left:67'>
    <br>
    Fecha de ingreso: <input type='date' value='".$row["Fecha Ingreso"]."' id='fechaIngreso' name='fechaIngreso'>
    <br>
    <button type='submit' style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Guardar</button>
    <br>
    </form>";
   }
}else{
    echo "<p style='margin-top:10; margin-left:400'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>