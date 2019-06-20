<?php
    session_start(); 
    if(isset($_SESSION['usuario'])){

	require "conexion.php";
 	
 	//$idProducto=$_POST['idProducto'];
 	$razon_social=$_POST['nombreCliente'];
 	$cliente_rfc=$_POST['rfc'];
 	$direccionMail=$_POST['direccionMail'];
 	$direccionFiscal=$_POST['direccionFiscal']; 	


    $sql="INSERT INTO tbl_cliente(cliente_id,cliente_razon_social,cliente_rfc,cliente_email,cliente_direccion, cliente_estado) VALUES(NULL,'$razon_social','$cliente_rfc','$direccionMail','$direccionFiscal',1)";

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
