<?php
session_start(); 
if (isset($_SESSION['usuario'])){

require "conexion.php";
 
	$id=$_POST['id'];
    $nombreCliente=$_POST['nombreCliente'];
 	$cliente_rfc=$_POST['rfc'];
 	$direccionMail=$_POST['direccionMail'];
 	$direccionFiscal=$_POST['direccionFiscal'];
   $sql="UPDATE tbl_cliente SET cliente_razon_social='$nombreCliente', cliente_rfc='$cliente_rfc',cliente_email='$direccionMail', cliente_direccion='$direccionFiscal' WHERE cliente_id='$id'";
   
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