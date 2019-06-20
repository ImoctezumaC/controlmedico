<?php
session_start(); 
if (isset($_SESSION['usuario'])){
  ?>
<!DOCTYPE html>
<html >

  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
 
  <?php 
  $titulo='Clientes'; //titulo de la pagina
  include("head.php");
?>  
  
<body>

<?php 
include("encabezado.php");
?>
<section class="mbr-section form1 cid-rjOggyEllZ" id="form1-q">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-12">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Clientes</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>

  

    <div class="container">

            <!--div class="media-container-column col-lg-8" data-form-type="formoid">
                <!-- Formbuilder Form -->
             <form method="POST" action ="guardar.php" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                  <div class="row justify-content-center">
                        <div class="col-md-6  form-group" data-for="nombreCliente">
                            <label for="nombreCliente-form1-q" class="form-control-label mbr-fonts-style display-4">Nombre del Cliente</label>
                            <input type="text" name="nombreCliente" data-form-field="nombreCliente" class="form-control display-4" id="nombreCliente-form1-q">
                        </div> 
                        <div class="col-md-2  form-group" data-for="rfc">
                            <label for="rfc-form1-q" class="form-control-label mbr-fonts-style display-4">RFC</label>
                            <input type="text" name="rfc" data-form-field="rfc" class="form-control display-4" id="rfc-form1-q">
                        </div>
                        <div class="col-md-2  form-group" data-for="direccionMail">
                            <label for="direccionMail-form1-q" class="form-control-label mbr-fonts-style display-4">Correo electrónico</label>
                            <input type="text" name="direccionMail" data-form-field="direccionMail" class="form-control display-4" id="direccionMail-form1-q">
                        </div>
                        <div class="col-md-2  form-group" data-for="direccionFiscal">
                            <label for="direccionFiscal-form1-q" class="form-control-label mbr-fonts-style display-4">Dirección Fiscal</label>
                            <input type="text" name="direccionFiscal" data-form-field="direccionFiscal" class="form-control display-4" id="direccionFiscal-form1-q">
                        </div>
 
                         <div class="col-md-6 input-group-btn align-center"><button type="submit" class="btn btn-primary ">Guardar</button></div>                       
                         <div class="col-md-6 input-group-btn align-center"><a href="index.php" class="btn  btn-secondary">Regresar</a></div>
                  </div>
              </form><!-- Formbuilder Form -->
    </div>
</section>
<?php
include("ayuda.php");
include("piePag.php")
?> 
</body>
</html>
<?php 
} else {        
        header('Location: ../index.php');
} 
    ?>