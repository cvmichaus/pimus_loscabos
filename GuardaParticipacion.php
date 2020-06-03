<?php
/*
try{
 require_once 'lib/cnx/dbconfig.php';
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


      $traslado = $_POST['traslado'];
      $movilidad = $_POST['movilidad'];
      $problematica  = $_POST['problematica'];
      $opinion_problematica  = $_POST['opinion_problematica'];
      $solucion_problematica  = $_POST['solucion_problematica'];
      $fecha  = date('Y-m-d');//fecha actual
      setlocale(LC_TIME,"es_ES");
      $hora_actual= strftime("%H:%M:%S"); 
      $archivo = $_FILES['archivo']['name'];


       $target_dir = "archivos/participacion/";
        $target_file = $target_dir . basename($_FILES["archivo"]["name"]);


  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);


  if(empty($archivo)){

 $consulta = $pdo->prepare("
        INSERT INTO propuestas (CodPropuesta,traslado,movilidad,problematica,opinion_problematica,solucion_problematica,archivo,Fecha_alta)
        VALUES(?,?,?,?,?,?,?)
    ");

  $consulta->execute(array(

      $traslado,
      $movilidad,
      $problematica,
      $opinion_problematica,
      $solucion_problematica,
      $archivo,
      $fecha
  ));

  $result = $consulta->fetchColumn();

  echo $alerta ="Propuest Guardado Correctamente.";
             echo "<script>";
             echo "limpiar();";
             echo "</script>";        




  }else{

     $info = new SplFileInfo($archivo);
      $extension= $info->getExtension();

      if($extension  == 'pdf' OR $extension  == 'docx' OR $extension  == 'doc' or $extension  == 'ppt' or $extension  == 'pptx' ){

          if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {


             $consulta = $pdo->prepare("
         INSERT INTO propuestas (CodPropuesta,traslado,movilidad,problematica,opinion_problematica,solucion_problematica,archivo,Fecha_alta)
        VALUES(?,?,?,?,?,?,?)
    ");

  $consulta->execute(array(

       $traslado,
      $movilidad,
      $problematica,
      $opinion_problematica,
      $solucion_problematica,
      $archivo,
      $fecha
  ));

  $result = $consulta->fetchColumn();

  echo $alerta ="Propuesta Guardado Correctamente";
             echo "<script>";
             echo "limpiar();";
             echo "</script>";        

          }

        }else{ echo '<script language="javascript">alert(" Solo se permite archivos PDF, WORD Y POWER POINT , El archivo que intentas subir es:  '.$extension.' ");</script>'; } 


  }

 

} catch(PDOException $e){
    echo "Error" .$e->getMessage();
}

*/

 require_once 'lib/cnx/dbconfig2.php';         
 date_default_timezone_set('America/Mexico_City');

  $traslado = $_POST['traslado'];
  $movilidad = $_POST['movilidad'];
  $problematica  = $_POST['problematica'];
  $opinion_problematica  = $_POST['opinion_problematica'];
  $solucion_problematica  = $_POST['solucion_problematica'];
  $fecha  = date('Y-m-d');//fecha actual
  setlocale(LC_TIME,"es_ES");
  $hora_actual= strftime("%H:%M:%S"); 
  $archivodoc = $_FILES['archivo']['name'];

  $target_dir = "archivos/participacion/";
        $target_file = $target_dir . basename($_FILES["archivo"]["name"]);

    if(empty($archivodoc)){

          $consulta1 = "INSERT INTO `propuestas` (`traslado`,`movilidad`,`problematica`,`opinion_problematica`,`solucion_problematica`,`archivo`,`Fecha_alta`) VALUES ('".$traslado."',  '".$movilidad."', '".$problematica."', '".$opinion_problematica."', '".$solucion_problematica."', '".$archivodoc."', '".$fecha."')";             
          if($resultado1 = $mysqli->query($consulta1)) {

          echo $alerta ="Propuesta Guardado Correctamente";
             echo "<script>";
             echo "limpiar();";
             echo "</script>";        


          }else{
           echo $alerta ="Error al Guardar la Propusta Intentelo Nuevamente";
          //echo mysqli_error();
          }

    }else{

      $info = new SplFileInfo($archivodoc);
      $extension= $info->getExtension();

      if($extension  == 'pdf' OR $extension  == 'docx' OR $extension  == 'doc' or $extension  == 'ppt' or $extension  == 'pptx' ){

              if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {


                       $consulta2 = "INSERT INTO `propuestas` (`traslado`,`movilidad`,`problematica`,`opinion_problematica`,`solucion_problematica`,`archivo`,`Fecha_alta`) VALUES ('".$traslado."',  '".$movilidad."', '".$problematica."', '".$opinion_problematica."', '".$solucion_problematica."', '".$archivodoc."', '".$fecha."')";             
                        if($resultado2 = $mysqli->query($consulta2)) {

                        echo $alerta ="Propuesta Guardado Correctamente";
                        echo "<script>";
                        echo "limpiar();";
                        echo "</script>";        


                        }else{
                        echo $alerta ="Error al Guardar la Propusta Intentelo Nuevamente";
                        echo mysqli_error();
                        }


              }

       }else{ echo '<script language="javascript">alert(" Solo se permite archivos PDF, WORD Y POWER POINT , El archivo que intentas subir es:  '.$extension.' ");</script>'; }



    }






?>