<!DOCTYPE html>
<html>

<?php
$titulo='Menú pacientes';
include("head.php");
?>


<body>
<?php 
include("encabezado.php");
?>
<!-- <script>
$( document ).ready(function() {
$('input.typeahead').typehead({
source: function (query, process) {
return $.get('search_data.php', { query: query }, function (data) {
data = $.parseJSON(data);
return process(data);
});
},
showHintOnFocus:'all'
});
});
</script>  -->

<section class="mbr-section form1 cid-rjOggyEllZ" id="form1-q">

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Menú pacientes</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                  Búsquedas, altas, bajas, consultas
                </h3>
            </div>
        </div>
    </div>

        <div class="container pt-4 mt-2">

            <div class="media-container-row">

                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont pr-2 mbri-search"></span>
                        </div>
                        <div class="card-text">
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Buscar
                            </h4>

                            <p class="mbr-content-text mbr-fonts-style display-7">
                                  <label>Busque por nombre</label>
                                  <input class="typeahead form-control" type="text" placeholder="Nombre....">
                            </p>
                         </div>
                    </div>
                </div>
                


                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                         <a href="registroPaciente.php">
                                <span class="mbr-iconfont pr-2 mbri-edit2"></span>
                                </a>   
                        </div>

                        <div class="card-text">
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Registrar
                            </h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                                Cree un nuevo registro de paciente.
                            </p>
                        </div>
                    </div>
                </div>



                <div class="card p-3 align-center col-12 col-md-6 col-lg-3">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont pr-2 mbri-print"></span>
                        </div>

                        <div class="card-texts">
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Imprimir
                            </h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">
                                   Imprima notas
                            </p>
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
  $('input.typeahead').typeahead({
  source: function (query, process) {
    return $.get('search_data.php', { query: query }, function (data) {
      data = $.parseJSON(data);
    return process(data);
    });
  },
  showHintOnFocus:'all'
  });
});
</script>
  

</body>
</html>