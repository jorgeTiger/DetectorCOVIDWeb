<?php
$correo = $_GET['correo'];
$password = $_GET['password'];

$server = 'localhost';
$user = 'glwcslew_DeteccionCOVID';
$passwordb = 'db21COVID&';
$dbname = 'glwcslew_DeteccionCOVID';

$conn = mysqli_connect($server,$user,$passwordb,$dbname);
if(!$conn){
    die('Error al conectarse a la base de datos');
}

$sql = "SELECT * FROM Medico WHERE Correo='$correo' AND Password='$password' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    if($row = mysqli_fetch_assoc($result)){
      echo "<form style='margin-top:10; margin-left:400' action='actualizarMedico.php' method='GET'>
      Nombre: <input type='text' id='nombre' value='".$row['Nombre']."' name='nombre' size=40 style='margin-left:103'>
      <br>
      Correo electronico: <input type='email' id='correoNuevo' value='".$row['Correo']."' size=30 name='correoNuevo' style='margin-left:26'>
      <br>
      Password: <input type='password' id='newPass' value='".$row['Password']."' size=20 name='newPass' style='margin-left:95'>
      <br>
      Numero Cedula: <input type='text' id='numeroCedula' value='".$row['Numero Cedula']."' size=20 name='numeroCedula' style='margin-left:47'>
      <br>
      Fecha de nacimiento: <input type='date' id='fechaNacimiento' value='".$row['Fecha Nacimiento']."' min='1900-01-01' max='2003-12-31' name='fechaNacimiento'>
      <br>
      <input type='hidden' id='correo' value='".$row['Correo']."' name='correo'>
      <input type='hidden' id='password' value='".$row['Password']."' name='password'>
      <button type='submit' style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Guardar</button>
      <br>
      </form>";
    }else{
      echo "<p style='margin-left:400; margin-top:10'>Usuario no encontrado</p>";
    }
}else{
    echo "<p style='margin-left:400; margin-top:10'>No hay datos a mostrar</p>";
}
mysqli_close($conn);
?>