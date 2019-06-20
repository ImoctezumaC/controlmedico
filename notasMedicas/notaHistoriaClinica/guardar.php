<?php
require "conexion.php";

 	
 	$fecha1=explode(',',$_REQUEST['fechaReg']);
 	$fecha2=explode('/',$fecha1[0]);
 	$fechaReg=$fecha2[2].'-'.$fecha2[1].'-'.$fecha2[0].$fecha1[1];
 	$idPaciente=$_POST['idPaciente'];
 	
 	$numCama=$_POST['numCama'];
 	$medicamentosP=$_POST['medicamentosP'];

 	$anteceNP=$_POST['anteceNP'];
	$padeciActual=$_POST['padeciActual'];
 	
	$inteAS=$_POST['inteAS'];
 	$exploFisica=$_POST['exploFisica'];
	$resulPALGO=$_POST['resulPALGO'];
 	$diagnostico=$_POST['diagnostico'];
 	
	$tipoCIE10=$_POST['tipoCIE10'];
 	$pronostico=$_POST['pronostico'];
 	$idEsp=$_POST['idEsp'];

 	
   $sql="INSERT INTO notahistoriaclinica(fechaReg,idPaciente,numCama ,medicamentosP,anteceNP, padeciActual, inteAS,exploFisica,resulPALGO,diagnostico,tipoCIE10,pronostico,idEsp,edadPaciente) VALUES('$fechaReg','$idPaciente', '$numCama','$medicamentosP','$anteceNP', '$padeciActual', '$inteAS','$exploFisica','$resulPALGO','$diagnostico','$tipoCIE10','$pronostico','$idEsp',(select ROUND(datediff(current_date,fechNacimiento)/365) FROM dtpaciente where idPaciente='$idPaciente'))";

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
