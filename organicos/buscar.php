<?php
	
	
	include_once('conexion.php');

	 
?>

<!DOCTYPE html>

<html>

<head>
		

	</head>
	
		

<body>
 

        <form name="form1" method="post" action="buscar.php" id="cdr">
        <h4>Buscar Producto</h4>
        <input name="busca" type="text" id="busqueda">
        <br/>
        <input type="submit" value="buscar" id="boton2">
        </p>
        </form>
        
        <?php
			$busca="";
			$busca=$_POST['busca'];
			mysql_connect('localhost','root','root');
			mysql_select_db('organica',$conexion);
			if($busca!=""){
				$busqueda=mysql_query("SELECT * FROM comida_humanos WHERE nombre LIKE '%".$busca."%'");
			}
		?>
        <div class="scroll">
            <table width="960">
            <?php
                while($muestra=mysql_fetch_array($busqueda)){
                    echo "<tr>";
                    echo "<td>".$muestra['nombre']."</td>";
                    echo "<td><img src='img/productos/comida/" . $muestra['imagen']. "' /></td>";                  
                }
            ?>
            </table>
        </div>
    </div>
</div>
</body>
	
</body>
</html>