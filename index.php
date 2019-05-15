<?php  
session_start();
session_destroy();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/index.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link rel="icon" type="image/png" href="estilos/Imagenes/buho.png">
	<script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>

</head>
<body>

	<div class="barraMenu">
		<img src="estilos/Imagenes/buho.png" class="logo">
		<form class="ingreso" action="controladores/iniSes.php" method="post">
			<input type="text" name="ingUsuario" class="txtIng" placeholder="Usuario">
			<input type="password" name="ingContrasena" class="txtIng" placeholder="Contraseña">
			<input type="submit" name="Enviar" class="btnIng" value="Ingresar">
		</form>
	</div>
	<form class="registro reg" id="registro" action="controladores" method="post">
		<label class="lblRegistro">Registro</label>
		<input type="text" id="id" name="id" class="txtReg" placeholder="id">
		<input type="text" id="nombre" name="nombre" class="txtReg" placeholder="nombre">
		<input type="text" id="apellido" name="apellido" class="txtReg " placeholder="apellido" >
		<input type="text" id="edad" name="edad" class="txtReg " placeholder="edad" >
		<input type="text" id="sexo" name="sexo" class="txtReg " placeholder="sexo">
		<input type="text" id="correo" name="correo" class="txtReg " placeholder="correo">
		<input type="text" id="contrasena" name="contrasena" class="txtReg " placeholder="contrasena">
		<input type="text" id="telefono" name="telefono" class="txtReg" placeholder="telefono" >
		<input type="text" id="describete" name="describete" class="txtReg" placeholder="describete">
		<input type="submit" id="Enviar" name="Enviar" class="btnEnviar" value="Registrarme">
	</form>

	<div class="contenido">
		<dir class="perfil">	
			<p>	Bienvenidos</p>
			<p>	Este es un blog TotalMente Diferente, Veras la Magia del internet en todo su explendor, Animate y explora este nuevo mundo, no tienes nada que perder y todo por ganar.</p>
			<p>	Que esperas no dejes pasar esta gran oportunidad.</p>
			<p>	Registrate hoy, Es totalMente Gratis.</p>
			<img src="estilos/Imagenes/net.gif" width="250px" height="250px">
		</dir>

	</div>
	<div class="piedepagina">	
		<p>	Con amor para el mundo, desde colombia.&copy;Reservados Todos los Derechos.</p>
	</div>
	<script type="text/javascript">
		$(function(){
			$("#id").click(function	(){
				document.getElementById("id").disabled = true;
				$("#nombre").focus();
				

			});
			$(".logo").hide();
			$(".logo").fadeIn(2000);			
		});

	</script>
</body>
</html>