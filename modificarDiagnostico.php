<html>
<head>
	<title>Actualizacion de Diagnostico</title>
	<style>
	* { font-family: Microsoft JhengHei; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10; background-color:lightsalmon}
	</style>
    <h1>Detector de COVID</h1>
	<a href="datosDiagnosticos.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Regresar</button></a>
</head>
<body>
  <h1 style='margin-top:30; margin-left:400'>Actualizacion de Diagnostico</h1>
  <form onSubmit="buscarDiagnostico.php" action="modificarDiagnostico.php">
    <input type="text" id="nombrePaciente" placeholder="Ingrese su nombre completo" name="nombrePaciente" size=40 style='margin-top:10; margin-left:390'>
    <input type="text" id="fecha" placeholder="Fecha(AAAA-MM-DD)" name="fecha" style='margin-top:10'>
    <button type="submit" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
  <?php include('buscarDiagnostico.php'); ?>
</body>
</html>