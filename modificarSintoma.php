<html>
<head>
	<title>Actualizacion de Sintoma</title>
	<style>
	* { font-family: Microsoft JhengHei; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10; background-color:lightsalmon}
	</style>
    <h1>Detector de COVID</h1>
	<a href="sintomas.php?nombrePersona="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Regresar</button></a>
</head>
<body>
  <h1 style='margin-top:30; margin-left:400'>Actualizacion de Sintoma</h1>
  <form onSubmit="buscarSintoma.php" action="modificarSintoma.php">
    <input type="text" id="nombrePersona" placeholder="Ingrese su nombre completo" name="nombrePersona" size=40 style='margin-top:10; margin-left:190'>
    <input type="text" id="tipo" placeholder="Ingrese el sintoma presentado" name="tipo" size=40 style='margin-top:10'>
    <input type="text" id="fechaInicio" placeholder="Fecha(AAAA-MM-DD)" name="fechaInicio" style='margin-top:10'>
    <button type="submit" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
  <?php include('buscarSintoma.php'); ?>
</body>
</html>