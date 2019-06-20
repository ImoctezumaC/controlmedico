<?php
require "conexion.php";
     
	$idNota=$_POST['idNota'];

	//id=$_POST['id'];
 	//$fecha1=explode(',',$_REQUEST['fechaReg']);
 	//$fecha2=explode('/',$fecha1[0]);
 	//$fechaReg=$fecha2[2].'-'.$fecha2[1].'-'.$fecha2[0].$fecha1[1];


	$fechaReg=$_POST['fechaReg'];

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
     	





   $sql="UPDATE notahistoriaclinica SET  fechaReg='$fechaReg', idPaciente='$idPaciente', numCama='$numCama', medicamentosP='$medicamentosP', anteceNP='$anteceNP' ,padeciActual='$padeciActual', inteAS='$inteAS',exploFisica='$exploFisica', resulPALGO='$resulPALGO',diagnostico='$diagnostico', tipoCIE10='$tipoCIE10', pronostico='$pronostico', idEsp='$idEsp' WHERE idNota='$idNota'";
   




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
