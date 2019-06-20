<?php
    session_start(); 
    if(isset($_SESSION['usuario'])){
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
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Gestión</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!-- Formbuilder Form -->
                <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">

                    <div class="row row-sm-offset">
                       <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Grx por requisitar el formulario</div>
                       <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                       </div>
                    </div>
                    <div class="row">                       
                    <div class="col-md-6 input-group-btn align-center">
                        <a href="nuevo.php" class= "btn btn-primary">Nuevo registro</a>
                    </div>

                     <div class="col-md-6 input-group-btn align-center">
                        <a href="../ventas" class= "btn btn-secondary" >Ventas </a>
                    </div>
                    </div>

                        <br>
                        <div class="table-resposive-sm">
                            <table id="myTabla" class="display">
                                <thead>
                                    <tr>        
                                        <th>Id Cliente</th>   
                                        <th>RFC</th> 
                                        <th>Nombre Cliente</th>
                                        <th>Dirección electrónica</th>     
                                        <th>Dirección fiscal</th>                                                                          

                                        <th>Modificar</th>
                                        <th>Eliminar</th>
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



</section>

  
  <?php
include("ayuda.php");
include("piePag.php")
?>

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
            "lengthMenu":"Mostrar _MENU_ registros por página",
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
            "sAjaxSource": "client_server_process.php"

        });
    } );
  </script>
</body>
</html>
<?php 
} else {        
        header('Location: ../index.php');
} 
?>