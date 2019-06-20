<?php
require "conexion.php";

 	
 	$fecha1=explode(',',$_REQUEST['fechaReg']);
 	$fecha2=explode('/',$fecha1[0]);
 	$fechaReg=$fecha2[2].'-'.$fecha2[1].'-'.$fecha2[0].$fecha1[1];
 	$idPaciente=$_POST['idPaciente'];
 	
 	$servicio=$_POST['servicio'];
 	$medicamentosP=$_POST['medicamentosP'];
 	$presentacion=$_POST['presentacion'];
	$subjetivo=$_POST['subjetivo'];
 	$objetivo=$_POST['objetivo'];
	$signosV=$_POST['signosV'];
	$analisis=$_POST['analisis'];
 	$diagnostico=$_POST['diagnostico'];
 	$planManejo=$_POST['planManejo'];
 	
	$tipoCIE10=$_POST['tipoCIE10'];
 	$pronostico=$_POST['pronostico'];
 	$idEsp=$_POST['idEsp'];

 	
   $sql="INSERT INTO notaingresohospitalizacion(fechaReg,idPaciente, servicio,medicamentosP,presentacion, subjetivo, objetivo,signosV,analisis,diagnostico,planManejo,tipoCIE10,pronostico,idEsp,edadPaciente) VALUES('$fechaReg','$idPaciente', '$servicio','$medicamentosP','$presentacion', '$subjetivo', '$objetivo','$signosV','$analisis','$diagnostico','$planManejo','$tipoCIE10','$pronostico','$idEsp',(select ROUND(datediff(current_date,fechNacimiento)/365) FROM dtpaciente where idPaciente='$idPaciente'))";

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
