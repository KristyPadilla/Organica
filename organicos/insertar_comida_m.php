<?php 


	include_once('conexion.php');

		$n = $_POST['nombre'];
		$ap = $_POST['descripcion'];
		//$am  = $_POST['imagen'];
		
//echo "$n";
//echo "$ap";


mysql_query("INSERT INTO comida_mascotas (nombre, descripcion)VALUES ('$n', '$ap')");

// aqui cambias comida_h.php por la pagina que tiene que ser 
header('Location:comida_m.php');
?>