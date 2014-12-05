<?php 
	 include_once('conexion.php');
	$titulo_pagina="Comida Humanos";
	$subtittulo="COMIDA";
	
		$comidas = mysql_query("SELECT * FROM comida_humanos");
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
		
		<?php include_once('menu_productos.php'); ?>
		
		
		<div class="contenedor_img_productos">
		
		<?php 
				
			while($fila = mysql_fetch_array($comidas)){
				echo "<a href='comida_info.php?id=".$fila['id']."'>";
				echo "<div class='contenedor_productos'>";
				if($fila['imagen'] == ""){
					echo "<img src='img/null.gif'/>";
				}else{
					echo "<img src='img/productos/comida/" . $fila['imagen'] . "'/>";
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