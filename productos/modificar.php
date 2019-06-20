<?php
session_start(); 
if (isset($_SESSION['usuario'])){

require 'conexion.php';
$id=$_GET['id'];

$sql="SELECT * FROM tbl_producto WHERE producto_id='$id'";
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

<?php 
include("encabezado.php");
?>
  
<section class="mbr-section form1 cid-rjOggyEllZ" id="form1-q">
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
                        
                        <input type="hidden" id="id" name="id" value="<?php   echo $row['producto_id'];?>"/>

                       

                    <div class="col-md-6  form-group" data-for="nomProducto">
                            <label for="nomProducto-form1-q" class="form-control-label mbr-fonts-style display-4">Nombre del prodcuto</label>
                            <input type="text" name="nomProducto" data-form-field="nomProducto" required="required" class="form-control display-4"  value= "<?php   echo $row['producto_descripcion'];?>" id="nomProducto-form1-q">
                        </div>

                          
                        <div class="col-md-3  form-group" data-for="unidadProducto">
                            <label for="unidadProducto-form1-q" class="form-control-label mbr-fonts-style display-4">Precio Unitario</label>
                            <input type="text" name="unidadProducto" data-form-field="unidadProducto" required="required" class="form-control display-4" value= "<?php   echo $row['producto_unidad'];?>"  id="unidadProducto-form1-q">
                        </div>

                        <div class="col-md-3  form-group" data-for="precioUnitario">
                            <label for="precioUnitario-form1-q" class="form-control-label mbr-fonts-style display-4">Precio Unitario</label>
                            <input type="text" name="precioUnitario" data-form-field="precioUnitario" required="required" class="form-control display-4" value= "<?php   echo $row['producto_precio'];?>"  id="precioUnitario-form1-q">
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