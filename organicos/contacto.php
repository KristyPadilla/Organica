<?php 
	 include_once('conexion.php');
	$titulo_pagina="Contacto";
	$subtittulo="CONTACTO";
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
			<img class="iconos "src="img/iconos/contacto_icon.png">
		</div>
		
		
		<h1><?php echo $subtittulo; ?></h1>
	<hr/>
		<p id="introduccion">Orgánico&saludable está para tu servicio y lo que más nos importa es lo que tu pienses, si tienes alguna duda, sugerencia o comenario comúnicate con nosotros y te atenderemos de inmediato.</p>
		<hr/>
	
<div id="contacto">
	
					
					
	<div id="contenedor_formulario">
			<div id="direccion">
				<p id="direccion">Calle de Alonso 12
				</br>
				Guanajuato, GTO
				</br>
				01 473 732 5752</p>
			</div>
					
			<div id="formulario">
				<form>
					<br>
					<input type="text" class="campos" value="Asunto">
					<br>
					<br>
					<input type="text" class="campos" value="Correo">
					<br>
					<br>
					<input type="text" id="mensaje" class="campos" value="Mensaje">
					<br>
							
					<input type="submit" value="Enviar" id="boton">
					</form>
			</div>
	</div>
	
				<div class="clear"></div>

</div>
		

	
		<?php include_once("footer.php")?>
		
			
	</body>
</html>

