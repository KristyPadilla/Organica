<?php 
	 include_once('conexion.php');
	$titulo_pagina="Tienda";
	$subtittulo="TIENDAS";
		
		$id= $_GET['id'];
	
	$tiendas = mysql_query("SELECT * FROM tiendas WHERE id=$id");
	?>
	
	<?php
	
	while($fila = mysql_fetch_array($tiendas)){
			$nombre = $fila['nombre'];
			$descripcion = $fila['descripcion'];
			$ubicacion = $fila['ubicacion'];
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
		
		
		<div  class="iconos">
			<img class="iconos "src="img/iconos/tiendas_icon.png">
		</div>
		
		
		<h1><?php echo $subtittulo; ?></h1>
		<p id="introduccion">Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. </p>
		

		
	
		<?php include_once("footer.php")?>
			
	</body>
</html>
