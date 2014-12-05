<?php 


	include_once('conexion.php');

		$n = $_POST['nombre'];
		$ap = $_POST['descripcion'];
		$am  = $_POST['ubicacion'];
		
//echo "$n";
//echo "$ap";


mysql_query("INSERT INTO tiendas (nombre, descripcion, ubicacion)VALUES ('$n', '$ap')");

// aqui cambias comida_h.php por la pagina que tiene que ser 
header('Location:tiendas.php');
?>