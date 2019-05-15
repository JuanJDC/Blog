<?php  
	session_start();

	if(isset($_SESSION['usr'])){
		$ses = $_SESSION['usr'];
		
	}else{
		header("location:../index.php");
	}
	require("../controladores/conexion.php");

	$NomUsu = new conexion();

	

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php  echo $_SESSION['usr']; ?></title>
	<link rel="stylesheet" type="text/css" href="../estilos/iniSes.css">
	<link rel="icon" type="image/png" href="../estilos/Imagenes/buho.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script type="text/javascript" src="../jquery/jquery-3.4.1.min.js"></script>
</head>
<body onload="final()">
	<div class="encabezado">
		<a href="../index.php" class="salir">Salir.</a>
		<a href="#" class="btnMenu" id="actPerfil">Actualizar Perfil.</a>
		<a href="../index.php" class="btnMenu">Acualizar Foto.</a>
		<input type="text" name="" class="buscar">
	</div>

	<div class="Perfil">

			<img src='../estilos/Imagenes/batman.png' class='fotoPerfil'>
			

			<div class="nombre">
				<h1><?php echo $NomUsu->consulta("nombre", "usuario", "$ses");  ?></h1>
				<h2><?php echo $NomUsu->consulta("apellido", "usuario", "$ses");  ?></h2>
			</div>
			<hr />
		<div class="datos">
			<h5>Correo : <?php echo $NomUsu->consulta("usuario", "usuario", "$ses");  ?></h5>
			<h5>Telefono : <?php echo $NomUsu->consulta("telefono", "usuario", "$ses");  ?></h5>
			<h5>Sexo : <?php echo $NomUsu->consulta("sexo", "usuario", "$ses");  ?></h5>

		</div>
		<div class="descripcion">
			<p><?php echo $NomUsu->consulta("descripcion", "usuario", "$ses");  ?></p>
		</div>
		<hr />
		<form action="../controladores/publicar.php" method="post" class="publicar">
		<textarea class="publicar" name="pbl"></textarea>
		<input type="submit" name="" value="Publicar" class="btnPublicar">
		</form>
	</div>

	<div class="Publicaciones" id="Publicaciones">
		<img src="../estilos/Imagenes/refrescar.png" class="refrescar" title="Refrescar Publicaciones" onclick="cargar()">
		
		<?php 
		$hasta = $_GET['can'];
		$desde = $NomUsu->consultaCantPub();
		$desde = $desde-$hasta;
		echo $NomUsu->consultaPub($_SESSION['usr'], $desde, $hasta); ?>
		
	</div>
	<div class="actDatos" id="actDatos">
		<img src="../estilos/Imagenes/Salir.png" class="salirAct" id="salirAct">
		<form action="../controladores/actualizardatos.php" method="post">
			<table>
				<tr>
					<td>
						<label class="txtActDatos">Nombre </label>
					</td>
					<td>
						<input class ="txtAct" type="text" name="Nombre" value="<?php echo $NomUsu->consulta("nombre", "usuario", "$ses");  ?>">
					</td>
				</tr>
				<tr>
					<td>
						<label class="txtActDatos">Apellido </label>
					</td>
					<td>
						<input class ="txtAct" type="text" name="Apellido"value="<?php echo $NomUsu->consulta("apellido", "usuario", "$ses");  ?>">
					</td>
				</tr>
				<tr>
					<td>
						<label class="txtActDatos">Telefono </label>
					</td>
					<td>
						<input class ="txtAct" type="text" name="Telefono"value="<?php echo $NomUsu->consulta("telefono", "usuario", "$ses");  ?>">
					</td>
				</tr>
				<tr>
					<td>
						<label class="txtActDatos">Correo </label>
					</td>
					<td>
						<input class ="txtAct" type="text" name="Correo" value="<?php echo $NomUsu->consulta("usuario", "usuario", "$ses");  ?>" disabled="true">
					</td>
				</tr>
				<tr>
					<td>
						<label class="txtActDatos">Sexo </label>
					</td>
					<td>
						<input class ="txtAct" type="text" name="Sexo"value="<?php echo $NomUsu->consulta("sexo", "usuario", "$ses");  ?>">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label class="txtActDatos">Descripcion</label>
					</td>
				</tr>
				<tr>
					<td colspan="2">						
						<textarea name="Descripcion" class="taActDatos"><?php echo $NomUsu->consulta("descripcion", "usuario", "$ses");  ?>
						</textarea>
					</td>
				</tr>
			</table>
			<input type="submit" name="" value="Actualizar" class="btnPublicar ilumina">
		</form>

	</div>



	<script type="text/javascript">
		$(function(){
				
			$("#actPerfil").click(function() {
				$("#actDatos").slideToggle(200);
			});
			
			
			$("#salirAct").click(function() {
				$("#actDatos").fadeOut(200);
			});
			
		});
		function final(){
			 var div = document.getElementById('Publicaciones');
    		div.scrollTop = '9999';
		}
		function cargar(){
		location.reload();

		}
	</script>

</body>
</html>