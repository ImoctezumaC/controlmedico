<?php
function conexion(){
    $usuariobd = "root";
    $contrasenabd = "root";
    $servidor = "localhost";
    $basededatos = "medicaldb";
  //Se realiza la conexion enviando el usuario, contraseÃ±a y el nombre de la base de datos
  $link = new mysqli($servidor, $usuariobd, $contrasenabd, $basededatos);
	if ($link->connect_errno) {
		echo "Fall&oacute; la conexi&oacute;n a MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
	}
	$link->set_charset("utf8");
	return $link;
}


function validaUser($usuario,$contrasenia){
    $sql = "SELECT * FROM ctusuarios WHERE claveU ='".$contrasenia."' AND cuentaU='".$usuario."'";
    $mysqli = conexion();
    $result = $mysqli->query($sql);
    $row_cnt = $result->num_rows;
    if($row_cnt > 0){
      return 1;
    }
    else { return 0;}
}

function registraPaciente($datos){
  $sql = "INSERT INTO dtpaciente(idPaciente,nombre,apellido1,apellido2,fechNacimiento, sexoPaciente,rfcPaciente,dirCalleNum,coloniaPaciente,mpioPaciente,cpPaciente,estado,pais,nacionalidad,tipoIdentificacion,folioIdentificacion,tipoSangre,alergia,tipoAlergia,alcoholismo,tabaquismo,
toxicomania,gpoEtnico,heredoFamiliares) VALUES(";
  $sql.= $datos .")";
  $mysqli = conexion();
  $result = $mysqli->query($sql);
  $i=$mysqli->affected_rows;
  return $i;
} 



function consultarTabla($tabla){
  $sql = "select * from $tabla";
  $mysqli = conexion();
  $result = $mysqli->query($sql);
  return $result;
} 

//Funcion para ejecutar una consulta en mysql
function ejecutar($sql){
  $mysqli = conexion();
  $result = $mysqli->query($sql);
  return $result;
} 

function encabezadoTabla($result) {
    //Bloque que muestra los nombre de las columnas mediante la consulta de metadatos
    echo "<tr>";
    $info_campos = $result->fetch_fields();
    foreach ($info_campos as $valor) {
       echo '<th width="'.($valor->length+25).'">';
       echo ucfirst($valor->name.'</th>'); 
     }
    echo '</tr> ';
 }

function datosTabla($result){
  //Bloque que muestra las filas de la tabla
         $i=0;
           while($i < $result->num_rows) { 
             $fila = $result->fetch_row();
             $j=0;
             echo '<tr>';
             while ($j<$result->field_count){
                $finfo = $result->fetch_field_direct($j);
							echo '<td width="'.($finfo->max_length).'" >';
							echo obtenerDato($result,$i,$j);//Impresion del campo consultado.
 							echo '</td>';
							 $j++; 					
 					 } 
            echo '</tr>';
            $i++;
               
            }    
 
 } 
//Función para 
function insertar($sentencia,$mysqli){
	$result = $mysqli->prepare($sentencia);
	$result->execute();
   return $result;
 }

//Función para obtener un dato de un registro de una tabla en una base de datos de mysql
function obtenerDato($res, $row, $col){
  $res->data_seek($row);
  $datarow = $res->fetch_row();
  return $datarow[$col];
}




?>
