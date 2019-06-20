<?php


require 'conexion.php';
$id=$_GET['id'];

$sql="SELECT * FROM notahistoriaclinica WHERE idNota='$id'";
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

                                        
                                             
                       
                     
                    <div class="col-md-4  form-group" data-for="numCama">
                            <label for="numCama-form1-q" class="form-control-label mbr-fonts-style display-7">Núm cama</label>
                            <input type="text" name="numCama" data-form-field="numCama" value= "<?php   echo $row['numCama'];?>" class="form-control display-7" id="numCama-form1-q">
                        </div> 

                        <div class="col-md-2  form-group" data-for="fechaReg">
                            <label for="fechaReg-form1-q" class="form-control-label mbr-fonts-style display-7">Fecha de registro:</label>
                            <input type="text" name="fechaReg" data-form-field="fechaReg" value= "<?php   echo $row['fechaReg'];?>" class="form-control display-7" id="fechaReg-form1-q" readonly>
                        </div>  


                        <div class="col-md-6  form-group" data-for="medicamentosP">
                            <label for="medicamentosP-form1-q" class="form-control-label mbr-fonts-style display-7">Medicamentos que ingiere el paciente</label>
                            <input type="text" name="medicamentosP" data-form-field="medicamentosP" value= "<?php   echo $row['medicamentosP'];?>" class="form-control display-7" id="medicamentosP-form1-q">
                        </div> 

                        <div data-for="anteceNP" class="col-md-6 form-group">
                            <label for="anteceNP-form1-q" class="form-control-label mbr-fonts-style display-7">Antecedentes no patológicos:</label>
                            <textarea name="anteceNP" data-form-field="anteceNP" class="form-control display-7" id="anteceNP-form1-q"><?php   echo $row['anteceNP'];?></textarea>
                        </div>


                        <div data-for="padeciActual" class="col-md-4 form-group">
                            <label for="padeciActual-form1-q" class="form-control-label mbr-fonts-style display-7">Padecimiento actual:</label>
                            <textarea name="padeciActual" data-form-field="padeciActual" class="form-control display-7" id="padeciActual-form1-q"><?php   echo $row['padeciActual'];?></textarea>
                        </div>
                        
                        <div data-for="inteAS" class="col-md-4 form-group">
                            <label for="inteAS-form1-q" class="form-control-label mbr-fonts-style display-7">interrogatorio por Aparatos y Sistemas:</label>
                            <textarea name="inteAS" data-form-field="inteAS" class="form-control display-7" id="inteAS-form1-q"><?php   echo $row['inteAS'];?></textarea>
                        </div>
                        
                        <div data-for="exploFisica" class="col-md-4 form-group">
                            <label for="exploFisica-form1-q" class="form-control-label mbr-fonts-style display-7">Exploración Física:</label>
                            <textarea name="exploFisica" data-form-field="objetivo" class="form-control display-7" id="exploFisica-form1-q"><?php   echo $row['exploFisica'];?></textarea>
                        </div>
                        
                        
                        <div data-for="resulPALGO" class="col-md-4 form-group">
                            <label for="resulPALGO-form1-q" class="form-control-label mbr-fonts-style display-7">resultados previos y actuales de Lab., gabinete y otros:</label>
                            <textarea name="resulPALGO" data-form-field="resulPALGO" class="form-control display-7" id="resulPALGO-form1-q"><?php   echo $row['resulPALGO'];?></textarea>
                        </div>

                        <div data-for="diagnostico" class="col-md-4 form-group">
                            <label for="diagnostico-form1-q" class="form-control-label mbr-fonts-style display-7">Diagnóstico:</label>
                            <textarea name="diagnostico" data-form-field="diagnostico" class="form-control display-7" id="diagnostico-form1-q"><?php   echo $row['diagnostico'];?></textarea>
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