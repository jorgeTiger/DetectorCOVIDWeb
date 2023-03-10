<html>
<head>
	<title>Perfil de Medico</title>
	<style>
	* { font-family: Microsoft JhengHei; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10;background-color:lightsalmon}
	</style>
</head>
<body>
	<h1>Detector COVID</h1>
	<a href="medico.html"><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Salir</button></a>
    <a href="perfilMedico.php?correo="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Perfil</button></a>
    <a href="datosSintomas.php?nombrePersona="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Sintomas</button></a>
	<a href="datosCitas.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Citas</button></a>
	<a href="datosDiagnosticos.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Diagnosticos</button></a>
    <h1 style='margin-left:100; margin-top:30'>Datos del Perfil</h1>
    <form onSubmit="mostrarMedico.php" action="perfilMedico.php">
    <input type="email" id="correo" placeholder="Ingrese su correo electronico" name="correo" size=40 style='margin-top:10; margin-left:90'>
    <input type="password" id="password" placeholder="Ingrese su password" name="password" size=30 style='margin-top:10'>
    <button type="submit" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
    <?php include 'mostrarMedico.php'; ?>
    <a href='modificarMedico.php'><button style='margin-top:10; margin-left:90; background-color:lightblue; border-width:0'>Actualizar Perfil</button></a>
</body>
</html>