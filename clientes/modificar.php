<?php
session_start(); 
if (isset($_SESSION['usuario'])){
    require 'conexion.php';
    $id=$_GET['id'];
    $sql="SELECT * FROM tbl_cliente WHERE cliente_id='$id'";
    $resultado=$mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
  
<?php 
    $titulo='Modificar registro'; //titulo de la pagina
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
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"></div>
                    </div>
                    
                    <div class="dragArea row row-sm-offset">

                    <input type="hidden" id="id" name="id" value="<?php   echo $row['cliente_id'];?>"/>                      
                    
                    <div class="col-md-6  form-group" data-for="nombreCliente">
                        <label for="nombreCliente-form1-q" class="form-control-label mbr-fonts-style display-4">Nombre del cliente</label>
                        <input type="text" name="nombreCliente" data-form-field="nombreCliente" required="required" class="form-control display-4"  value= "<?php   echo $row['cliente_razon_social'];?>" id="nombreCliente-form1-q">
                    </div>                      

                    <div class="col-md-2  form-group" data-for="rfc">
                        <label for="rfc-form1-q" class="form-control-label mbr-fonts-style display-4">RFC</label>
                        <input type="text" name="rfc" data-form-field="rfc" required="required" class="form-control display-4" value= "<?php   echo $row['cliente_rfc'];?>"  id="rfc-form1-q">
                    </div>
                       
                    <div class="col-md-2  form-group" data-for="direccionMail">
                        <label for="direccionMail-form1-q" class="form-control-label mbr-fonts-style display-4">Correo electrónico</label>
                        <input type="text" name="direccionMail" data-form-field="direccionMail" required="required" class="form-control display-4" value= "<?php   echo $row['cliente_email'];?>"  id="direccionMail-form1-q">
                    </div>                       
                     
                    <div class="col-md-2  form-group" data-for="direccionFiscal">
                        <label for="direccionFiscal-form1-q" class="form-control-label mbr-fonts-style display-4">Dirección fiscal</label>
                        <input type="text" name="direccionFiscal" data-form-field="direccionFiscal" required="required" class="form-control display-4" value= "<?php   echo $row['cliente_direccion'];?>"  id="direccionFiscal-form1-q">
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