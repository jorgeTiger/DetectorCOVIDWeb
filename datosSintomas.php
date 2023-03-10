<html>
<head>
	<title>Mostrar Sintomas</title>
	<style>
	* { font-family: Microsoft JhengHei; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10;background-color:lightsalmon}
	</style>
    <h1>Detector de COVID</h1>
	<a href="medico.html"><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Salir</button></a>
    <a href="perfilMedico.php?correo="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Perfil</button></a>
	<a href="datosSintomas.php?nombrePersona="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Sintomas</button></a>
	<a href="datosCitas.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Citas</button></a>
	<a href="datosDiagnosticos.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Diagnosticos</button></a>
</head>
<body>
    <h1 style="margin-top:10; margin-left:400">Síntomas de los usuarios</h1>
    <form onSubmit="verSintomas.php" action="datosSintomas.php">
    <input type="text" id="nombrePersona" placeholder="Ingrese el nombre de la persona" name="nombrePersona" size=40 style='margin-top:10; margin-left:390'>
    <button type="submit" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
    <?php include 'verSintomas.php'; ?>
</body>
</html>