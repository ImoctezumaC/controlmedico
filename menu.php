<?php
    session_start(); 
    if(isset($_POST['contrasenia'])){
        $correoUsuario=$_POST['correoElec'];
        $contraUsuario=$_POST['contrasenia'];

        include("funciones.php");
        $valida=validaUser($correoUsuario,$contraUsuario);
        if($valida) {
            $_SESSION['usuario']=$correoUsuario;//Falta definir dato a mostrar
        }
    }
    if(isset($_SESSION['usuario'])){

?>

<!DOCTYPE html>
<html>
<?php 
$titulo='Menú principal';  
include("head.php");

?>
<body>
<?php
?>
<?php
  include("encabezadoGral.php");
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
                               <a href="citas/index.php">
                                <span class="mbr-iconfont pr-2 mbri-calendar"></span>
                               </a>
                               
                                <h3 class="mbr-fonts-style display-2">&nbsp;</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Agenda de citas</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Registra oportunamente las citas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                              
                                <a href="ventas/">
                                <span class="mbr-iconfont pr-2 mbri-cash"></span>
                                </a>
                                
                                <h3 class="mbr-fonts-style display-2">&nbsp;</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                    Registro de ventas</h4>
                                <p class="mbr-content-text mbr-fonts-style display-7">
                                    Venta de productos.
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
                                    Actualiza los datos del Paciente.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card px-3 align-left col-12 col-md-6">
                        <div class="panel-item p-3">
                            <div class="card-img pb-3">
                               

                               <a href="notasMedicas/submenuNotas.php">
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
<script>
$(document).ready(function(){
  $('input.typeahead1').typeahead({
  source: function (query, process) {
    return $.get('product_data.php', { query: query }, function (data) {
      data = $.parseJSON(data);
    return process(data);
    });
  },
  showHintOnFocus:'all'
  });
});
</script>
<script> 
function sumar (valor) {
    var total = 0.00;  
    valor = parseFloat(valor); // Convertir el valor a un entero (nÃºmero).
    total = document.getElementById('spTotal').innerHTML;
    // AquÃ­ valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0.00 : total;
    /* Esta es la suma. */
    total = (parseFloat(total) + parseFloat(valor));
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = total;
}
function sumar (valor) {
    var total = 0.00;  
    valor = parseFloat(valor); // Convertir el valor a un entero (nÃºmero).
    total = document.getElementById('spTotal').innerHTML;
    // AquÃ­ valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0.00 : total;
    /* Esta es la suma. */
    total = (parseFloat(total) + parseFloat(valor));
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = total;
}
</script> 

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 25; //Input fields increment limitation
    var addButton1 = $('.add_button1'); //Add button selector
    var wrapper1 = $('.field_wrapper1'); //nput field wrapper
    var fieldHTML1 = '<tr><td data-th="Producto">';
    fieldHTML1 += '<div class="row">';
    fieldHTML1 += '<div class="col-sm-10">';
    fieldHTML1 += '<h4 class="nomargin">Producto</h4>';
    fieldHTML1 += '<p>Descripción del producto.</p>';
    fieldHTML1 += '</div>';
    fieldHTML1 += '</div>';
    fieldHTML1 += '</td>';
    fieldHTML1 += '<td data-th="Precio">$1.99</td>';
    fieldHTML1 += '<td data-th="Cantidad">';
    fieldHTML1 += '<input type="number" class="form-control text-center" value="1">';
    fieldHTML1 += '</td>';
    fieldHTML1 += '<td data-th="Subtotal" class="text-center">1.99</td>';
    fieldHTML1 += '<td class="actions" data-th="">';
    fieldHTML1 += '<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>';
    fieldHTML1 += '<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>';            
    fieldHTML1 += '</td>';
    fieldHTML1 += '</tr>';
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
});
</script> 

</body>
</html>
<?php 
} else {        
        header('Location: index.php');
} 
    ?>