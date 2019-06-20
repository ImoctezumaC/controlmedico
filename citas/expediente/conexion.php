<?php

$mysqli = new mysqli('localhost','root','','medicaldb');
if ($mysqli->connect_error){
  die('error de conexion'.$mysqli->connect_error);
}


