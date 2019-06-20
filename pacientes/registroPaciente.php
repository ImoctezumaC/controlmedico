<?php 
    session_start(); 
    include ("funciones.php");
?>
<!DOCTYPE html>
<html>
<?php 
    $titulo='Registro de pacientes';
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
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Pacientes</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>

            </div>
        </div>
    </div>

<?php
if (!isset($_POST['btnRegistra'])){
?>
       <div class="container">
        <div class="row justify-content-center">
            <!--div class="media-container-column col-lg-8" data-form-type="formoid"><Formbuilder Form -->
 
                <form action="guardar.php" method="POST" class="mbr-form form-with-styler" data-form-title="Paciente Form" id="paciente-form">
                    <input type="hidden" name="email" data-form-email="true" value="olF+6sVRSJpPWBrfaDx7P46eaZ2Qd/kpqKYi/SoEpp5m1aAVQV/P4SoPCSYT4YlBIjHD+kmHmm1jukD5METM+X4uQSl9z7HqAiWGyYfIlKf5GvKuTedjp3uZWZrcVSSl">
                    
                     <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row row-sm-offset">
                       
                        <div class="col-md-4  form-group" data-for="nombre">
                            <label for="nombre-form1-q" class="form-control-label mbr-fonts-style display-7">Nombre</label>
                            <input type="text" name="nombre" data-form-field="nombre" required="required" class="form-control display-7" id="nombre-form1-q">
                        </div>
                        <div class="col-md-4  form-group" data-for="apellido1">
                            <label for="apellido1-form1-q" class="form-control-label mbr-fonts-style display-7">Apellido 1</label>
                            <input type="text" name="apellido1" data-form-field="apellido1" required="required" class="form-control display-7" id="apellido1-form1-q" >
                        </div>
                        <div class="col-md-4  form-group" data-for="apellido2">
                            <label for="apellido2-form1-q" class="form-control-label mbr-fonts-style display-7">Apellido 2</label>
                            <input type="text" name="apellido2" data-form-field="apellido2" class="form-control display-7" id="apellido2-form1-q">
                        </div>
            
                        <div class="col-md-4  form-group" data-for="fechNac">
                            <label for="fechNac-form1-q" class="form-control-label mbr-fonts-style display-7">Fecha de Nacimiento</label>
                            <input type="date" name="fechNac" data-form-field="fechNac" required="required" class="form-control display-7" id="fechNac-form1-q">
                        </div>
                        <div class="col-md-4  form-group" data-for="sexoP">
                            <label for="sexoP-form1-q" class="form-control-label mbr-fonts-style display-7">Sexo</label>
                            <select class="form-control" name="sexoP" id="sexoP"> 
                                <option value="1" selected>Femenino</option>
                                <option value="2">-masculino</option>
                            </select>
                        </div> 
                        <div class="col-md-4  form-group" data-for="rfcP">
                            <label for="rfcP-form1-q" class="form-control-label mbr-fonts-style display-7">RFC</label>
                            <input type="text" name="rfcP" data-form-field="rfcP" class="form-control display-7" id="rfcP-form1-q" value="<?php echo'Hola'; ?>">
                        </div>                      
                        
                        <div class="col-md-8  form-group" data-for="dirCalle">
                            <label for="dirCalle-form1-q" class="form-control-label mbr-fonts-style display-7">Dirección: Calle y número</label>
                            <input type="text" name="dirCalle" data-form-field="dirCalle" class="form-control display-7" id="dirCalle-form1-q">
                        </div> 
                        <div class="col-md-4  form-group" data-for="dirColonia">
                            <label for="dirColonia-form1-q" class="form-control-label mbr-fonts-style display-7">Colonia</label>
                            <input type="text" name="dirColonia" data-form-field="dirColonia" class="form-control display-7" id="dirColonia-form1-q">
                        </div>
                        <div class="col-md-4  form-group" data-for="dirMpio">
                            <label for="dirMpio-form1-q" class="form-control-label mbr-fonts-style display-7">Municipio</label>
                            <input type="text" name="dirMpio" data-form-field="dirMpio" class="form-control display-7" id="dirMpio-form1-q">
                        </div>
                        <div class="col-md-2  form-group" data-for="dirCp">
                            <label for="dirCp-form1-q" class="form-control-label mbr-fonts-style display-7">Código postal</label>
                            <input type="text" name="dirCp" data-form-field="dirCp" class="form-control display-7" id="dirCp-form1-q">
                        </div>                                           
                        <div class="col-md-3  form-group" data-for="dirEdo">
                            <label for="dirEdo-form1-q" class="form-control-label mbr-fonts-style display-7">Estado</label>
                            <input type="text" name="dirEdo" data-form-field="dirEdo" class="form-control display-7" id="dirEdo-form1-q">
                        </div> 
                        <div class="col-md-3  form-group" data-for="dirPais">
                            <label for="dirPais-form1-q" class="form-control-label mbr-fonts-style display-7">País</label>
                            <input type="text" name="dirPais" data-form-field="dirPais" class="form-control display-7" id="dirPais-form1-q">
                        </div> 

                        <div class="col-md-2  form-group" data-for="asegurado">
                            <label for="asegurado-form1-q" class="form-control-label mbr-fonts-style display-7">Asegurado </label>
                            <input type="checkbox" name="asegurado" data-form-field="asegurado" class="form-control display-7" id="asegurado-form1-q" required="required">
                        </div> 
                        <div class="col-md-2  form-group" data-for="seguroP">
                            <label for="seguroP-form1-q" class="form-control-label mbr-fonts-style display-7">Número de poliza</label>
                            <input type="text" name="seguroP" data-form-field="seguroP" class="form-control display-7" id="seguroP-form1-q">
                        </div>                                             

                        <div class="col-md-3  form-group" data-for="tiempoReg">
                            <label for="tiempoReg-form1-q" class="form-control-label mbr-fonts-style display-7">Fecha y hora de ingreso</label>
                            <input type="text" name="tiempoReg" data-form-field="tiempoReg" class="form-control display-7" id="tiempoReg-form1-q" value="<?php $fecha=new DateTime("now",new DateTimeZone('America/Mexico_city')); echo $fecha->format('d/m/Y, H:i:s'); ?>">
                        </div>
                        <div class="col-md-2  form-group" data-for="noCama">
                            <label for="noCama-form1-q" class="form-control-label mbr-fonts-style display-7">Núm. cama</label>
                            <input type="text" name="noCama" data-form-field="noCama" class="form-control display-7" id="noCama-form1-q">
                        </div>

                        <div class="col-md-3  form-group" data-for="noExpediente">
                            <label for="noExpediente-form1-q" class="form-control-label mbr-fonts-style display-7">Número de expediente</label>
                            <input type="text" name="noExpediente" data-form-field="noExpediente" class="form-control display-7" id="noExpediente-form1-q">
                        </div>  
                        <div class="col-md-3  form-group" data-for="tipoIden">
                            <label for="tipoIden-form1-q" class="form-control-label mbr-fonts-style display-7">Tipo de identificación</label>
                            <select class="form-control" name="tipoIden" id="tipoIden" > 
                                <option value="INE" selected>Credencial para votar</option>
                                <option value="PAS">Pasaporte vigente</option>
                                <option value="LIC" >Licencia de conducir</option>
                                <option value="CAR">Cartilla liberada</option>
                            </select>
                        </div>

                        <div class="col-md-2  form-group" data-for="folioId">
                            <label for="folioId-form1-q" class="form-control-label mbr-fonts-style display-7">Folio</label>
                            <input type="text" name="folioId" data-form-field="folioId" class="form-control display-7" id="folioId-form1-q" value="<?php if(isset($_POST['btnRegistra'])){echo $_POST['folioId'];}?>">
                        </div>                  
 
                         <div class="col-md-4  form-group" data-for="personaId">
                            <label for="personaId-form1-q" class="form-control-label mbr-fonts-style display-7">Datos del informante</label>
                            <input type="text" name="personaId" data-form-field="personaId" class="form-control display-7" id="personaId-form1-q">
                        </div> 
                        <div class="col-md-3  form-group" data-for="parentescoId">
                            <label for="parentescoId-form1-q" class="form-control-label mbr-fonts-style display-7">Parentesco</label>
                            <input type="text" name="parentescoId" data-form-field="parentescoId" class="form-control display-7" id="parentescoId-form1-q">
                        </div>     

             
                        <div class="col-md-4  form-group" data-for="medTratante">
                            <label for="medTratante-form1-q" class="form-control-label mbr-fonts-style display-7">Médico tratante</label>
                            <input type="text" name="medTratante" data-form-field="medTratante" class="form-control display-7" id="medTratante-form1-q">
                        </div>

                        <div data-for="obs" class="col-md-12 form-group">
                            <label for="obs-form1-q" class="form-control-label mbr-fonts-style display-7">Observaciones heredo familiares</label>
                            <textarea name="obs" data-form-field="obs" class="form-control display-7" id="obs-form1-q"></textarea>
                        </div>
                        <div class="col-md-12  form-group" data-for="persRegistra">
                            <label for="persRegistra-form1-q" class="form-control-label mbr-fonts-style display-7">Personal que registra</label>
                            <input type="text" name="persRegistra" data-form-field="persRegistra" required="required" class="form-control display-7" id="persRegistra-form1-q" readonly>
                        </div>
                        <div class="col-md-6 input-group-btn align-center"><button type="submit" name="btnRegistra" class="btn btn-primary btn-form display-4">Registra</button></div>
                        <div class="col-md-6 input-group-btn align-center"><a href="indexPaciente.php" class="btn btn-secondary ">Regresar</a></div>
                                      
                    </div>
                </form><!-- Formbuilder Form 
            </div>-->
        </div>
    </div>
<?php
} else {

    //Recuperamos los valores
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

$idPx="RFV190921060002"; //generarID();//debo generar la ID
// creamos clausula sql para insertar en dos partes, primero encabezado, luego valores

$datos="'$idPx','$nombre','$apellido1','$apellido2','$fechNac','$sexoPx','$rfcP','$dirCalle','$dirColonia','$dirMpio','$dirCp','$dirEdo','$dirPais','$tipoIden','$folioId','$obs'";
include("funciones.php");
$registrado=registraPaciente($datos); 
    if($registrado=1){
?>
       <div class="container">
        <div class="row justify-content-center">
            <!--div class="media-container-column col-lg-8" data-form-type="formoid"><Formbuilder Form -->
                <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Paciente Form"><input type="hidden" name="email" data-form-email="true" value="olF+6sVRSJpPWBrfaDx7P46eaZ2Qd/kpqKYi/SoEpp5m1aAVQV/P4SoPCSYT4YlBIjHD+kmHmm1jukD5METM+X4uQSl9z7HqAiWGyYfIlKf5GvKuTedjp3uZWZrcVSSl">
                    
                     <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row row-sm-offset">
                       
                        <div class="col-md-4  form-group" data-for="nombre">
                            <label for="nombre-form1-q" class="form-control-label mbr-fonts-style display-7">Nombre</label>
                            <input type="text" name="nombre" data-form-field="nombre" required="required" class="form-control display-7" id="nombre-form1-q" value="<?php echo $nombre; ?>">
                        </div>
                        <div class="col-md-4  form-group" data-for="apellido1">
                            <label for="apellido1-form1-q" class="form-control-label mbr-fonts-style display-7">Apellido 1</label>
                            <input type="text" name="apellido1" data-form-field="apellido1" required="required" class="form-control display-7" id="apellido1-form1-q" value="<?php echo $apellido1; ?>">
                        </div>
                        <div class="col-md-4  form-group" data-for="apellido2">
                            <label for="apellido2-form1-q" class="form-control-label mbr-fonts-style display-7">Apellido 2</label>
                            <input type="text" name="apellido2" data-form-field="apellido2" required="required" class="form-control display-7" id="apellido2-form1-q" value="<?php echo $apellido2; ?>">
                        </div>
            
                        <div class="col-md-4  form-group" data-for="fechNac">
                            <label for="fechNac-form1-q" class="form-control-label mbr-fonts-style display-7">Fecha de Nacimiento</label>
                            <input type="date" name="fechNac" data-form-field="fechNac" required="required" class="form-control display-7" id="fechNac-form1-q" value="<?php echo $fechNac; ?>">
                        </div>
                        <div class="col-md-4  form-group" data-for="sexoP">
                            <label for="sexoP-form1-q" class="form-control-label mbr-fonts-style display-7">Sexo</label>
                            <select class="form-control" name="sexoP" id="sexoP" > 
                                <option value="1" selected>Mujer</option>
                                <option value="2">Hombre</option>
                            </select>
                        </div> 
                        <div class="col-md-4  form-group" data-for="rfcP">
                            <label for="rfcP-form1-q" class="form-control-label mbr-fonts-style display-7">RFC</label>
                            <input type="text" name="rfcP" data-form-field="rfcP" class="form-control display-7" id="rfcP-form1-q" value="<?php echo'Hola'; ?>">
                        </div>                      
                        <div class="col-md-4  form-group" data-for="tipoSangre">
                            <label for="tipoSangre-form1-q" class="form-control-label mbr-fonts-style display-7">Tipo de sangre</label>
                            <select class="form-control" name="tipoSangre" id="tipoSangre" > 
                                <option value="O+" selected>O+</option>
                                <option value="O-">O-</option>
                                <option value="A+" >A+</option>
                                <option value="A-">A-</option>
                                <option value="B+" >B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+" >AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                        <div class="col-md-4  form-group" data-for="tipoIden">
                            <label for="tipoIden-form1-q" class="form-control-label mbr-fonts-style display-7">Tipo de identificación</label>
                            <select class="form-control" name="tipoIden" id="tipoIden" > 
                                <option value="INE" selected>Credencial para votar</option>
                                <option value="PAS">Pasaporte vigente</option>
                                <option value="LIC" >Licencia de conducir</option>
                                <option value="CAR">Cartilla liberada</option>
                            </select>
                        </div>
                        <div class="col-md-4  form-group" data-for="folioId">
                            <label for="folioId-form1-q" class="form-control-label mbr-fonts-style display-7">Folio</label>
                            <input type="text" name="folioId" data-form-field="folioId" class="form-control display-7" id="folioId-form1-q" value="<?php if(isset($_POST['btnRegistra'])){echo $_POST['folioId'];}?>">
                        </div>
                    
                        <div class="col-md-8  form-group" data-for="dirCalle">
                            <label for="dirCalle-form1-q" class="form-control-label mbr-fonts-style display-7">Dirección: Calle y número</label>
                            <input type="text" name="dirCalle" data-form-field="dirCalle" class="form-control display-7" id="dirCalle-form1-q">
                        </div> 
                        <div class="col-md-4  form-group" data-for="dirColonia">
                            <label for="dirColonia-form1-q" class="form-control-label mbr-fonts-style display-7">Colonia</label>
                            <input type="text" name="dirColonia" data-form-field="dirColonia" class="form-control display-7" id="dirColonia-form1-q">
                        </div>
                        <div class="col-md-4  form-group" data-for="dirMpio">
                            <label for="dirMpio-form1-q" class="form-control-label mbr-fonts-style display-7">Municipio</label>
                            <input type="text" name="dirMpio" data-form-field="dirMpio" class="form-control display-7" id="dirMpio-form1-q">
                        </div>
                        <div class="col-md-4  form-group" data-for="dirCp">
                            <label for="dirCp-form1-q" class="form-control-label mbr-fonts-style display-7">Código postal</label>
                            <input type="text" name="dirCp" data-form-field="dirCp" class="form-control display-7" id="dirCp-form1-q">
                        </div>                                           
                        <div class="col-md-4  form-group" data-for="dirEdo">
                            <label for="dirEdo-form1-q" class="form-control-label mbr-fonts-style display-7">Estado</label>
                            <input type="text" name="dirEdo" data-form-field="dirEdo" class="form-control display-7" id="dirEdo-form1-q">
                        </div> 
                        <div class="col-md-2  form-group" data-for="asegurado">
                            <label for="asegurado-form1-q" class="form-control-label mbr-fonts-style display-7">Asegurado </label>
                            <input type="checkbox" name="asegurado" data-form-field="asegurado" class="form-control display-7" id="asegurado-form1-q">
                        </div> 
                        <div class="col-md-4  form-group" data-for="seguroP">
                            <label for="seguroP-form1-q" class="form-control-label mbr-fonts-style display-7">Número de poliza</label>
                            <input type="text" name="seguroP" data-form-field="seguroP" class="form-control display-7" id="seguroP-form1-q">
                        </div>                                             
                        <div class="col-md-4  form-group" data-for="tiempoReg">
                            <label for="tiempoReg-form1-q" class="form-control-label mbr-fonts-style display-7">Fecha y hora de ingreso</label>
                            <input type="datetime-local" name="tiempoReg" data-form-field="tiempoReg" class="form-control display-7" id="tiempoReg-form1-q">
                        </div>
                        <div class="col-md-2  form-group" data-for="noCama">
                            <label for="noCama-form1-q" class="form-control-label mbr-fonts-style display-7">Núm. cama</label>
                            <input type="text" name="noCama" data-form-field="noCama" class="form-control display-7" id="noCama-form1-q">
                        </div>                 
                        <div class="col-md-4  form-group" data-for="noExpediente">
                            <label for="noExpediente-form1-q" class="form-control-label mbr-fonts-style display-7">Número de expediente</label>
                            <input type="text" name="noExpediente" data-form-field="noExpediente" class="form-control display-7" id="noExpediente-form1-q">
                        </div>    
                        <div class="col-md-4  form-group" data-for="medTratante">
                            <label for="medTratante-form1-q" class="form-control-label mbr-fonts-style display-7">Médico tratante</label>
                            <input type="text" name="medTratante" data-form-field="medTratante" class="form-control display-7" id="medTratante-form1-q">
                        </div>  
                         <div class="col-md-4  form-group" data-for="nacional">
                            <label for="nacional-form1-q" class="form-control-label mbr-fonts-style display-7">Nacionalidad</label>
                            <input type="text" name="nacional" data-form-field="nacional" class="form-control display-7" id="nacional-form1-q">
                        </div>
                        <div class="col-md-4  form-group" data-for="gpoEtn">
                            <label for="gpoEtn-form1-q" class="form-control-label mbr-fonts-style display-7">Grupo étnico</label>
                            <input type="text" name="gpoEtn" data-form-field="gpoEtn" class="form-control display-7" id="gpoEtn-form1-q">
                        </div>  
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-q" class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email" data-form-field="Email" class="form-control display-7" id="email-form1-q">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-q" class="form-control-label mbr-fonts-style display-7">Teléfono</label>
                            <input type="phone" name="phone" data-form-field="Phone" class="form-control display-7" id="phone-form1-q">
                        </div>
                        <div class="col-md-2  form-group" data-for="alergia">
                            <label for="alergia-form1-q" class="form-control-label mbr-fonts-style display-7">Alergia </label>
                            <input type="checkbox" name="alergia" data-form-field="alergia" class="form-control display-7" id="alergia-form1-q">
                        </div> 
                        <div class="col-md-4  form-group" data-for="cualAlergia">
                            <label for="cualAlergia-form1-q" class="form-control-label mbr-fonts-style display-7">Alergia a</label>
                            <input type="text" name="cualAlergia" data-form-field="cualAlergia" class="form-control display-7" id="cualAlergia-form1-q">
                        </div>
                        <div class="col-md-2  form-group" data-for="alcoholP">
                            <label for="alcoholP-form1-q" class="form-control-label mbr-fonts-style display-7">Alcoholismo </label>
                            <input type="checkbox" name="alcoholP" data-form-field="alcoholP" class="form-control display-7" id="alcoholP-form1-q">
                        </div>                        
                        <div class="col-md-2  form-group" data-for="tabaqP">
                            <label for="email-form1-q" class="form-control-label mbr-fonts-style display-7">Tabaquismo</label>
                            <input type="checkbox" name="tabaqP" data-form-field="tabaqP" class="form-control display-7" id="tabaqP-form1-q">
                        </div>
                        <div  class="col-md-2  form-group" data-for="toxiP">
                            <label for="toxiP-form1-q" class="form-control-label mbr-fonts-style display-7">Toxicomanía</label>
                            <input type="checkbox" name="toxiP" data-form-field="toxiP" class="form-control display-7" id="toxiP-form1-q">
                        </div>   
                         <div class="col-md-8  form-group" data-for="personaId">
                            <label for="personaId-form1-q" class="form-control-label mbr-fonts-style display-7">Datos del informante</label>
                            <input type="text" name="personaId" data-form-field="personaId" class="form-control display-7" id="personaId-form1-q">
                        </div> 
                        <div class="col-md-4  form-group" data-for="parentescoId">
                            <label for="parentescoId-form1-q" class="form-control-label mbr-fonts-style display-7">Parentesco</label>
                            <input type="text" name="parentescoId" data-form-field="parentescoId" class="form-control display-7" id="parentescoId-form1-q">
                        </div>                                             
                        <div data-for="obs" class="col-md-12 form-group">
                            <label for="obs-form1-q" class="form-control-label mbr-fonts-style display-7">Observaciones heredo familiares</label>
                            <textarea name="obs" data-form-field="obs" class="form-control display-7" id="obs-form1-q"></textarea>
                        </div>
                        <div class="col-md-12  form-group" data-for="persRegistra">
                            <label for="persRegistra-form1-q" class="form-control-label mbr-fonts-style display-7">Personal que registra</label>
                            <input type="text" name="persRegistra" data-form-field="persRegistra" required="required" class="form-control display-7" id="persRegistra-form1-q" readonly>
                        </div>
                        <div class="col-md-6 input-group-btn align-center"><button type="submit" name="btnRegistra" class="btn btn-primary btn-form display-4">Registra</button></div>
                        <div class="col-md-6 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4">Regresa la menú principal</button></div>
                    </div>
                </form><!-- Formbuilder Form 
            </div>-->
        </div>
    </div>
<?php  
    } else { echo "error";}
}

?>

</section>

<?php
include("ayuda.php");
include("piePag.php")
?>   

<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>  


  
</body>
</html>
