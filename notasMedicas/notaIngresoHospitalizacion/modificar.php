<?php


require 'conexion.php';
$id=$_GET['id'];

$sql="SELECT * FROM notaingresohospitalizacion WHERE idNota='$id'";
$resultado=$mysqli->query($sql);

$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
 
 
  <?php 
  $titulo='Modificar registro'; //titulo de la pagina
  include("head.php");
?>  
  
</head>
<body>


  
<!--<section class="mbr-section form1 cid-rjOggyEllZ" id="form1-q">-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-12">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Modificar registro</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <!--div class="media-container-column col-lg-8" data-form-type="formoid">
                <!-- Formbuilder Form -->
                <form method="POST" action ="update.php" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="olF+6sVRSJpPWBrfaDx7P46eaZ2Qd/kpqKYi/SoEpp5m1aAVQV/P4SoPCSYT4YlBIjHD+kmHmm1jukD5METM+X4uQSl9z7HqAiWGyYfIlKf5GvKuTedjp3uZWZrcVSSl">
                    
                     <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Grx por requisitar el formulario</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    

                    <div class="dragArea row row-sm-offset">
                        
                        <input type="hidden" id="idNota" name="idNota" value="<?php   echo $row['idNota'];?>"/>

                       
                    <div class="col-md-6  form-group" data-for="idPaciente">
                            <label for="idPaciente-form1-q" class="form-control-label mbr-fonts-style display-7">idPaciente</label>
                            <input type="text" name="idPaciente" data-form-field="idPaciente" required="required" class="form-control display-7"  value= "<?php   echo $row['idPaciente'];?>" id="idPacient-form1-q" readonly>
                        </div>

                                        
                                             
                       
                     
                        <div class="col-md-4  form-group" data-for="servicio">
                            <label for="servicio-form1-q" class="form-control-label mbr-fonts-style display-7">Servicio</label>
                            <input type="text" name="servicio" data-form-field="servicio" value= "<?php   echo $row['servicio'];?>" class="form-control display-7" id="servicio-form1-q">
                        </div> 

                        <div class="col-md-2  form-group" data-for="fechaReg">
                            <label for="fechaReg-form1-q" class="form-control-label mbr-fonts-style display-7">Fecha de registro:</label>
                            <input type="text" name="fechaReg" data-form-field="fechaReg" value= "<?php   echo $row['fechaReg'];?>" class="form-control display-7" id="fechaReg-form1-q" readonly>
                        </div>  


                        <div class="col-md-6  form-group" data-for="medicamentosP">
                            <label for="medicamentosP-form1-q" class="form-control-label mbr-fonts-style display-7">Medicamentos que ingiere el paciente</label>
                            <input type="text" name="medicamentosP" data-form-field="medicamentosP" value= "<?php   echo $row['medicamentosP'];?>" class="form-control display-7" id="medicamentosP-form1-q">
                        </div> 

                        <div data-for="signosV" class="col-md-6 form-group">
                            <label for="signosV-form1-q" class="form-control-label mbr-fonts-style display-7">Signos vitales:</label>
                            <textarea name="signosV" data-form-field="signosV" class="form-control display-7" id="signosV-form1-q"><?php   echo $row['signosV'];?></textarea>
                        </div>


                        <div data-for="presentacion" class="col-md-4 form-group">
                            <label for="presentacion-form1-q" class="form-control-label mbr-fonts-style display-7">Presentación del caso (P):</label>
                            <textarea name="presentacion" data-form-field="presentacion" class="form-control display-7" id="presentacion-form1-q"><?php   echo $row['presentacion'];?></textarea>
                        </div>
                        
                        <div data-for="subjetivo" class="col-md-4 form-group">
                            <label for="subjetivo-form1-q" class="form-control-label mbr-fonts-style display-7">Subjetivo (S):</label>
                            <textarea name="subjetivo" data-form-field="subjetivo" class="form-control display-7" id="subjetivo-form1-q"><?php   echo $row['subjetivo'];?></textarea>
                        </div>
                        
                        <div data-for="objetivo" class="col-md-4 form-group">
                            <label for="objetivo-form1-q" class="form-control-label mbr-fonts-style display-7">Objetivo (O):</label>
                            <textarea name="objetivo" data-form-field="objetivo" class="form-control display-7" id="objetivo-form1-q"><?php   echo $row['objetivo'];?></textarea>
                        </div>
                        
                        
                        <div data-for="analisis" class="col-md-4 form-group">
                            <label for="analisis-form1-q" class="form-control-label mbr-fonts-style display-7">Análisis (A):</label>
                            <textarea name="analisis" data-form-field="analisis" class="form-control display-7" id="analisis-form1-q"><?php   echo $row['analisis'];?></textarea>
                        </div>

                        <div data-for="diagnostico" class="col-md-4 form-group">
                            <label for="diagnostico-form1-q" class="form-control-label mbr-fonts-style display-7">Diagnóstico:</label>
                            <textarea name="diagnostico" data-form-field="diagnostico" class="form-control display-7" id="diagnostico-form1-q"><?php   echo $row['diagnostico'];?></textarea>
                        </div>

                        <div data-for="planManejo" class="col-md-4 form-group">
                            <label for="planManejo-form1-q" class="form-control-label mbr-fonts-style display-7"> Plan de manejo:</label>
                            <textarea name="planManejo" data-form-field="planManejo" class="form-control display-7" id="planManejo-form1-q"><?php   echo $row['planManejo'];?></textarea>
                        </div>



                        <div data-for="pronostico" class="col-md-4 form-group">
                            <label for="pronostico-form1-q" class="form-control-label mbr-fonts-style display-7">Pronóstico:</label>
                            <textarea name="pronostico" data-form-field="pronostico" value= "<?php   echo $row['pronostico'];?>" class="form-control display-7" id="pronostico-form1-q"></textarea>
                        </div>

                          <div class="col-md-4  form-group" data-for="tipoCIE10">
                            <label for="tipoCIE10-form1-q" class="form-control-label mbr-fonts-style display-7">CIE10</label>
                            <input type="text" name="tipoCIE10" data-form-field="tipoCIE10" value= "<?php   echo $row['tipoCIE10'];?>" class="form-control display-7" id="tipoCIE10-form1-q">
                        </div> 




                        <div class="col-md-6  form-group" data-for="idEsp">
                            <label for="idEsp-form1-q" class="form-control-label mbr-fonts-style display-7">id Especialista</label>
                            <input type="text" name="idEsp" data-form-field="idEsp" required="required" value= "<?php   echo $row['idEsp'];?>" class="form-control display-7" id="idEsp-form1-q" readonly>
                        </div>

                       
            
                       

                     

                        <div class="col-md-6 input-group-btn align-center"><button type="submit" class="btn btn-primary ">Guardar</button></div>
                        <div class="col-md-6 input-group-btn align-center"><a href="index.php" class="btn  btn-secondary">Regresar</a></div>

                      </div>
                </form><!-- Formbuilder Form -->
            </div-->
        </div>
    </div>
<!--</section>--> 




</body>
</html>