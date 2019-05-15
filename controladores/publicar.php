<?php 

session_start();
$usuario = $_SESSION['usr'];
$publicacion = $_POST['pbl'];
$conexion = mysqli_connect("localhost", "root", "", "blog");

$sql = "insert into publicaciones values('', '".$usuario."','".$publicacion."')";
	$datos = mysqli_query($conexion, $sql);
	mysqli_fetch_array($datos);
	header('location:../vistas/iniSes.php?can=5');
	


 ?>