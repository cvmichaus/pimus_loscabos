<?php
	$nombre = $_POST ["Nombre"];
	$correo = $_POST ["Email"];
	$asunto = $_POST ["asunto"];
	$mensaje = $_POST ["mensaje"];


$mail = "Hola Adminsitrador, tines un correo nuevo<br> 
Nombre : ".$nombre." <br>
Asunto : ".$asunto." <br>
Empresa : ".$empresa." <br>
Correo : ".$correo." <br>
Mensaje : ".$mensaje." <br>
";
//Titulo
$titulo = "Correo Nuevo de la Pagina Web pimusloscabos.mx";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Pagina Web Pimus los Cabos < contacto@pimusloscabos.mx  >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("contacto@pimusloscabos.mx",$titulo,$mail,$headers);//Propulcity.mexico@wri.org
if($bool){
   header('Location: index.php?e=1');
}else{
   header('Location: index.php?e=0');
}
?>