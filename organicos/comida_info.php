<?php 
	 include_once('conexion.php');
	$titulo_pagina="Comida";
	$subtittulo="COMIDA";
	
	
	$idcomida = $_GET['id'];
	
	$comida= mysql_query("SELECT * FROM comida_humanos WHERE id=$idcomida");
	
	while($fila = mysql_fetch_array($comida)){
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
					<img  src="img/productos/comida/<?php echo $imagen;?>" />	
				
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
