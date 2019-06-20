<?php


require 'conexion.php';
$where="";
$sql="SELECT *FROM dtpaciente";
$resultado= $mysqli->query($sql);


?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
  
  <?php 
  $titulo='Paciente'; //titulo de la pagina
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
                    Pacientes</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!-- Formbuilder Form -->
                <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="olF+6sVRSJpPWBrfaDx7P46eaZ2Qd/kpqKYi/SoEpp5m1aAVQV/P4SoPCSYT4YlBIjHD+kmHmm1jukD5METM+X4uQSl9z7HqAiWGyYfIlKf5GvKuTedjp3uZWZrcVSSl">
                    
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
                        <a href="registroPaciente.php" class= "btn btn-primary" > Nuevo registro</a>
                    </div>
                    <div class="col-md-4 input-group-btn align-center">
                        <a href="../menu.php" class= "btn btn-secondary" >Menú principal</a>
                    </div>
                    </div>

                        <br>
                        <div class="table-resposive-sm">
                            <table class=" table table-striped">
                                <thead>
                                    <tr>    
                                        <th>idPaciente </th>    
                                        <th>Nombre </th>
                                        <th>Apellido1     </th> 
                                        <th>Apellido2    </th>  
                                        <th>Fecha Nacimiento</th>
                                        <th>Sexo </th>      
                                        <th>RFC</th>       
                                        <th>Calle y Núm </th>           
                                        <th>Colonia </th>       
                                        <th>Municipio</th>      
                                        <th>CP </th>        
                                        <th>Estado </th>    
                                        <th>País </th>      
                                        <!--th>Nacionalidad  </th>     
                                        <th>Tipo Identificacion</th>
                                        <th>Folio</th>
                                        <th>Tipo Sangre</th>
                                        <th>Alergia</th>
                                        <th>Tipo Alergia  </th>      
                                        <th>Alcoholismo </th>       
                                        <th>Tabaquismo </th>    
                                        <th>Toxicomania  </th>      
                                        <th>Gpo Etnico </th>     
                                        <th>Heredo Familiares</th--> 
                                        
                                        <th>M</th>
                                        <th>E</th>
                                        
                                    </tr
                                    </tr

                                    </tr>
                                </thead>

                                <tbody id="myTable">
                                <?php
                                  while($row=$resultado->fetch_assoc())
                                    {?>
                                        <tr>
                                            <td><?php echo $row['idPaciente'];?></td>
                                            <td><?php echo $row['nombre'];?></td>
                                            <td><?php echo $row['apellido1'];?></td>
                                            <td><?php echo $row['apellido2'];?></td>                                            
                                            <td><?php echo $row['fechNacimiento'];?></td>
                                            <td><?php echo $row['sexoPaciente'];?></td>
                                            <td><?php echo $row['rfcPaciente'];?></td>
                                            <td><?php echo $row['dirCalleNum'];?></td>
                                            <td><?php echo $row['coloniaPaciente'];?></td>
                                            <td><?php echo $row['mpioPaciente'];?></td>
                                            <td><?php echo $row['cpPaciente'];?></td>
                                            <td><?php echo $row['estado'];?></td> 
                                            <td><?php echo $row['pais'];?></td>  
                                            <!--td><?php echo $row['nacionalidad'];?></td>  
                                            <td><?php echo $row['tipoIdentificacion'];?></td>  
                                            <td><?php echo $row['folioIdentificacion'];?></td>  
                                            <td><?php echo $row['tipoSangre'];?></td> 
                                            <td><?php echo $row['alergia'];?></td>  
                                            <td><?php echo $row['tipoAlergia'];?></td>  
                                            <td><?php echo $row['alcoholismo'];?></td>  
                                            <td><?php echo $row['tabaquismo'];?></td>                                              
                                            <td><?php echo $row['toxicomania'];?></td>  
                                            <td><?php echo $row['gpoEtnico'];?></td>  
                                            <td><?php echo $row['heredoFamiliares'];?></td-->  
                                           <td><a href="modificarPaciente.php?idPaciente=<?php echo $row['idPaciente'];?>"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span></a></td>
                                           <td><a href="#" data-href="eliminarPaciente.php?id=<?php echo $row['idPaciente']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="mbri-trash mbr-iconfont mbr-iconfont-btn"></span></a></td>
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
</body>
</html>