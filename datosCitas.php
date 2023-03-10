<html>
<head>
	<title>Mostrar Citas</title>
	<style>
	* { font-family: Microsoft JhengHei; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10; background-color:lightsalmon}
	</style>
    <h1>Detector de COVID</h1>
	<a href="medico.html"><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Salir</button></a>
    <a href="perfilMedico.php?correo="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Perfil</button></a>
    <a href="datosSintomas.php?nombrePersona="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Sintomas</button></a>
    <a href="datosCitas.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Citas</button></a>
	<a href="datosDiagnosticos.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Diagnosticos</button></a>
</head>
<body>
    <h1 style="margin-top:30; margin-left:200">Citas de usuarios</h1>
    <form onSubmit="verCitas.php" action="datosCitas.php">
    <input type="text" id="nombrePaciente" placeholder="Ingrese su nombre" name="nombrePaciente" size=40 style='margin-top:10; margin-left:190'>
    <button type="submit" onSubmit="nombrePaciente" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
    <?php include 'verCitas.php'; ?>
    <a href='modificarResultadoCita.php'><button style='margin-top:10; margin-left:190; background-color:lightblue; border-width:0'>Actualizar Resultados de Citas</button></a>
</body>
</html>