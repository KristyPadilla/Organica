<?php 
	 include_once('conexion.php');
	$titulo_pagina="Productos";
	$subtittulo="PRODUCTOS";
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
	
		
		
		<div  class="iconos">
			<img class="iconos "src="img/iconos/productos_icon.png">
		</div>
		
		
		<h1><?php echo $subtittulo; ?></h1>
		
		<hr/>
		
		<p id="introduccion">Cada producto y/o alimento que es publicado en orgánic&saludable viene con una breve descripción y su valor nutricional en caso de los alimentos y en el producto viene la descripción con los beneficios que le otorga cada uno. ¡Más vale estar informado de lo que uno consume!</p>
		<hr/>
		
		<div id="contenedor_secciones">
			<div class="secciones" id="humanos">
				<a href="humanos.php">
					<img src="img/productos/principal/hogar.png"/>
				</a>
			</div>
			
			<div class="secciones" id="mascotas">
				<a href="mascotas.php">
					<img src="img/productos/principal/mascotas.png"/>
				</a>
			</div>	
		
		</div>
		<div class="clear"></div>	
		
		<?php include_once("footer.php")?>
			
	</body>
</html>
