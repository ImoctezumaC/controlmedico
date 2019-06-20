
<?php


require 'conexion.php';
$where="";
$sql="SELECT * FROM notaurgencias $where LIMIT 1000";
$resultado= $mysqli->query($sql);


?>
<!DOCTYPE html>
<html >
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
 
 
  <?php 
  $titulo='Nota urgencias'; //titulo de la pagina
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
                    Nota urgencias</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!-- Formbuilder Form -->
                <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="olF+6sVRSJpPWBrfaDx7P46eaZ2Qd/kpqKYi/SoEpp5m1aAVQV/P4SoPCSYT4YlBIjHD+kmHmm1jukD5METM+X4uQSl9z7HqAiWGyYfIlKf5GvKuTedjp3uZWZrcVSSl">
                    
                     <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Grx por requisitar el formulario</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4 input-group-btn align-center">
                        <input class="form-control" id="myInput" type="text" placeholder="Buscar por algún campo..">
                    </div>                        
                    <div class="col-md-4 input-group-btn align-center">
                        <a href="nuevo.php" class= "btn btn-primary">Nuevo registro</a>
                    </div>

                     <div class="col-md-4 input-group-btn align-center">
                        <a href="../submenuNotas.php" class= "btn btn-secondary" >SubMenú Notas </a>
                    </div>
                    </div>

                        <br>
                        <div class="table-resposive-sm">
                            <table class="display" id="myTabla">
                                <thead>
                                    <tr>   
                                        <th>id</th>   
                                        <th>Nombre</th>
                                        <th>Edad</th>
                                        <th>Sexo</th>
                                        <th>Nu. cama</th>
                                        <th>FechaReg</th>   
                                        <th>Comorbilidades</th>
                                        <th>Alergia</th>
                                        <th>Tipo Alergia</th>
                                        <th>Alcoholismo</th>
                                        <th>Tabaquismo</th>   
                                        <th>Toxicomania</th>
                                        <th>Medicamentos</th>
                                        <th>Presentación</th>
                                        <th>Subjetivo</th>
                                        <th>Objetivo</th>   
                                        <th>Signos Vitales</th>
                                        <th>Analísis</th>
                                        <th>Diagnóstico</th>
                                        <th>Cie10</th>
                                        <th>Pronóstico</th>
                                        <th>Nombre Esp.</th>
                                        <th>Especialidad</th>   
                                        <th>Núm. de Ced.</th>
                                                                                

                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                        <th>Ver</th>
                                        
                                    </tr>
                                </thead>

                                <tbody id="myTable">
                                <?php
                                  while($row=$resultado->fetch_assoc())
                                    {?>
                                        <tr>
                                            <td><?php echo $row['idNota'];?></td>
                                            <td><?php echo $row['nombre'];?></td>
                                            <td><?php echo $row['edad'];?></td>
                                            <td><?php echo $row['sexo'];?></td>
                                            <td><?php echo $row['numCama'];?></td>
                                            <td><?php echo $row['fechaReg'];?></td>
                                            <td><?php echo $row['comorbilidades'];?></td>
                                            <td><?php echo $row['alergia'];?></td>
                                            <td><?php echo $row['cualAlergia'];?></td>
                                            <td><?php echo $row['alcoholismo'];?></td>
                                            <td><?php echo $row['tabaquismo'];?></td>
                                            <td><?php echo $row['toxicomania'];?></td>
                                            <td><?php echo $row['medicamentos'];?></td>
                                            <td><?php echo $row['obsP'];?></td>
                                            <td><?php echo $row['obsS'];?></td>
                                            <td><?php echo $row['obsO'];?></td>
                                            <td><?php echo $row['signosV'];?></td>
                                            <td><?php echo $row['analisis'];?></td>
                                            <td><?php echo $row['diagnostico'];?></td>
                                            <td><?php echo $row['tipoCIE10'];?></td>
                                            <td><?php echo $row['pronostico'];?></td>
                                            <td><?php echo $row['nombreEsp'];?></td>
                                            <td><?php echo $row['especialidad'];?></td>
                                            <td><?php echo $row['numCed'];?></td>


                                        

                                           <td><a href="modificar.php?id=<?php echo $row['idNota']; ?>"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span></a></td>
                                            


                                            <td><a href="#" data-href="eliminar.php?id=<?php echo $row['idNota']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="mbri-trash mbr-iconfont mbr-iconfont-btn"></span></a>  </td>

                                            <td><a href="ver.php?id=<?php echo $row['idNota']; ?>"><span class="mbri-file mbr-file mbr-file-btn"></span></a></td>

                                        </tr>

                                    <?php } ?>

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
                "previous":"Anterior",
                },
            },

                "bProcessing":true,
                "bServeSide":true,
                "sAjaxSource":"server_process.php"
        });
    } );
  </script>
</body>
</html>