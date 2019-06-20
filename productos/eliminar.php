<?php
require "conexion.php";
    $id=$_GET['id'];
 	$sql="DELETE FROM tbl_producto WHERE producto_id='$id'";
 	$resultado=$mysqli->query($sql);
?>

<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
 
 
  <?php 
  $titulo='Eliminar '; //titulo de la pagina
  include("head.php");
?>  
  
  
</head>
<body>
 <div class="container">
        <div class="row ">
            
            <div class="row" style="text-align:center">
                
			<?php  if($resultado){ ?>

			<h3>REGISTRO ELIMINADO</h3>

			<?php }else{ ?>
			<h3>ERROR AL ELIMINAR</h3>		
			<?php } ?>
			<a href="index.php" class="btn btn-primary">Regresar</a>

			
			</div>
			</div>
	</div>
</body>
</html>
