<?php
session_start(); 
if (isset($_SESSION['usuario'])){
  ?>
<!DOCTYPE html>
<html >

  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
 
  <?php 
  $titulo='Productos'; //titulo de la pagina
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
                    Productos</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>

  

    <div class="container">
        <div class="row justify-content-center">
            <!--div class="media-container-column col-lg-8" data-form-type="formoid">
                <!-- Formbuilder Form -->
                <form method="POST" action ="guardar.php" class="mbr-form form-with-styler" data-form-title="Mobirise Form">

                    <div class="dragArea row row-sm-offset">

              <div class="dragArea row row-sm-offset">
              <div class="container">
               <div class="row justify-content-center">
      
                        <div class="col-md-6  form-group" data-for="nomProducto">
                            <label for="nomProducto-form1-q" class="form-control-label mbr-fonts-style display-4">Nombre del Producto </label>
                            <input type="text" name="nomProducto" data-form-field="nomProducto" class="form-control display-4" id="nomProducto-form1-q">
                        </div> 
                        <div class="col-md-3  form-group" data-for="unidadProducto">
                            <label for="unidadProducto-form1-q" class="form-control-label mbr-fonts-style display-4">Unidad de Venta</label>
                            <input type="text" name="unidadProducto" data-form-field="unidadProducto" class="form-control display-4" id="unidadProducto-form1-q">
                        </div>
                        <div class="col-md-3  form-group" data-for="precioUnitario">
                            <label for="precioUnitario-form1-q" class="form-control-label mbr-fonts-style display-4">Precio Unitario</label>
                            <input type="text" name="precioUnitario" data-form-field="precioUnitario" class="form-control display-4" id="precioUnitario-form1-q">
                        </div>
 
                         <div class="col-md-6 input-group-btn align-center"><button type="submit" class="btn btn-primary ">Guardar</button></div>                       
                         <div class="col-md-6 input-group-btn align-center"><a href="index.php" class="btn  btn-secondary">Regresar</a></div>

                    </div>
                </form><!-- Formbuilder Form -->
            </div-->
        </div>
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