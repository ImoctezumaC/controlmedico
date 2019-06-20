<?php

$mysqli = new mysqli('localhost','root','root','comercio');
if ($mysqli->connect_error){
  die('error de conexion'.$mysqli->connect_error);
}
$mysqli->set_charset("utf8");


