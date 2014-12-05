<?php 
	 include_once('conexion.php');
	$titulo_pagina="Tiendas";
	$subtittulo="TIENDAS";
	
	
	$id= $_GET['id'];
	
	$tienda = mysql_query("SELECT * FROM tiendas WHERE id=$id");
	
	while($fila = mysql_fetch_array($tienda)){
			$nombre = $fila['nombre'];
			$descripcion = $fila['descripcion'];
			$ubicacion = $fila['ubicacion'];
			$imagen = $fila['imagen'];
			$mapa = $fila ['mapa'];
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
		
		
		<div id="contenedor_uno">
		<?php include_once("lateral_tienda.php"); ?>
		
		</div>
				
		<div id="contenedor_dos">
			<img src="img/tienda/<?php echo $imagen;?>" />
				<h2 class="nombretienda"><?php echo $nombre;?></h2>
			
			<div id= "descripcion">
				<p><?php echo $descripcion;?></p>
			</div>
					
			<div id="ubicacion">
				<h3>Ubicación</h3>
			<br/>
				<p><?php echo $ubicacion;?></p>
			</div>
		</div>
		
			
		
		<div class ="clear"></div>
			
		<?php include_once("footer.php")?>
	
			
	</body>
</html>
