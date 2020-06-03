<?php

$mysqli = new mysqli("localhost", "pimuslos_root", "Xwa0vKAtM5IGs8bf", "pimuslos_cabos");
if($mysqli->connect_errno) {
	echo "<b>Fallo al conectar a la BD: </b>" . $mysqli->connect_errno . "---" . $mysqli->connect_error;
}
return $mysqli;