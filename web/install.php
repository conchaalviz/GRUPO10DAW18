<?php

//Inclusión de datos de conexion
include("../app/Config.php");

echo $mvc_bd_usuario;
echo Config::$mvc_bd_usuario;

/*
//Crea conexion (variables usadas vienen de Config.php)
$conexion = new mysqli($mvc_bd_hostname, $mvc_bd_usuario, $mvc_bd_clave, $mvc_bd_nombre);

//Comprueba si la conexión es correcta.
if($conexion -> connect_errno){
		die("Ha ocurrido un error al conectar con la base de datos. Desconectado.");
}

//Sentencia de creación de la tabla alimentos con sus campos y características
$sentencia = <<<SENTENCIA
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
SENTENCIA;

//Ejecuta sentencia;
$resultado = mysqli_multi_query($conexion, $sentencia);
mysqli_query($conexion, "SET NAMES 'utf8'");

if($resultado -> errno){
	die("Error en la creación de tabla Alimentos");
}

mysqli_close($conexion);
*/
?>
