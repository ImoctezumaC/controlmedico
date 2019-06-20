<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
 
 
  <?php 
  $titulo='Nota de evolucion'; //titulo de la pagina
  include("head.php");
?>  
  
 <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-12">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Nota de evolución</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>

 
</head>
<body>


  
<!--<section class="mbr-section form1 cid-rjOggyEllZ" id="form1-q">-->
    
    <div class="container">
        <div class="row justify-content-center">
            <!--div class="media-container-column col-lg-8" data-form-type="formoid">
                <!-- Formbuilder Form -->
                <form method="POST" action ="guardar.php" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                  <input type="hidden" name="email" data-form-email="true" value="olF+6sVRSJpPWBrfaDx7P46eaZ2Qd/kpqKYi/SoEpp5m1aAVQV/P4SoPCSYT4YlBIjHD+kmHmm1jukD5METM+X4uQSl9z7HqAiWGyYfIlKf5GvKuTedjp3uZWZrcVSSl">
                    
                     <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Grx por requisitar el formulario</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>

                    <div class="dragArea row row-sm-offset">


                         <div class="col-md-5  form-group" data-for="nombre">
                            <label for="nombre-form1-q" class="form-control-label mbr-fonts-style display-7">Paciente</label>
                           
                            <p>
                            <select class="selectpicker col-md-12" data-show-subtext="true" name="idPaciente" data-live-search="true">
                                <option data-subtext="0">Seleciona...</option>       
                              

                              <?php
                              

                              $con = mysqli_connect("localhost","root","","medicaldb");
                           
                          
                              $consulta = "SELECT idPaciente, nombre, apellido1, ROUND(datediff(current_date,fechNacimiento)/365) as edadPaciente FROM dtpaciente";
                              $resultado = mysqli_query($con , $consulta);
                              $contador=0;
                               
                              while($misdatos = mysqli_fetch_assoc($resultado)){ 
                                $contador++;?>
                             <option value ="<?php echo $misdatos['idPaciente']; ?>" data-subtext="<?php echo $misdatos['idPaciente']; ?>"><?php echo $misdatos['nombre'],' ',$misdatos['apellido1'],' ',$misdatos['edadPaciente'],' años'; ?> </option>
                              <?php } 
                              ?>          
                              
                              </select> 
                          </p>

                        </div>
                <!--       <div class="col-md-6  form-group" data-for="edadPaciente">
                            <label for="edadPaciente-form1-q" class="form-control-label mbr-fonts-style display-7">Edad</label>
                            <input type="text" name="edadPaciente" data-form-field="edadPaciente"  class="form-control display-7" id="edadPaciente-form1-q">
                        </div> 

              

