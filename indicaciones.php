<!DOCTYPE html>
<html >
<?php 
$titulo="Indicaciones Médicas";
include("head.php");
?>

<body>
<?php 
include("encabezado.php");
?>
<section class="mbr-section form1 cid-rjOggyEllZ" id="form1-q">
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><?php echo $titulo;  ?> 
                    </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <!-- <div class="media-container-column col-lg-8" data-form-type="formoid">
                Formbuilder Form -->
                <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                    <input type="hidden" name="email" data-form-email="true" value="olF+6sVRSJpPWBrfaDx7P46eaZ2Qd/kpqKYi/SoEpp5m1aAVQV/P4SoPCSYT4YlBIjHD+kmHmm1jukD5METM+X4uQSl9z7HqAiWGyYfIlKf5GvKuTedjp3uZWZrcVSSl">
                    
                     <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row row-sm-offset">
                       <div class="col-md-12  form-group" data-for="persRegistra">
                            <label for="persRegistra-form1-q" class="form-control-label mbr-fonts-style display-7">Nombre del paciente</label>
                            <input type="text" name="persRegistra" data-form-field="persRegistra" required="required" class="form-control display-7" id="persRegistra-form1-q">
                        </div>
            
                        <div class="col-md-4  form-group" data-for="fechNac">
                            <label for="fechNac-form1-q" class="form-control-label mbr-fonts-style display-7">Edad</label>
                            <input type="date" name="fechNac" data-form-field="fechNac" required="required" class="form-control display-7" id="fechNac-form1-q">
                        </div>
                        <div class="col-md-4  form-group" data-for="sexoP">
                            <label for="sexoP-form1-q" class="form-control-label mbr-fonts-style display-7">Sexo</label>
                            <select class="form-control" id="sexoP" > 
                                <option value="1" selected>Mujer</option>
                                <option value="2">Hombre</option>
                            </select>
                        </div> 
                        <div class="col-md-4  form-group" data-for="rfcP">
                            <label for="rfcP-form1-q" class="form-control-label mbr-fonts-style display-7">RFC</label>
                            <input type="text" name="rfcP" data-form-field="rfcP" class="form-control display-7" id="rfcP-form1-q">
                        </div>   

                        <div class="col-md-4  form-group" data-for="noCama">
                            <label for="noCama-form1-q" class="form-control-label mbr-fonts-style display-7">Número de cama</label>
                            <input type="text" name="noCama" data-form-field="noCama" class="form-control display-7" id="noCama-form1-q">
                        </div> 
                        <div class="col-md-4  form-group" data-for="fechaReg">
                            <label for="tiempoReg-form1-q" class="form-control-label mbr-fonts-style display-7">Fecha y hora</label>
                            <input type="datetime" name="tiempoReg" data-form-field="tiempoReg" class="form-control display-7" id="tiempoReg-form1-q" value="<?php $fecha=new DateTime("now",new DateTimeZone('America/Mexico_city')); echo $fecha->format('d/m/Y, H:i:s'); ?>">
                        </div>
      
                        <div class="subtitle col-12">
                            <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Indicaciones Médicas</h3>
                        </div>
     
                        <div data-for="cuidadosGrles" class="col-md-12 form-group">
                            <label for="cuidadosGrles-form1-q" class="form-control-label mbr-fonts-style display-7">Cuidados generales</label>
                            <textarea name="cuidadosGrles" data-form-field="cuidadosGrles" class="form-control display-7" id="cuidadosGrles-form1-q"></textarea>
                        </div>

                        <div class="subtitle col-12">
                            <h3 class="mbr-section-subtitle align-center pb-3 mbr-fonts-style display-5">Soluciones</h3>
                        </div>

                        <div class="field_wrapper1">
                            <div class="row col-12">
                            <div class="col-md-5 form-group" data-for="tipoSol">
                                <label for="tipoSol-form1-q" class="form-control-label mbr-fonts-style display-7">Tipo de solución</label>
                                <select class="form-control" id="tipoSol" name="tipoSol[]"> 
                                    <option value="Hartman" selected>Hartman</option>
                                    <option value="Mixta">Mixta</option>
                                    <option value="Cloruro09" >Cloruro de sodio 0.9%</option>
                                    <option value="Glucosa5p">Glucosada al 5 %</option>
                                    <option value="Glucosa50p">Glucosada al 50%</option>
                                    <option value="SolucionB">Únicamente solución base</option>  
                                    <option value="Almidon6p">Almidón al 6%</option> 
                                    <option value="Almidon10p">Almidón al 10%</option>  
                                    <option value="Gelatina">Gelatina</option> 
                                    <option value="Albumina">Albumina</option>                            
                                </select>
                            </div>
                            <div class="col-md-4 form-group" data-for="volSol">
                                <label for="volSol-form1-q" class="form-control-label mbr-fonts-style display-7">Volumén</label>
                                <select class="form-control" id="volSol" name="volSol[]"> 
                                    <option value="50ml" selected>50 ml.</option>
                                    <option value="100ml">100 ml.</option>
                                    <option value="250ml">250 ml.</option>
                                    <option value="500ml">500 ml.</option>
                                    <option value="1000ml">1000 ml.</option>
                                </select>
                            </div>
                            <div class="col-md-2  form-group" data-for="tiempoSol">
                                <label for="tiempoSol-form1-q" class="form-control-label mbr-fonts-style display-7">Tiempo</label>
                               <input type="text" name="tiempoSol[]" data-form-field="tiempoSol" class="form-control display-7" id="tiempoSol-form1-q">
                            </div>
                                <a href="javascript:void(0);" class="add_button1" title="Add field"><span class="mbri-plus mbr-iconfont mbr-iconfont-btn"></span></a>                          
                        </div>
                     </div>

                        <div class="subtitle col-12">
                            <h3 class="mbr-section-subtitle align-center pb-3 mbr-fonts-style display-5">Hemoderivados</h3>
                        </div>

                        <div class="field_wrapper2">
                            <div class="row col-12">
                            <div class="col-md-5 form-group" data-for="hemoderivado">
                                <label for="hemoderivado-form1-q" class="form-control-label mbr-fonts-style display-7">Tipo hemoderivado</label>
                                <select class="form-control" id="hemoderivado" name="hemoderivado[]"> 
                                    <option value="Eritrocitario" selected>Concentrado eritrocitario</option>
                                    <option value="PlasmaFrescoCong">Plasma fresco congelado</option>
                                    <option value="Aferesio" >Aferesio plaquetario</option>
                                    <option value="Glucosa5p">Concentrados plaquetarios</option>
                                    <option value="Glucosa50p">Crioprecipitados</option>                          
                                </select>
                            </div>
                            <div class="col-md-4 form-group" data-for="unidHemo">
                                <label for="unidHemo-form1-q" class="form-control-label mbr-fonts-style display-7">Unidades</label>
                                <input type="number" step="any" name="unidadHemo[]" data-form-field="unidadHemo" class="form-control display-7" value="1" id="unidadHemo-form1-q">
                            </div>
                            <div class="col-md-2  form-group" data-for="tiempoHemo">
                                <label for="tiempoHemo-form1-q" class="form-control-label mbr-fonts-style display-7">Tiempo</label>
                               <input type="text" name="tiempoHemo[]" data-form-field="tiempoHemo" class="form-control display-7" id="tiempoHemo-form1-q">
                            </div>
                                <a href="javascript:void(0);" class="add_button2" title="Add field"><span class="mbri-plus mbr-iconfont mbr-iconfont-btn"></span></a>                          
                        </div>
                     </div>


                        <div class="subtitle col-12">
                            <h3 class="mbr-section-subtitle align-center pb-3 mbr-fonts-style display-5">Medicamentos</h3>
                        </div>


                        <div class="col-md-3 form-group" data-for="tipoMed1">
                            <label for="tipoMed1-form1-q" class="form-control-label mbr-fonts-style display-7">Sustancias</label>
                            <select class="form-control" id="tipoMed1" > 
                                <option value="Hartman" selected>Hartman</option>
                                <option value="Mixta">Mixta</option>
                                <option value="Cloruro09">Cloruro de sodio 0.9%</option>
                                <option value="Glucosa5p">Glucosada al 5 %</option>
                                <option value="Glucosa50p">Glucosada al 50%</option>
                                <option value="SolucionB">Únicamente solución base</option>                                
                            </select>
                        </div>
                        

                        <div class="col-md-3  form-group" data-for="dosisMed1">
                            <label for="dosisMed1-form1-q" class="form-control-label mbr-fonts-style display-7">Dosis</label>
                            <input type="text" name="dosisMed1" data-form-field="dosisMed1" class="form-control display-7" id="dosisMed1-form1-q">
                        </div>

                        <div class="col-md-3 form-group" data-for="viaMed1">
                            <label for="viaMed1-form1-q" class="form-control-label mbr-fonts-style display-7">Vía</label>
                            <select class="form-control" id="viaMed1" > 
                                <option value="iv" selected>IV</option>
                                <option value="vo">VO</option>
                                <option value="im">IM</option>
                            </select>
                        </div>

                        <div class="col-md-3  form-group" data-for="tiempoMed1">
                            <label for="tiempoMed1-form1-q" class="form-control-label mbr-fonts-style display-7">Intervalo de tiempo</label>
                            <input type="text" name="tiempoMed1" data-form-field="tiempoMed1" class="form-control display-7" id="tiempoMed1-form1-q">
                        </div>



                        <div class="col-md-3 form-group" data-for="tipoMed2">
                            <select class="form-control" id="tipoMed2" > 
                                <option value="Hartman" selected>Hartman</option>
                                <option value="Mixta">Mixta</option>
                                <option value="Cloruro09" >Cloruro de sodio 0.9%</option>
                                <option value="Glucosa5p">Glucosada al 5 %</option>
                                <option value="Glucosa50p">Glucosada al 50%</option>
                                <option value="SolucionB">Únicamente solución base</option>                                
                            </select>
                        </div>
                        

                        <div class="col-md-3  form-group" data-for="dosisMed2">
                            <input type="text" name="dosisMed2" data-form-field="dosisMed2" class="form-control display-7" id="dosisMed2-form1-q">
                        </div>

                        <div class="col-md-3 form-group" data-for="viaMed2">
                            <select class="form-control" id="viaMed2" > 
                                <option value="iv" selected>IV</option>
                                <option value="vo">VO</option>
                                <option value="im">IM</option>
                            </select>
                        </div>

                        <div class="col-md-3  form-group" data-for="tiempoMed2">
                            <input type="text" name="tiempoMed2" data-form-field="tiempoMed2" class="form-control display-7" id="tiempoMed2-form1-q">
                        </div>

                         <div class="subtitle col-12">
                            <h3 class="mbr-section-subtitle align-center pb-3 mbr-fonts-style display-5">Estudios de gabinete</h3>
                        </div> 

                        <div data-for="estudioGabinete" class="col-md-12 form-group">
                            <label for="estudioGabinete-form1-q" class="form-control-label mbr-fonts-style display-7">Cuidados de gabinete</label>
                            <textarea name="estudioGabinete" placeholder="elegir Radriografías (simples o con medio de contraste), Tomografía, RMN, ultrasonido"data-form-field="estudioGabinete" class="form-control display-7" id="estudioGabinete-form1-q"></textarea>
                        </div>

                        <div class="subtitle col-12">
                            <h3 class="mbr-section-subtitle align-center pb-3 mbr-fonts-style display-5">Estudios de laboratorio</h3>
                        </div>     

                        <div data-for="estudioLaboratorio" class="col-md-12 form-group">
                            <label for="estudioLaboratorio-form1-q" class="form-control-label mbr-fonts-style display-7">Estudios de laboratorio</label>
                            <textarea name="estudioLaboratorio" placeholder="elegir Radriografías (simples o con medio de contraste), Tomografía, RMN, ultrasonido"data-form-field="estudioLaboratorio" class="form-control display-7" id="estudioLaboratorio-form1-q"></textarea>
                        </div>


                        <div class="subtitle col-12">
                            <h3 class="mbr-section-subtitle align-center pb-3 mbr-fonts-style display-5">Estudios especiales</h3>
                        </div> 


                        <div data-for="estudioLaboratorio" class="col-md-12 form-group">
                            <label for="estudioLaboratorio-form1-q" class="form-control-label mbr-fonts-style display-7">Estudios de laboratorio</label>
                            <textarea name="estudioLaboratorio" placeholder="elegir Radriografías (simples o con medio de contraste), Tomografía, RMN, ultrasonido"data-form-field="estudioLaboratorio" class="form-control display-7" id="estudioLaboratorio-form1-q"></textarea>
                        </div>
                        <div class=
                        "subtitle col-12">
                            <h3 class="mbr-section-subtitle align-center pb-3 mbr-fonts-style display-5">Interconsulta</h3>
                        </div>    


                        <div data-for="estudioLaboratorio" class="col-md-12 form-group">
                            <label for="estudioLaboratorio-form1-q" class="form-control-label mbr-fonts-style display-7">Estudios de laboratorio</label>
                            <textarea name="estudioLaboratorio" placeholder="elegir Radriografías (simples o con medio de contraste), Tomografía, RMN, ultrasonido"data-form-field="estudioLaboratorio" class="form-control display-7" id="estudioLaboratorio-form1-q"></textarea>
                        </div>


                        <div class="subtitle col-6">
                            <h3 class="mbr-section-subtitle align-center pb-3 mbr-fonts-style display-5">CIE10</h3>
                        </div>    

                        
                        <div class="subtitle col-6">
                            <h3 class="mbr-section-subtitle align-center pb-3 mbr-fonts-style display-5">Cormobilidades</h3>
                        </div> 

                         <div class="col-md-12  form-group" data-for="persRegistra">
                            <label for="persRegistra-form1-q" class="form-control-label mbr-fonts-style display-7">Persona que registra</label>
                            <input type="text" name="persRegistra" data-form-field="persRegistra" required="required" class="form-control display-7" id="persRegistra-form1-q" readonly>
                        </div>    

                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4">Registra</button></div>
                    </div>
                </form><!-- Formbuilder Form
            </div> -->
        </div>
    </div>
