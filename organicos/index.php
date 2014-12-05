<?php 
	 include_once('conexion.php');
	$titulo_pagina="Home";
	$subtittulo="CONÓCENOS";
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
		
		
		<div id="portada">
			<img id="portada" src="img/home/portada.png">
		</div>
		
		
		<div  class="iconos">
			<img class="iconos "src="img/iconos/home_icon.png">
		</div>
		
		
		<h1><?php echo $subtittulo; ?></h1>
		
	<hr/>
		
		<p id="introduccion">Orgánica&Saludable nació de la necesidad de la gente por buscar productos 100% saludables e información real y sólida de cada alimento catalogado aquí, no solo te consentirás tú, contamos con una tienda de productos y alimentos 100% recomendable y saludable para tu mascota. Te invitamos a dar un vistazo a nuestra página. </p>
		
		
	<hr/>
	
	<div  id="baner_home">
			
			<img src="img/home/baner_home.jpg">
		</div>
		
		<?php include_once("footer.php")?>
			
	</body>
</html>
