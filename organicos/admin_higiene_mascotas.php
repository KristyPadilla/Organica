<?php
	
	
	include_once('conexion.php');

	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Form</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Untitled Form</a></h1>
		<form id="form_938757" class="appnitro" enctype="multipart/form-data" method="POST" action="insertar_higiene_mascotas.php">
					<div class="form_description">
			<h2>Administrador</h2>
			<p>Administrador para los productos</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="nombre">Producto </label>
		<div>
			<input id="nombre" name="nombre" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="descripcion">Descripción </label>
		<div>
			<textarea id="descripcion" name="descripcion" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="imagen">Imagen </label>
		<div>
			<input id="imagen" name="imagen" class="element file" type="file"/> 
		</div>  
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="938757" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Generated by <a href="http://www.phpform.org">pForm</a>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>