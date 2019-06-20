<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "medicaldb";
$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_errno) {
		echo "Fall&oacute; la conexi&oacute;n a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
	$conn->set_charset("utf8");
$sql = "SELECT idPaciente, CONCAT(nombre,' ',apellido1,' ',apellido2) as nomPac FROM dtpaciente WHERE nombre LIKE '%".$_GET['query']."%' OR apellido1 LIKE '%".$_GET['query']."%' LIMIT 20";
$resultset = $conn->query($sql);
$json = array();
while( $rows = $resultset->fetch_assoc()) {
$json[] = $rows["idPaciente"]." ".$rows["nomPac"];
}
echo json_encode($json);
?>