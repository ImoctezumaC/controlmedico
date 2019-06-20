<?php
    session_start(); 
    if(isset($_SESSION['usuario'])){

	require "conexion.php";

 	
 	//$idProducto=$_POST['idProducto'];
 	$nomProducto=$_POST['nomProducto'];
 	$unidadProducto=$_POST['unidadProducto'];
 	$precioUnitario=$_POST['precioUnitario'];

   $sql="INSERT INTO tbl_producto(producto_id,producto_descripcion,producto_unidad,producto_precio,producto_estado) VALUES(NULL,'$nomProducto','$unidadProducto',$precioUnitario,1)";

 	$resultado=$mysqli->query($sql);
 	




?>

<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
 
 
  <?php 
  $titulo='Guardar '; //titulo de la pagina
  include("head.php");
?>  
  
  
</head>
<body>
 <div class="container">
        <div class="row ">
            
            <div class="row" style="text-align:center">
                
			<?php 
			if($resultado){ ?>

			<h3>REGISTRO GUARDADO</h3>

			<?php }else{ ?>
			<h3>ERROR AL GUARDAR</h3>		
			<?php } ?>
			<a href="index.php" class="btn btn-primary">Regresar</a>

			
			</div>
			</div>
	</div>
</body>
</html>
<?php 
} else {        
        header('Location: ../index.php');
} 
    ?>
