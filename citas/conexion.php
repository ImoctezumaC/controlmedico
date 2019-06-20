<?php

$mysqli = new mysqli('localhost','root','root','bd');//bd
if ($mysqli->connect_error){
  die('error de conexion'.$mysqli->connect_error);
}


