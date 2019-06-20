<?php

// Connexion à la base de données
require_once('bdd.php');
//echo $_POST['title'];
if (isset($_POST['title'])  && isset($_POST['color']) && isset($_POST['start']) && isset($_POST['telefono'])){
	
	$title = $_POST['title'];
	
	$color = $_POST['color'];
	$start = $_POST['start'];
	
	$end = strtotime ( '+30 minute' , strtotime ($_POST['start']) ) ; 
    $end = date ( 'Y-m-d H:i:s' , $end); 
	
	$telefono = $_POST['telefono'];
	if(isset($_POST['confirmado'])){
		$confirmado = $_POST['confirmado'];
	}
	else{
		$confirmado = 'off';
	}
		

	$sql = "INSERT INTO events(title, color,start, end, telefono, confirmado) values ('$title' , '$color', '$start', '$end','$telefono','$confirmado')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
