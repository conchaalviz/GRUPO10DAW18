<?php
///////////////////// NE DESARROLLO /////////////////////


//Inclusión de datos de conexion
include("datos.inc.php");
$db="Juego";
//Crea conexion (variables usadas vienen de datos.inc.php)
$conexion = new mysqli($host, $user, $pass, $db);
mysqli_query($conexion, "SET NAMES 'utf8'");
//Comprueba si la conexión es correcta.
if($conexion -> connect_errno){
	$resultado = "Ha ocurrido un error al conectar con la base de datos. Desconectado.";
}

	//Inclusión de datos de conexion
	include("datos.inc.php");
	//Crea conexion (variables usadas vienen de datos.inc.php)
	$conexion = new mysqli($host, $user, $pass);
	//Comprueba si la conexión es correcta.
	if($conexion -> connect_errno){
		$resultado = "Ha ocurrido un error al conectar con la base de datos. Desconectado.";
	}else{
		//Intenta crear la base de datos.
		//Si se ha creado es porque no existe, por lo que estará vacía y necesitamos insertar las tablas y preguntas
		if(mysqli_query($conexion, "CREATE DATABASE Juego")!=false){
			//incluimos $sentencia, variable con la sentencia: creación de base de datos, tablas e inserción de preguntas
			include ("sentenciaCreacion.inc.php");
			//Forzamos uso de utf8 para asegurar correcto uso de caracteres especiales del español
			mysqli_query($conexion, "SET NAMES 'utf8'");
			//Ejecuta sentencia y guarda resultado;
			$resultado = mysqli_multi_query($conexion, $sentencia);
			//sleep(3); //esperamos unos segundos a que se cree de forma efectiva la base de datos.

		}else{
			$resultado = false;
		}
	}
	mysqli_close($conexion);


  CREATE TABLE `alimentos` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(255) NOT NULL,
    `energia` decimal(10,0) NOT NULL,
    `proteina` decimal(10,0) NOT NULL,
    `hidratocarbono` decimal(10,0) NOT NULL,
    `fibra` decimal(10,0) NOT NULL,
    `grasatotal` decimal(10,0) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
?>
