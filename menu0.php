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
<section class="mbr-section form1 cid-rjOggyEllZ" id="form1-q">
<?php
  include("encabezado.php");
?>
 
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