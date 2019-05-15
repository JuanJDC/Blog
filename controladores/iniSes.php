<?php 
	$usu = $_POST['ingUsuario'];
	$cont = $_POST['ingContrasena'];

	$conx = mysqli_connect('localhost', 'root', '', 'blog');
	$consulta = "SELECT * FROM usuarios WHERE usuario = '$usu'";
	$resultado = mysqli_query($conx, $consulta);

	if($fila = mysqli_fetch_assoc($resultado)){

		$contr = $fila['contrasena'];

		$comprueba = password_verify("$cont", "$contr");
		
		if($cont == $contr){
		session_start();
		$_SESSION['usr']=$usu;
		echo $contr;
		header('location:../vistas/iniSes.php?can=5');
		}else{
		header('location:../index.php?int=1');
		}

	}
	else{
		header('location:../index.php');
	}
		
	mysqli_close($conx);
 ?>