</section>

<?php
include("ayuda.php");

include("piePag.php");
?>   
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 15; //Input fields increment limitation
    var addButton1 = $('.add_button1'); //Add button selector
    var wrapper1 = $('.field_wrapper1'); //nput field wrapper
    var fieldHTML1 = '<div class="row col-12"><div class="col-md-5 form-group" data-for="tipoSol"><select class="form-control" id="tipoSol" name="tipoSol[]"><option value="Hartman" selected>Hartman</option><option value="Mixta">Mixta</option><option value="Cloruro09" >Cloruro de sodio 0.9%</option><option value="Glucosa5p">Glucosada al 5 %</option><option value="Glucosa50p">Glucosada al 50%</option><option value="SolucionB">Únicamente solución base</option><option value="Almidon6p">Almidón al 6%</option><option value="Almidon10p">Almidón al 10%</option><option value="Gelatina">Gelatina</option><option value="Albumina">Albumina</option></select></div><div class="col-md-4 form-group" data-for="volSol"><select class="form-control" id="volSol" name="volSol[]"><option value="50ml" selected>50 ml.</option><option value="100ml">100 ml.</option><option value="250ml">250 ml.</option><option value="500ml">500 ml.</option><option value="1000ml">1000 ml.</option></select></div><div class="col-md-2  form-group" data-for="tiempoSol"><input type="text" name="tiempoSol[]" data-form-field="tiempoSol" class="form-control display-7" id="tiempoSol-form1-q"></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><span class="mbri-trash mbr-iconfont mbr-iconfont-btn"></span></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton1).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper1).append(fieldHTML1); // Add field html
        }
    });
    $(wrapper1).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

    var addButton2 = $('.add_button2'); //Add button selector
    var wrapper2 = $('.field_wrapper2'); //nput field wrapper
    var fieldHTML2 = '<div class="row col-12"><div class="col-md-5 form-group" data-for="tipoSol"><select class="form-control" id="tipoSol" name="tipoSol[]"><option value="Hartman" selected>Hartman</option><option value="Mixta">Mixta</option><option value="Cloruro09" >Cloruro de sodio 0.9%</option><option value="Glucosa5p">Glucosada al 5 %</option><option value="Glucosa50p">Glucosada al 50%</option><option value="SolucionB">Únicamente solución base</option><option value="Almidon6p">Almidón al 6%</option><option value="Almidon10p">Almidón al 10%</option><option value="Gelatina">Gelatina</option><option value="Albumina">Albumina</option></select></div><div class="col-md-4 form-group" data-for="volSol"><select class="form-control" id="volSol" name="volSol[]"><option value="50ml" selected>50 ml.</option><option value="100ml">100 ml.</option><option value="250ml">250 ml.</option><option value="500ml">500 ml.</option><option value="1000ml">1000 ml.</option></select></div><div class="col-md-2  form-group" data-for="tiempoSol"><input type="text" name="tiempoSol[]" data-form-field="tiempoSol" class="form-control display-7" id="tiempoSol-form1-q"></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><span class="mbri-trash mbr-iconfont mbr-iconfont-btn"></span></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton2).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper2).append(fieldHTML2); // Add field html
        }
    });
    $(wrapper2).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
 

  
</body>
</html>