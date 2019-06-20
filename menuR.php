<?php
    session_start(); 
    
    $correoUsuario=$_POST['correoElec'];
    $contraUsuario=$_POST['contrasenia'];

    include("funciones.php");
    $valida=validaUser($correoUsuario,$contraUsuario);
    if($valida) {
    $_SESSION['usuario']=$correoUsuario;//Falta definir dato a mostrar
?>

<!DOCTYPE html>
<html>
<?php 
$titulo='Menú principal'.$valida;  
include("head.php");
?>
<body>
<?php 
include("encabezado.php");
?>
<section class="counters2 counters cid-rjLokt3aT0" id="counters2-3">

    
    <div class="container pt-4 mt-2">
        <div class="media-container-row">
            <div class="media-block" style="width: 49%;">
                <h2 class="mbr-section-title pb-3 align-left mbr-fonts-style display-2">Menú</h2>
                <h3 class="mbr-section-subtitle pb-5 align-left mbr-fonts-style display-5">
                    Opciones para hacer el trabajo más fácil y en armonía ...</h3>
                <div class="mbr-figure">
                    <img src="assets/images/mbr-1024x613.jpg" alt="" title="">
                </div>
            </div>

            <div class="cards-block">
                <div class="cards-container">
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                               
                                <span class="mbr-iconfont pr-2 mbri-calendar"></span>
                               
                               
                                <h3 class="mbr-fonts-style display-2">&nbsp;</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Agenda de citas</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Registra oportunamente las citas, manténte en contacto con los Pacientes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                
                                <a href="pacientes/submenuRegistro.php">
                                <span class="mbr-iconfont pr-2 mbri-contact-form"></span>
                                </a>
                                
                                <h3 class="mbr-fonts-style display-2">&nbsp;</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Registro de Pacientes</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Actualiza los datos del Paciente: altas, bajas, buscar, eliminar y modificar.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                               

                               <a href="notasMed/submenuNotas.php">
                               <span class="mbr-iconfont pr-2 mbri-database"></span>
                               </a>
                                
                                <h3 class="mbr-fonts-style display-2">&nbsp;</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Notas médicas</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                        Agrega y consulta los registros médicos. 
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                                <a href="index.php">
                                <span class="mbr-iconfont pr-2 mbri-logout"></span>
                                </a>
                                <h3 class="mbr-fonts-style display-2">&nbsp;</h3>
                            </div>
                            <div class="card-texts">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Salir</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                        Fin de sesión.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("ayuda.php");
include("piePag.php");
?>   


  
</body>
</html>
<?php
} else {        
        header('Location: index.php');
} 
    ?>