<?php


require_once('bdd.php');
if (isset($_POST['delete']) && isset($_POST['id'])){
	
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM events WHERE id = $id";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}
	
}elseif (isset($_POST['title'])   && isset($_POST['color']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['telefono']) && isset($_POST['id'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	
	$color = $_POST['color'];
	
	$start = date ( 'Y-m-d H:i:s' ,  strtotime($_POST['start']));

    $end = date ( 'Y-m-d H:i:s' , strtotime($_POST['end']));

	$telefono = $_POST['telefono'];
		if(isset($_POST['confirmado'])){
		$confirmado = $_POST['confirmado'];
	}
	else{
		$confirmado = 'off';
	}
	
	$sql = "UPDATE events SET  title = '$title',color = '$color',start = '$start', end = '$end',telefono = '$telefono',confirmado = '$confirmado' WHERE id = $id ";

	
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


header('Location: index.php');
	
?>