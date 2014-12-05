<?php 
	 include_once('conexion.php');
	$titulo_pagina="Mascotas";
	$subtittulo="MASCOTAS";
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

		<p id="introduccion">Organico&saludable se preocupa por el bienestar de sus mascotas, brindamos información de productos 100% orgánicos para ellos en alimentos, snack y productos de higiene para que estos gocen de una vida saludable y longeva. </p>

		<div class="portada_secciones">
			<img src="img/productos/mascotas/mascotas_baner.jpg">
		</div>	
	
	
		<?php include_once("menu_mascotas.php")?>
		<div class="clear"></div>	
		
	
		<?php include_once("footer.php")?>
			
	</body>
</html>