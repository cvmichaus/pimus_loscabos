<?php
/*
try{
 require_once 'lib/cnx/dbconfig.php';
 $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


      $optradio = $_POST['optradio1'];
      $fecha  = date('Y-m-d');//fecha actual
      setlocale(LC_TIME,"es_ES");
      $hora_actual= strftime("%H:%M:%S"); 


      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

     if(empty($optradio)){
       echo '<script language="javascript">alert(" Debe de seleccionar algun tipo de movilidad ");</script>'; 
   } 

     
     else{

     	$consulta = $pdo->prepare("
        INSERT INTO tbl_encuesta (Opcion,fecha,hora)
        VALUES(?,?,?)
    ");

  $consulta->execute(array(

      $optradio,
      $fecha,
      $hora_actual

      ));

  $result = $consulta->fetchColumn();

  //echo $alerta ="Encuesta Guardada Correctamente.";
  echo $res = 1;
  ?>


				
				
<?php
     }

} catch(PDOException $e){
    echo "Error" .$e->getMessage();
    echo $res = 0;
}
*/


 require_once 'lib/cnx/dbconfig2.php';         
 date_default_timezone_set('America/Mexico_City');

   $optradio = $_POST['optradio1'];
  $fecha  = date('Y-m-d');//fecha actual
  setlocale(LC_TIME,"es_ES");
  $hora_actual= strftime("%H:%M:%S"); 


  $consulta1 = "INSERT INTO `tbl_encuesta` (`Opcion`, `fecha`,  `hora`) VALUES ('".$optradio."',  '".$fecha."', '".$hora_actual."')";             
  if($resultado1 = $mysqli->query($consulta1)) {
          
         echo $res = 1;

  }else{
    echo $res = 0;
    //echo mysqli_error();
  }

?>