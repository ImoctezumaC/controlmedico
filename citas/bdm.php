<?php
try
{
	$bdm = new PDO('mysql:host=localhost;dbname=medicaldb;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
