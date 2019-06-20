<?php
require "conexion.php";

/*$idPaciente	=$_POST['tiempoReg'];	
$nombre	=$_POST['tiempoReg'];
$apellido1	=$_POST['tiempoReg'];	
$apellido2	=$_POST['tiempoReg'];	
$fechNacimiento=$_POST['tiempoReg'];
$sexoPaciente	=$_POST['tiempoReg'];	
$rfcPaciente	=$_POST['tiempoReg'];	
$dirCalleNum	=$_POST['tiempoReg'];		
$coloniaPaciente	=$_POST['tiempoReg'];	
$mpioPaciente	=$_POST['tiempoReg'];	
$cpPaciente		=$_POST['tiempoReg'];	
$estado		=$_POST['tiempoReg'];
$pais		=$_POST['tiempoReg'];
$nacionalidad	=$_POST['tiempoReg'];	
$tipoIdentificacion	=$_POST['tiempoReg'];
$folioIdentificacion=$_POST['tiempoReg'];
$tipoSangre=$_POST['tiempoReg'];
$alergia=$_POST['tiempoReg'];
$tipoAlergia	=$_POST['tiempoReg'];	
$alcoholismo	=$_POST['tiempoReg'];	
$tabaquismo		=$_POST['tiempoReg'];
$toxicomania	=$_POST['tiempoReg'];	
$gpoEtnico		=$_POST['tiempoReg'];
$heredoFamiliares	=$_POST['tiempoReg'];*/

$nombre=$_POST['nombre']; 
$apellido1=$_POST['apellido1']; 
$apellido2=$_POST['apellido2']; 
$fechNac=$_POST['fechNac']; 
$sexoPx=$_POST['sexoP']; 
$rfcP=$_POST['rfcP'];             
$tipoIden=$_POST['tipoIden']; 
$folioId=$_POST['folioId']; 
$dirCalle=$_POST['dirCalle']; 
$dirColonia=$_POST['dirColonia']; 
$dirMpio=$_POST['dirMpio']; 
$dirCp=$_POST['dirCp']; 
$dirEdo=$_POST['dirEdo']; 
$dirPais=$_POST['dirPais']; 
if(isset($_POST['asegurado'])){
$asegurado=$_POST['asegurado']; 
$seguroP=$_POST['seguroP'];    
} else {$asegurado=0;$seguroP=NULL;}
$tiempoReg=$_POST['tiempoReg']; 
$noCama=$_POST['noCama']; 
$noExpediente=$_POST['noExpediente']; 
$medTratante=$_POST['medTratante']; 
$personaId=$_POST['personaId']; 
$parentescoId=$_POST['parentescoId']; 
$obs=$_POST['obs']; 
$persRegistra=$_POST['persRegistra'];
$idPx=date("YmdHis");

$sql="INSERT INTO dtpaciente(idPaciente,nombre,apellido1,apellido2,fechNacimiento, sexoPaciente,rfcPaciente,dirCalleNum,coloniaPaciente,mpioPaciente,cpPaciente,estado,pais,nacionalidad,tipoIdentificacion,folioIdentificacion,heredoFamiliares) VALUES('$idPx','$nombre','$apellido1','$apellido2','$fechNac','$sexoPx','$rfcP','$dirCalle','$dirColonia','$dirMpio','$dirCp','$dirEdo','$dirPais','SN','$tipoIden','$folioId','$obs')";
  	$resultado=$mysqli->query($sql);
?>

<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
 
 
  <?php 
  $titulo='Alta medicamentos'; //titulo de la pagina
  include("head.php");
?>  
  
  
</head>
<body>
 <div class="container">
        <div class="row ">
            
            <div class="row" style="text-align:center">
                
			<?php  if($resultado){ ?>

			<h3>REGISTRO GUARDADO</h3>

			<?php }else{ ?>
			<h3>ERROR AL GUARDAR</h3>		
			<?php } ?>
			<a href="indexPaciente.php" class="btn btn-primary">Regresar</a>

			
			</div>
			</div>
	</div>
</body>
</html>
