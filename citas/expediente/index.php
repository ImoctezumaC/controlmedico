
<?php


require 'conexion.php';


?>
<!DOCTYPE html>
<html >
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
 
 
  <?php 
  $titulo='Expediente'; //titulo de la pagina
  include("head.php");

?>  
<head>

    
</head>

  
<body>

  
<!--<section class="mbr-section form1 cid-rjOggyEllZ" id="form1-q">-->
     <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-12">
                <h2 class="mbr-section-title align-center pb-1 mbr-fonts-style display-5">
                    Expediente clínico </h2>
                
            </div>
        </div>
    </div>
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!-- Formbuilder Form -->
                <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="olF+6sVRSJpPWBrfaDx7P46eaZ2Qd/kpqKYi/SoEpp5m1aAVQV/P4SoPCSYT4YlBIjHD+kmHmm1jukD5METM+X4uQSl9z7HqAiWGyYfIlKf5GvKuTedjp3uZWZrcVSSl">
                   <!-- 
                     <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Grx por requisitar el formulario</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                -->
                    <div class="row">
                 <!--   <div class="col-md-4 input-group-btn align-center">
                        <input class="form-control" id="myInput" type="text" placeholder="Buscar por algún campo..">
                    </div> -->                       
                        <a href="paciente.php"> Click aquí para ver el registro del paciente</a>
                       
                   
                     <div class="col-md-6 input-group-btn align-center">
                        <a href="../submenuNotas.php" class= "btn btn-secondary" >regresar a menú principal </a>
                    </div>
                    </div>

                        <br>
                        <div class="table-resposive-sm">
                            <table class="display" id="myTabla">
                                <thead>
                                    <tr>   
                                        <th>No.Nota</th>   
                                        <th>Fecha/Reg</th>
                                        <th>Clave/paciente</th>
                                        <th>Núm Cama</th>
                                        <th>Medicamentos/pacient</th>
                                        <th>Presentación</th>
                                        <th>Subjetivo</th>
                                        <th>Objetivo</th>   
                                        <th>Signos Vitales</th>
                                        <th>Analísis</th>
                                        <th>Diagnóstico</th>
                                        
                                        <th>Plan de Manejo</th>
                                        <th>tipoCIE10</th>
                                        <th>Pronóstico</th>
                                        <th>clave/Esp</th>
                                                                                

                                       
                                        
                                        <th>Ver</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                

                                </tbody>
                            </table>
                        </div>

                       


                    </div>
                </form><!-- Formbuilder Form -->
            </div>
        </div>
    </div>
<!-- modales-->
<div class ="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Eliminar registro</h4>
        </div>
        <div class="modal-body"> ¿Desea eliminar el registro?</div>
        
        <div class="modal-footer">
        <button type="button" class ="btn btn-default" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger btn-ok">Borrar</a>
        </div>
    </div>
</div>



<!--</section>-->

  

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
    $('#confirm-delete').on('show.bs.modal',function(e){
        $(this).find('.btn-ok').attr('href',$(e.relatedTarget).data('href'));
        $('.degug-url').html('Delete URL: <strong>'+$(this).find('.btn-ok').attr('href')+'</strong>');
    });
</script> 
     <!-- ojo

para paginacion y ordenamiento
-->                   

  <script>
   $(document).ready( function () {
    $('#myTabla').DataTable(
        {
            "order":[[1,"asc"]],
            "language":{
            "lengthMenu":"mostrar _MENU_ registros por página",
            "info": "Mostrando página _PAGE_ de__PAGES_",
            "infoEmpty":"No hay registros disponibles",
            "infoFiltered":"(filtrada de _MAX_ registros)",
            "loadingRecords":"Cargando...",
            "processing":"Procesando...",
            "search":"Buscar:",

            "zeroRecords":"No se encontraron registros coincidentes",
            "paginate":{
                "next":"Siguiente",
                "previous":"Anterior"
                }
            },
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "server_process.php"

        });
    } );
  </script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
</body>
</html>