<?php 
	include_once('conexion.php');
	$titulo_pagina="Higiene - Belleza";
	$subtittulo="HIGIENE/BELLEZA";
	
	
	$idmedicina = $_GET['id'];
	
	$medicina= mysql_query("SELECT * FROM medicina_natural WHERE id=$idmedicina");
	
	while($fila = mysql_fetch_array($medicina)){
			$nombre = $fila['nombre'];
			$descripcion = $fila['descripcion'];
			$imagen = $fila['imagen'];
		}
		

?>

<!DOCTYPE, html>
<html>
	<head>
		<?php include_once("header.php");?>
	</head>
	<body>
	
		<header>
			<?php include_once("menu.php"); ?>
			
		</header>
		
	
		<h1><?php echo $subtittulo; ?></h1>
		
		<?php include_once('menu_productos.php'); ?>
		
		
		<div id="informacion_producto">
		
			<div class="imagen_producto">
					<img  src="img/productos/medicina/<?php echo $imagen;?>" />	
				
			</div>
				
				
			<div class="texto_producto">
					<h2 id="nombre_productos"><?php echo $nombre;?></h2>
					<p id="descripcion_productos"><?php echo $descripcion;?></p>
			</div>
					
					

					
			</div>
				     	
		
		<div class ="clear"></div>
			
		<?php include_once("footer.php")?>
	
			
	</body>
</html>