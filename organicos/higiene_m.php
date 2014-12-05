<?php 
	 include_once('conexion.php');
	$titulo_pagina="Higiene - mascotas";
	$subtittulo="HIGIENE";
	
		$higienes_m = mysql_query("SELECT * FROM higiene_mascotas");
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
		<p id="introduccion">Productos 100% organicos compuesto de plantas y hierbas para no dañar a las mascotas, no contienen químicos y son seguros al usarlos en las mascotas. Al usar esos productos no dañas al medio ambiente. </p>
		<hr/>
		
		<?php include_once("menu_mascotas.php")?>
		
		<div class="contenedor_img_productos">
		
		<?php 
				
			while($fila = mysql_fetch_array($higienes_m)){
				echo "<a href='higiene_m_info.php?id=".$fila['id']."'>";
					echo "<div class='contenedor_productos'>";
					if($fila['imagen'] == ""){
						echo "<img src='img/null.gif'/>";
					}else{
						echo "<img src='img/productos/mascotas/higiene/" . $fila['imagen'] . "'/>";
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