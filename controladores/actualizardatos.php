<?php 
	session_start();
	if(isset($_SESSION['usr'])){
		$ses = $_SESSION['usr'];
		
	}else{
		header("location:../index.php");
	}
	require("../controladores/conexion.php");


	$con = new conexion();
	$sql = "Update usuarios set nombre = '". $_POST['Nombre'] . "', apellido = '" . $_POST['Apellido'] . "', telefono = '" . $_POST['Telefono']."', sexo='".$_POST['Sexo'] ."', descripcion='".$_POST['Descripcion']."' where usuario = '".$ses."';";
		header("location:../vistas/iniSes.php?can=5");
	$con->sql($sql);
 ?>
 

 			
 			
 			