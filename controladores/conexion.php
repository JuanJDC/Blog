<?php 	

class conexion 
{
	function __construct()
	{
	$this->conexion = mysqli_connect("localhost", "root", "", "blog");
	}


	function consulta($campo,$campCondicion, $condicion){
	$sql = "select * from usuarios where " . $campCondicion . " = '" .$condicion. "';";
	$datos = mysqli_query($this->conexion, $sql);

	while($fila = mysqli_fetch_array($datos)){

			return $fila[$campo];
		}
		

	}
	function consultaPub($usuario, $desde, $hasta){
	$sql = "select * from publicaciones limit ".$desde.", $hasta";
	$datos = mysqli_query($this->conexion, $sql);
	$tabla = "";
	while($fila = mysqli_fetch_array($datos)){
	if ($fila['usuario'] == $usuario) {
		$tabla = $tabla . "<div class='ancho'><h3 class='izq'>". $fila['usuario'] . "</h3><p class='pub'>".$fila['publicacion']."</p></div> <hr class ='hr'>";
	}else{
		$tabla = $tabla . "<div class='ancho'><h3 class = 'der'>". $fila['usuario'] . "</h3><p class='pub'>".$fila['publicacion']."</p></div> <hr class ='hr'>";
	}
		
	
			
		}
		return $tabla;
	}

	function consultaCantPub(){
	$sql = "select * from publicaciones";
	$datos = mysqli_query($this->conexion, $sql);
	$cantidad = mysqli_num_rows($datos);
	return $cantidad;
	}

	function sql($sql){
	mysqli_query($this->conexion, $sql);
	}
	
}
 ?>