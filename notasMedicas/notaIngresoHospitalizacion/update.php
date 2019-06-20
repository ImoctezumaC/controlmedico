<?php
require "conexion.php";
     
	$idNota=$_POST['idNota'];

	//id=$_POST['id'];
 	//$fecha1=explode(',',$_REQUEST['fechaReg']);
 	//$fecha2=explode('/',$fecha1[0]);
 	//$fechaReg=$fecha2[2].'-'.$fecha2[1].'-'.$fecha2[0].$fecha1[1];


	$fechaReg=$_POST['fechaReg'];

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
     	





   $sql="UPDATE notaingresohospitalizacion SET  fechaReg='$fechaReg', idPaciente='$idPaciente', servicio='$servicio', medicamentosP='$medicamentosP', presentacion='$presentacion' ,subjetivo='$subjetivo', objetivo='$objetivo',signosV='$signosV', analisis='$analisis',diagnostico='$diagnostico', planManejo='$planManejo', tipoCIE10='$tipoCIE10', pronostico='$pronostico', idEsp='$idEsp' WHERE idNota='$idNota'";
   




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
