<?php 
	 include_once('conexion.php');
	$titulo_pagina="Medicina natural";
	$subtittulo=" MEDICINA NATURAL";
	
		$medicinas = mysql_query("SELECT * FROM medicina_natural");
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
		<p id="introduccion">En los tiempo muy remotos se utilizaba las plantas o hierbas medicinales para el uso de curacion de ciertas enfermedades. Estas son 100% naturalez y no dañan el funcionamiento del cuerpo. </p>
		<hr/>
		
		<?php include_once('menu_productos.php'); ?>
		
		<div class="contenedor_img_productos">
		
		<?php 
				
			while($fila = mysql_fetch_array($medicinas)){
				echo "<a href='medicina_info.php?id=".$fila['id']."'>";
					echo "<div class='contenedor_productos'>";
					if($fila['imagen'] == ""){
						echo "<img src='img/null.gif'/>";
					}else{
						echo "<img src='img/productos/medicina/" . $fila['imagen'] . "'/>";
						};
						
					echo "</div>";
				echo"</a>";
			}

		?>
		
		</div>
		<div class="clear"></div>	
		

		
		
		
	
		<?php include_once("footer.php")?>
			
	</body>
</html>