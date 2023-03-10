<html>
<head>
	<title>Control de Sintomas</title>
	<style>
	* { font-family: Microsoft JhengHei; font-size: 12pt; COLOR: black; margin-left:10; margin-top:10;background-color:lightsalmon}
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
	<h1 style="margin-top:30; margin-left:400">Registro de Sintomas</h1>
	<form style="margin-top:10; margin-left:400" action="registroSintomas.php" method="GET">
	Nombre completo: <input type="text" id="nombrePersona" size=40 name="nombrePersona" style='margin-left:8'>
    <br>
    Tipo: <input type="text" id="tipo" size=20 name="tipo" style='margin-left:113'>
    <br>
    Descripcion: <input type="text" id="descripcion" size=60 name="descripcion" style='margin-left:58'>
    <br>
    Fecha de inicio: <input type="date" id="fechaInicio" name="fechaInicio" style='margin-left:35'>
    <br>
    <p style='margin-left:-2'>Resultado
    <select name="resultado" id="resultado" style='margin-left:78; margin-top:3'>
        <option value="Leve">Leve</option>
        <option value="Moderado">Moderado</option>
        <option value="Grave">Grave</option>
    </select></p>
    <br>
    Medicamento: <input type="text" id="medicamento" size=30 name="medicamento" style='margin-left:42; margin-top:-20'>
    <br>
    <p style='margin-left:-2'>Ha tenido contacto con algun infectado?
    <select name="contactoInfectado" id="contactoInfectado" style='margin-left:10; margin-top:5'>
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select></p>
    <p style='margin-left:-2'>Ha salido de viaje recientemente?
    <select name="salidoViaje" id="salidoViaje" style='margin-left:10; margin-top:5'>
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select></p>
    <br>
    <button type="submit" style='margin-top:-15; margin-left:-2; background-color:lightblue; border-width:0'>Guardar</button>
    <br>
    </form>
    <h1 style="margin-top:10; margin-left:400">Síntomas registrados</h1>
    <form onSubmit="mostrarSintomas.php" action="sintomas.php">
    <input type="text" id="nombrePersona" placeholder="Ingrese su nombre" name="nombrePersona" size=40 style='margin-top:10; margin-left:390'>
    <button type="submit" onSubmit="nombrePaciente" style="background-color:lightblue; border-width:0">Buscar</button>
    </form>
    <?php include 'mostrarSintomas.php'; ?>
    <a href='modificarSintoma.php'><button style='margin-top:10; margin-left:390; background-color:lightblue; border-width:0'>Actualizar Sintoma</button></a>
</body>
</html>