<?php 
	 include_once('conexion.php');
	$titulo_pagina="Tienda";
	$subtittulo="TIENDAS";
	
		$tiendas = mysql_query("SELECT * FROM tiendas");
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
			<img class="iconos "src="img/iconos/tiendas_icon.png">
		</div>
		
		
		<h1><?php echo $subtittulo; ?></h1>
		
		<hr/>
		<p id="introduccion">Los productos que publicamos en Organico&saludable son 100% saludables y avalados por varias instituciones nacionales e internacionales de salud. Siéntase seguro/a de consumir los productos de nuestra tienda. </p>
		<hr/>
		
				<div id="contenedor_uno">
		<?php include_once("lateral_tienda.php"); ?>
		
		</div>
				
		<div id="contenedor_tres">
			<img src="img/tienda/relleno2.jpg">
		</div>
		<div class="clear"></div>
	
		<?php include_once("footer.php")?>
			
	</body>
</html>
