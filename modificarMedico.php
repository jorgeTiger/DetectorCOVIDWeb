<html>
<head>
	<title>Actualizacion de Perfil</title>
	<style>
	* { font-family: Microsoft JhengHei; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10;background-color:lightsalmon}
	</style>
    <h1>Detector COVID</h1>
	<a href="perfilMedico.php?correo="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Regresar</button></a>
</head>
<body>
  <h1 style='margin-top:30; margin-left:400'>Actualizacion de Perfil de Medico</h1>
  <form onSubmit="buscarMedico.php" action="modificarMedico.php">
    <input type="email" id="correo" placeholder="Ingrese su correo electronico" name="correo" size=40 style='margin-top:10; margin-left:390'>
    <input type="password" id="password" placeholder="Ingrese su password" name="password" style='margin-top:10'>
    <button type="submit" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
  <?php include('buscarMedico.php'); ?>
</body>
</html>