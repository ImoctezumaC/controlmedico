
<!DOCTYPE html >
<html >
<?php 
    $titulo='Home';
    include("head.php");
?>
<body>

<?php 
    include("encabezadoGral.php");
?>
<section class="header15 cid-rjNEorkIvs mbr-parallax-background" id="header15-d">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Centro M&eacute;dico<br></h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Ingrese con su usario de correo electr&oacute;nico y su contrase&ntilde;a.
                </p>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="form-container">
                    
                        <!-- <div class="media-container-column" data-form-type="formoid">&ntilde;Formbuilder Form -->
                        <form action="menu.php" method="POST" class="mbr-form form-with-styler" data-form-title="Ingresa Form">
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">¡Gracias! ¡Procesando sus datos!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">¡Error! Usuario o contraseña incorrectos</div>
                            </div>
                            <div class="dragArea row">
                                
                                <div class="col-md-12 form-group " data-for="correoElec">
                                    <input type="email" name="correoElec" placeholder="Correo electr&oacute;nico" data-form-field="correoElec" required="required" class="form-control px-3 display-7" id="correoElec-header15-d">
                                </div>
                                <div data-for="contrasenia" class="col-md-12 form-group">
                                    <input type="password" name="contrasenia" placeholder="Contrase&ntilde;a" data-form-field="contrasenia" required="required" class="form-control px-3 display-7" id="contrasenia-header15-d">
                                </div>
                                
                                <div class="col-md-12 input-group-btn">
                                <button type="submit" id="submit" class="btn btn-secondary btn-form display-4"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>INGRESA</button>
                                </div>
                            </div>
                        </form><!-- Formbuilder Form  </div>-->
                   
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<?php
    include("piePag.php");
?>


</body>
</html>
    
