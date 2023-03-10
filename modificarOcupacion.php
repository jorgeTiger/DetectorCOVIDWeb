<html>
<head>
	<title>Actualizacion de Ocupacion</title>
	<style>
	* { font-family: Microsoft JhengHei; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10; background-color:lightsalmon}
	</style>
    <h1>Detector de COVID</h1>
	<a href="ocupacion.php?codigo="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Regresar</button></a>
</head>
<body>
  <h1 style='margin-top:30; margin-left:400'>Actualizacion de Ocupacion</h1>
  <form onSubmit="formularioModificaOcupacion.php" action="modificarOcupacion.php">
    <input type="text" id="codigo" placeholder="Ingrese su codigo UDG" name="codigo" size=40 style='margin-top:10; margin-left:390'>
    <button type="submit" onSubmit="codigo" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
  <?php include('formularioModificaOcupacion.php'); ?>  
</body>
</html>