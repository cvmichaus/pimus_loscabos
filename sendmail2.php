<?php
	$nombre = $_POST ["nombres"];
	$correo = $_POST ["email"];
	$apellidos = $_POST ["apellidos"];
	$comercio = $_POST ["comercio"];


$mail = "Gracias Por Registrarte ".$nombre." ".$apellidos."  <br> 
para acceder al Webinar Pulsa <a href="www.youtube.com">aqui</a>


";
//Titulo
$titulo = "Pre Registro a Webinarx";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Pagina Web Pimus los Cabos Pre-registro< info@pimusloscabos.mx  >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail($correo,$titulo,$mail,$headers);//Propulcity.mexico@wri.org
if($bool){
   header('Location: registro.php?e=1');
}else{
   header('Location: registro.php?e=0');
}
?>