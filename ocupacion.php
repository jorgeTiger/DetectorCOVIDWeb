<html>
<head>
	<title>Ocupacion en UDG</title>
	<style>
	* { font-family: Microsoft JhengHei; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10; background-color:lightsalmon}
	</style>
    <h1>Detector de COVID</h1>
	<a href="index.html"><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Salir</button></a>
    <a href="perfil.php?correo="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Perfil</button></a>
	<a href="ocupacion.php?codigo="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Ocupacion UDG</button></a>
	<a href="sintomas.php?nombrePersona="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Sintomas</button></a>
	<a href="citas.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Citas</button></a>
	<a href="diagnosticos.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Diagnosticos</button></a>
</head>
<body>
  <h1 style="margin-top:30; margin-left:200">Ocupacion registrada</h1>
    <form onSubmit="mostrarOcupacion.php" action="ocupacion.php">
    <input type="text" id="codigo" placeholder="Ingrese su codigo UDG" name="codigo" size=40 style='margin-top:10; margin-left:190'>
    <button type="submit" onSubmit="codigo" style="background-color:lightblue; border-width:0">Buscar</button>
    </form> 
  <?php include('mostrarOcupacion.php') ?>
  <a href='registroOcupacion.html'><button style='margin-top:10; margin-left:188; background-color:lightblue; border-width:0'>Registro Ocupacion</button>    
  <a href='modificarOcupacion.php?codigo='><button style='margin-top:10; background-color:lightblue; border-width:0'>Actualizar Ocupacion</button></a>
</body>
</html>