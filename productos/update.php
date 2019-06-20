<?php
session_start(); 
if (isset($_SESSION['usuario'])){

require "conexion.php";
 
	$id=$_POST['id'];
    $nomProducto=$_POST['nomProducto'];
    $unidadProducto=$_POST['unidadProducto'];
 	$precioUnitario=$_POST['precioUnitario'];

   $sql="UPDATE tbl_producto SET producto_descripcion='$nomProducto', producto_unidad='$unidadProducto', producto_precio='$precioUnitario' WHERE idProducto='$id'";
   
 	$resultado=$mysqli->query($sql);
 	


?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
  
  <?php 
  $titulo='Guardar registro'; //titulo de la pagina
  include("head.php");
?>  
  
  
</head>
<body>
 <div class="container">
        <div class="row ">
            
            <div class="row" style="text-align:center">
                
			<?php
			if($resultado){ ?>

			<h3>REGISTRO MODIFICADO</h3>

			<?php }else{ ?>
			<h3>ERROR AL MODIFICAR</h3>		
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