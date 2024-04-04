<?php

require_once "config.php";

$conexion = new mysqli(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_DATABASE,DB_PORT);

if(!$conexion){
	echo "No se pudo conectar";
}

?>
