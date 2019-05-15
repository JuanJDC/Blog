<?php 

$usuario = $_GET['usr'];
 $con = mysqli_connect("localhost", "root", "", "blog");
 $sql = "select * from usuarios where usuario = '".$usuario."';";
 $consulta = mysqli_query($con, $sql);

 while ($fila = mysqli_fetch_array($consulta)) {
 	echo "<div>";
 	echo $fila[0] . " | ";
 	echo $fila[1] . " | ";
 	echo $fila[2] . " | ";
 	echo $fila[3] . " | ";
 	echo $fila[4] . " | ";
	echo "</div>";
 	echo "<hr/>";

 }

 ?>