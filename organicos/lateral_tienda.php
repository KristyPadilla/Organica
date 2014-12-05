<?php 
	 include_once('conexion.php');

	
		$tiendas = mysql_query("SELECT * FROM tiendas");

				
			while($fila = mysql_fetch_array($tiendas)){
			
				echo "<a href='tienda.php?id=".$fila['id']."'>";
					echo "<div class='contenedor_tiendas'>";
						if($fila['imagen'] == ""){
							echo "<img src='img/null.gif'/>";
						}else{
							echo "<img src='img/tienda/general/" . $fila['imagen'] . "'/>";
							};
					echo "</div>";
				echo"</a>";
			}

		?>
			
			
			
