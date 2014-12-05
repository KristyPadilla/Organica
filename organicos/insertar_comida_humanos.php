<?php 


	include_once('conexion.php');

		$n = $_POST['nombre'];
		$ap = $_POST['descripcion'];
		//$am  = $_POST['imagen'];
		
//echo "$n";
//echo "$ap";


mysql_query("INSERT INTO comida_humanos (nombre, descripcion)VALUES ('$n', '$ap')");

header('Location:comida_h.php');
?>