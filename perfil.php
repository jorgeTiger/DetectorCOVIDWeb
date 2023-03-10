<html>
<head>
	<title>Perfil de Paciente</title>
	<style>
	* { font-family: Microsoft JhengHei; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10;background-color:lightsalmon}
	</style>
</head>
<body>
	<h1>Detector COVID</h1>
	<a href="index.html"><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Salir</button></a>
    <a href="perfil.php?correo="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Perfil</button></a>
	<a href="ocupacion.php?codigo="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Ocupacion UDG</button></a>
	<a href="sintomas.php?nombrePersona="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Sintomas</button></a>
	<a href="citas.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Citas</button></a>
	<a href="diagnosticos.php?nombrePaciente="><button type="button" style='margin-top:10; margin-left:-2; background-color:lightblue; border-width:0'>Diagnosticos</button></a>
    <h1 style='margin-left:100; margin-top:30'>Datos del Perfil</h1>
    <form onSubmit="mostrarUsuario.php" action="perfil.php">
    <input type="email" id="correo" placeholder="Ingrese su correo electronico" name="correo" size=40 style='margin-top:10; margin-left:90'>
    <input type="password" id="password" placeholder="Ingrese su password" name="password" size=30 style='margin-top:10'>
    <button type="submit" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
    <?php include 'mostrarUsuario.php'; ?>
    <a href='modificarUsuario.php'><button style='margin-top:10; margin-left:90; background-color:lightblue; border-width:0'>Actualizar Perfil</button></a>
</body>
</html>