<?php
require_once('bdd.php');


//$sql = "SELECT *FROM events WHERE color='#00800'";
//$sql = "SELECT id, title, color,start, end,  telefono, confirmado FROM events ";
//$sql = "SELECT id, title, color,start, end,  telefono, confirmado FROM events WHERE id='13'";


//Internista-verde
$sql = "SELECT id, title, color,start, end,  telefono, confirmado FROM events WHERE color='#008000'";


$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Sistema de citas</title>
    <script src="js/jquery.js"></script>
	<script src='js/moment.min.js'></script> 

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- FullCalendar -->
	<link href='css/fullcalendar.css' rel='stylesheet' />

	<!--<script src='js/es.js'></script>
       <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/lang-all.js'></script>
 
		<script src='fullcalendar-4.1.0\packages\core\locales\es.js'></script>
-->	
    <script src='js/fullcalendar.js'></script>
     <script src='fullcalendar-4.1.0/packages/core/main.js'></script>
    <script src='fullcalendar-4.1.0/packages/core/locales/es.js'></script>
	
   
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
	#calendar {
		max-width: 800px;
	}
	.col-centered{
		float: none;
		margin: 0 auto;
	}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Reportes</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Menú</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
               <h1>Sistema de citas</h1>
                <p class="lead">Añada, modifique y elimine citas de manera dinámica</p>
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
        <!-- /.row -->
		
		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Agregar cita</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Paciente</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Escriba nombre del paciente">
					</div>
				  </div>


				  <div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-10">
					  <input type="text" name="telefono" class="form-control" id="telefono" placeholder="### ### ## ##">
					</div>
				  </div>

				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Especialidad</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
					  <option value="">Elija una especialidad</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Traumatología </option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Ginecología </option>
						  <option style="color:#008000;" value="#008000">&#9724; Internista </option>		
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Pediatría </option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Otro </option>
					<!--  <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo  ... </option>   
						  <option style="color:#000;" value="#000">&#9724; Negro ... </option>  -->
						  
						</select>
					</div>
				  </div>
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Inicio</label>
					<div class="col-sm-10">
					  <input type="datetime-local" name="start" class="form-control" id="start" placeholder="Elija fecha y hora de inicio"    onblur="document.getElementById('end').value=this.value">
					</div>
				  </div>

				  <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Fin</label>
					<div class="col-sm-10">
					  <input type="datetime-local" name="end" class="form-control" id="end" placeholder="Elija fecha y hora de fin de la cita" readonly>
					</div>
				  </div>

				   <div class="form-group">
					<label for="confirmado" class="col-sm-2 control-label">Confirmado (S/N)</label>
					<div class="col-sm-10">
					  <input type="text" name="confirmado" class="form-control" id="confirmado" placeholder="N">
					</div>
				  </div>
			
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Guardar cambios</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		
		
		
		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modificar Cita</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Paciente</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" >
					</div>
				  </div>

				   <div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-10">
					  <input type="text" name="telefono" class="form-control" id="telefono" >
					</div>
				  </div>


				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Especilialidad</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Elija especialidad</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Traumatología</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Ginecología</option>
						  <option style="color:#008000;" value="#008000">&#9724; Internista</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Pediatría</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Otro</option>
						  <!--
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red- Dermatologo</option>
						  <option style="color:#000;" value="#000">&#9724; Black- Internista</option> -->
						  
						</select>
					</div>
				  </div>

				    <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Inicio</label>
					<div class="col-sm-10">
					  <input type="datetime-local" name="start" class="form-control" id="start" placeholder="Elija fecha y hora de inicio" >
					</div>
				  </div>

				   <div class="form-group">
					<label for="end" class="col-sm-2 control-label">Fin</label>
					<div class="col-sm-10">
					  <input type="datetime-local" name="end" class="form-control" id="end" placeholder="Elija fecha y hora de fin de la cita" >
					</div>
				  </div>

				   <div class="form-group">
					<label for="confirmado" class="col-sm-2 control-label">Confirmado</label>
					<div class="col-sm-10">
					  <input type="text" name="confirmado" class="form-control" id="confirmado" placeholder="Escriba (s/n)">
					</div>
				  </div>

				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete">Borrar cita</label>
						  </div>
						</div>
					</div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Guardar cambios</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1

 <script src="js/jquery-3-4-1.min.js"></script>
 
     -->
 
  
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/fullcalendar.js'></script>


	<!--


	<script src='js/es.js'></script>

		<script src='fullcalendar-4.1.0\packages\core\locales\es.js'></script>
		<script src="fullcalendar-4.1.0/packages/core/locales/es.js"></script>
-->	
	
<script src='fullcalendar-4.1.0/packages/core/locales-all.js'></script>




	
	<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			//locale:'es',
			//lang:'es'

			header: {
				left: 'prev,next today',
				center: 'title',
				//right: 'dayGridMonth,timeGridWeek,timeGridDay'
				right: 'month,agendaWeek,agendaDay,listMonth,listYear,listWeek,listDay'
    
				//right: 'month,basicWeek,basicDay'
			},
			//weekends: false, // will hide Saturdays and Sundays
	//		dayClick: function() {
    //alert('a day has been clicked!');
  //},
	buttonText: {
		        listMonth: 'Lista mensual',
		        listYear: 'Anual',
		        listWeek: 'Semanal',
		        listDay: 'Diaria',
	         
	            today: "Hoy",
	            month: "Mes",
	            week: "Semana",
	            day: "Día",
	            list: "Agenda"
        },

	
		weekLabel: "Sm",
        allDayHtml: "Todo<br/>el día",
        eventLimitText: "más",
        //noEventsMessage: "No hay eventos para mostrar",
        noEventsMessage:['No hay citas que mostrar'],
		dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sáb'],
		dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
		monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort : ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
    





    businessHours: {
				  // days of week. an array of zero-based day of week integers (0=Sunday)
				 // daysOfWeek: [ 1, 2, 3, 4, 5], 
				  //hiddenDays: [ 6,7 ], 

				  startTime: '09:00', // a start time (10am in this example)
				  endTime: '19:00', // an end time (6pm in this example)
	    		},


			
			defaultDate: '2019-05-09',
			//lang:'es',
			
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,

			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit #start').val(event.start);
					$('#ModalEdit #end').val(event.end);


					$('#ModalEdit #telefono').val(event.telefono);
					$('#ModalEdit #confirmado').val(event.confirmado);
					
					$('#ModalEdit').modal('show');
				});
			},

			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},

			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					color: '<?php echo $event['color']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					telefono: '<?php echo $event['telefono']; ?>',
					confirmado: '<?php echo $event['confirmado']; ?>',
						
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Guardardo');
					}else{
						alert('No fue posible guardar el registro. Intente de nuevo.'); 
					}
				}
			});
		}
		
	});

</script>

</body>

</html>