onblur ="document.getElementById('nombre').value=this.value" -->


                     

                        <div class="col-md-4  form-group" data-for="servicio">
                            <label for="servicio-form1-q" class="form-control-label mbr-fonts-style display-7">Servicio</label>
                            <select class="form-control" id="servicio"  name="servicio"> 
                              <option value="">Selecione una especialidad..</option> 
                                <option value=" Consulta General">Consulta General</option>
                                <option value=" Traumatología" >Traumatología</option>
                                <option value=" Ginecología" >Ginecología</option>
                                <option value="Internista">Internista</option>
                                <option value="Pediatría" >Pediatría</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>   

                         

                       
                       
                       <div class="col-md-3  form-group" data-for="fechaReg">
                            <label for="fechaReg-form1-q" class="form-control-label mbr-fonts-style display-7">Fecha y hora de registro:</label>
                            <input type="text" name="fechaReg" data-form-field="fechaReg" value= "<?php  $fecha = new DateTime("now", new DateTimeZone('America/Mexico_city')); echo $fecha->format('d/m/Y, H:i:s'); ?>" class="form-control display-7" id="fechaReg-form1-q"  readonly>
                        </div>


                        
                        <div class="col-md-9  form-group" data-for="medicamentosP">
                            <label for="mediscamentosP-form1-q" class="form-control-label mbr-fonts-style display-7">Medicamentos que ingiere el paciente</label>
                            <input type="text" name="medicamentosP" data-form-field="medicamentosP"  class="form-control display-7" id="medicamentosP-form1-q">
                        </div> 
                        <div data-for="signosV" class="col-md-3 form-group">
                            <label for="signosV-form1-q" class="form-control-label mbr-fonts-style display-7">Signos vitales:</label>
                            <textarea name="signosV" data-form-field="signosV" class="form-control display-7" id="signosV-form1-q"></textarea>
                        </div>
                        <div data-for="presentacion" class="col-md-4 form-group">
                            <label for="presentacion-form1-q" class="form-control-label mbr-fonts-style display-7">Presentación del caso (P):</label>
                            <textarea name="presentacion" data-form-field="presentacion" class="form-control display-7" id="presentacion-form1-q"></textarea>
                        </div>
                        
                        <div data-for="subjetivo" class="col-md-4 form-group">
                            <label for="subjetivo-form1-q" class="form-control-label mbr-fonts-style display-7">Subjetivo (S):</label>
                            <textarea name="subjetivo" data-form-field="subjetivo" class="form-control display-7" id="subjetivo-form1-q"></textarea>
                        </div>
                        
                        <div data-for="objetivo" class="col-md-4 form-group">
                            <label for="objetivo-form1-q" class="form-control-label mbr-fonts-style display-7">Objetivo (O):</label>
                            <textarea name="objetivo" data-form-field="objetivo" class="form-control display-7" id="objetivo-form1-q"></textarea>
                        </div>
                        
                        

                        <div data-for="analisis" class="col-md-4 form-group">
                            <label for="analisis-form1-q" class="form-control-label mbr-fonts-style display-7">Análisis (A):</label>
                            <textarea name="analisis" data-form-field="analisis" class="form-control display-7" id="analisis-form1-q"></textarea>
                        </div>

                        <div data-for="diagnostico" class="col-md-4 form-group">
                            <label for="diagnostico-form1-q" class="form-control-label mbr-fonts-style display-7">Diagnóstico:</label>
                            <textarea name="diagnostico" data-form-field="diagnostico" class="form-control display-7" id="diagnostico-form1-q"></textarea>
                        </div>

                        <div data-for="planManejo" class="col-md-4 form-group">
                            <label for="planManejo-form1-q" class="form-control-label mbr-fonts-style display-7"> Plan de manejo (P):</label>
                            <textarea name="planManejo" data-form-field="planManejo" class="form-control display-7" id="planManejo-form1-q"></textarea>
                        </div>

                          
                         <div data-for="pronostico" class="col-md-4 form-group">
                            <label for="pronostico-form1-q" class="form-control-label mbr-fonts-style display-7">Pronóstico:</label>
                            <textarea name="pronostico" data-form-field="pronostico" class="form-control display-7" id="pronostico-form1-q"></textarea>
                        </div>


                        
                        <div class="col-md-4  form-group" data-for="tipoCIE10">
                      
                          <label for="tipoCIE10-form1-q" class="form-control-label mbr-fonts-style display-7">CIE 10: </label>
                             
                            <p>
                            <select class="selectpicker col-md-8" data-show-subtext="true" name="tipoCIE10" data-live-search="true">
                                <option data-subtext="0">Seleciona...</option>       
                              <?php
                              $con = mysqli_connect("localhost","root","root","db29179_cie10");
                              if (!$con->set_charset("utf8")) { //asignamos la codificación comprobando que no falle
                                     die("Error cargando el conjunto de caracteres utf8");
                              }
                              $consulta = "SELECT id10,dec10 FROM db29179_cie10";
                              $resultado = mysqli_query($con , $consulta);
                              $contador=0;
                               
                              while($misdatos = mysqli_fetch_assoc($resultado)){ 
                                $contador++;?>
                              <option data-subtext="<?php echo $misdatos["id10"]; ?>"><?php echo $misdatos["id10"],' ',$misdatos["dec10"]; ?></option>
                              <?php } ?>          
                              </select> 
                          </p>
                         <p>
                            <select class="selectpicker col-md-8" data-show-subtext="true" data-url="data.json">                          
                              </select> 
                          </p>

                        </div>
                         

                       




                        <div class="col-md-4  form-group" data-for="idEsp">
                            <label for="idEsp-form1-q" class="form-control-label mbr-fonts-style display-7">Nombre del Especialista</label>
                            

                            <p>
                            <select class="selectpicker col-md-8" data-show-subtext="true" name="idEsp" data-live-search="true">
                                <option data-subtext="0">Seleciona...</option>       
                              
                              <?php
                              $con = mysqli_connect("localhost","root","","medicaldb");
                           
                          
                              $consulta = "SELECT idPersonal, nombreCompleto, especialidadMed FROM dtpersonal";
                              $resultado = mysqli_query($con , $consulta);
                              $contador=0;
                               
                              while($misdatos = mysqli_fetch_assoc($resultado)){ 
                                $contador++;?>
                             <option value="<?php echo $misdatos['idPersonal']; ?>" data-subtext="<?php echo $misdatos['idPersonal']; ?>"><?php echo $misdatos['nombreCompleto'],' --- ',$misdatos['especialidadMed']; ?> </option>
                              <?php } 
                              ?>          
                              
                              </select> 
                          </p>


                        </div>
 
                         <div class="col-md-6 input-group-btn align-center"><button type="submit" class="btn btn-primary ">Guardar</button></div>                       
                         <div class="col-md-6 input-group-btn align-center"><a href="index.php" class="btn  btn-secondary">Regresar</a></div>

                    </div>
                </form><!-- Formbuilder Form -->
            </div-->
        </div>
    </div>
<!--</section>-->



  
 
<script>

$( document ).ready(function()
{
    $('select[class="selectpicker"][data.json]').each(function(index, value)
    {
        var select = $(this);
        var id     = $(this).attr('data-id');
        var label  = $(this).attr('data-label');

        $.getJSON(url, function(data)
        {
            select.html('');

            $.each(data, function(key, val)
            {
                select.append('<option value="' + val[id] + '">' + val[label] + '</option>');
            });

            select.selectpicker('refresh');
        });
    });
});
</script>
</body>
</html>