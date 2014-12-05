<?php 
	 include_once('conexion.php');
	$titulo_pagina="Productos para ti";
	$subtittulo="HOGAR";
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
		<p id="introduccion">En Organico&saludable encontraras información y productos 100% orgánicos en alimentos ya que es importante una buena alimentación, en el cuidado de la belleza e higiene que son importantes en nuestra vida diaria. </p>
	<hr/>
		<div class="portada_secciones">
			<img src="img/productos/humanos/portada2.jpg">
		</div>	
	
	
		<?php include_once("menu_productos.php")?>
		<div class="clear"></div>	
		
	
		<?php include_once("footer.php")?>
			
	</body>
</html>
