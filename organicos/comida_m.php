<?php 
	 include_once('conexion.php');
	$titulo_pagina="Comida - mascotas";
	$subtittulo="COMIDA";
	
		$comidas_m = mysql_query("SELECT * FROM comida_mascotas");
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
		<p id="introduccion">Los alimentos son 100% organicos que benefician a una buena salud en pequeños y grandes mascotas. No contienen pesticidas o quimicos que puedan dañar su salud. </p>
		<hr/>
		
		<?php include_once("menu_mascotas.php")?>
		
		<div class="contenedor_img_productos">
		
		<?php 
				
			while($fila = mysql_fetch_array($comidas_m)){
				echo "<a href='comida_m_info.php?id=".$fila['id']."'>";
					echo "<div class='contenedor_productos'>";
					if($fila['imagen'] == ""){
						echo "<img src='img/null.gif'/>";
					}else{
						echo "<img src='img/productos/mascotas/comida/" . $fila['imagen'] . "'/>";
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