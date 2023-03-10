<?php
$nombrePersona = $_GET['nombrePersona'];
$tipo = $_GET['tipo'];
$fechaInicio = $_GET['fechaInicio'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';
$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die("Error en la conexión");
}
$sql = "SELECT * FROM Sintoma WHERE `Nombre Persona`='$nombrePersona' AND Tipo='$tipo' AND `Fecha Inicio` LIKE '$fechaInicio%'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<form style='margin-top:10; margin-left:400' action='actualizarSintoma.php' method='GET'>
        <input type='hidden' id='nombrePersona' value='".$row['Nombre Persona']."' name='nombrePersona'>
        <input type='hidden' value='".$row['Tipo']."' id='tipo' name='tipo'>
        Tipo: <input type='text' value='".$row['Tipo']."' id='tipoNuevo' size=20 name='tipoNuevo' style='margin-left:113'>
        <br>
        Descripcion: <input type='text' value='".$row['Descripcion']."' id='descripcion' size=60 name='descripcion' style='margin-left:58'>
        <br>
        <input type='hidden' value='".$row['Fecha Inicio']."' id='fecha' name='fechaInicio'>
        Fecha de inicio: <input type='date' value='".$row['Fecha Inicio']."' id='nuevaFecha' name='nuevaFecha' style='margin-left:35'>
        <br>
        <p style='margin-left:-2'>Resultado
        <select name='resultado' id='resultado' style='margin-left:78; margin-top:3'>
        <option value='".$row['Resultado']."'";
        if($row['Resultado']) {
          echo "selected";
          echo ">".$row['Resultado']."</option>";
          if($row['Resultado']=="Leve"){
            echo "<option value='Moderado'>Moderado</option>
            <option value='Grave'>Grave</option></select></p></br>";
          }else if($row['Resultado']=="Moderado"){
            echo "<option value='Leve'>Leve</option>
            <option value='Grave'>Grave</option></select></p></br>";
          }else if($row['Resultado']=="Grave"){
            echo "<option value='Leve'>Leve</option>
            <option value='Moderado'>Moderado</option></select></p></br>";
          }
        }
        echo "Medicamento: <input type='text' value='".$row['Medicamento']."' id='medicamento' size=30 name='medicamento' style='margin-left:42; margin-top:-20'>
        <br>
        <p style='margin-left:-2'>Ha tenido contacto con algun infectado?
        <select name='contactoInfectado' id='contactoInfectado' style='margin-left:10; margin-top:5'>
        <option value='".$row['Contacto Con Infectado']."'";
        if($row['Contacto Con Infectado']) {
          echo "selected";
          echo ">".$row['Contacto Con Infectado']."</option>";
          if($row['Contacto Con Infectado']=="Si"){
            echo "<option value='No'>No</option></select></p></br>";
          }else{
            echo "<option value='Si'>Si</option></select></p></br>";
          }
        }
        echo "<p style='margin-left:-2'>Ha salido de viaje recientemente?
        <select name='salidoViaje' id='salidoViaje' style='margin-left:10; margin-top:5'>
        <option value='".$row['Salido Viaje']."'";
        if($row['Salido Viaje']) {
          echo "selected"; 
          echo ">".$row['Salido Viaje']."</option>";
          if($row['Salido Viaje']=="Si"){
            echo "<option value='No'>No</option></select></p></br>";
          }else{
            echo "<option value='Si'>Si</option></select></p></br>";
          }
        }
        echo "<button type='submit' style='margin-top:-15; margin-left:-2; background-color:lightblue; border-width:0'>Guardar</button>
        <br>
        </form>";
    }
}else{
    echo "<p style='margin-left:400'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>