<section id="comotemueves" class="padd-section text-center wow fadeInUp" >
		  <div class="container">
              <h2>Sondeo</h2>

                <p>
       

         <h4 style="text-transform:capitalize ;" class="letrasoff4">Sondeo inicial ¿Cuál considera usted que debería ser el aspecto prioritario que debería de atender el PIMUS en Los Cabos?</h4>
      
      
              <?php
              $visible=0;
              if($visible == 1){
              //echo"<script>alert('Acuse ya Enviado  ')</script>";
              $varvisible ="display:none;";
              $varvisible2 ="display:inline;";    
              //document.gertelementById("contestado").style.display:inline;
              }else{
              $varvisible ="display:inline;";
              $varvisible2 ="display:none;";
              }
              ?>

                <div style="<?php echo $varvisible; ?>"> 
                    
             <p>
          <!--<form accept-charset="utf-8" id="formuploadajax" method="post" >-->
            <form accept-charset="utf-8" method="post" id="formdata">
                <div class="form-group">        
        <input type="radio" name="optradio1" value="a" class="funkyradio-default">
        <label  for="materialGroupExample1.1">a) Peatones</label><br>
        <input type="radio" name="optradio1" value="b">
        <label  for="materialGroupExample1.2">b) Ciclistas</label><br>
        <input type="radio" name="optradio1" value="c">
        <label  for="materialGroupExample1.3">c) Transporte Público</label><br>
        <input type="radio" name="optradio1" value="d">
        <label  for="materialGroupExample1.4">d) Taxi</label><br>
        <input type="radio" name="optradio1" value="e">
        <label  for="materialGroupExample1.5">e) Servicios de Plataformas Tecnológicas</label><br>
         <input type="radio" name="optradio1" value="f">
        <label  for="materialGroupExample1.6">f) Automóvil  Particular</label><br>
         <input type="radio" name="optradio1" value="g">
        <label  for="materialGroupExample1.7">g) Autos en Renta</label><br>
         <input type="radio" name="optradio1" value="h">
        <label  for="materialGroupExample1.8">h) Motocicleta</label><br>
         <input type="radio" name="optradio1" value="i">
        <label  for="materialGroupExample1.9">i) Transporte Escolar</label><br>
         <input type="radio" name="optradio1" value="j">
        <label  for="materialGroupExample1.10">j) Transporte de Personal</label><br>
        <input type="radio" name="optradio1" value="k">
        <label  for="materialGroupExample1.11">k) Transporte de Carga</label><br>
        <input type="radio" name="optradio1" value="l">
        <label  for="materialGroupExample1.12">l) Transporte de Turístico</label>


  <br><br>
  <center><input type="button"  class="btn btn-primary mb-2" id="botonenviar" value="Enviar"/></center>
                </div>          
            
          </form>
        </p>

        <p>
          <div id="mensaje" ></div>

          <div id="exito" style="display:none">
                        El Sondeo se Guardo con éxito.

            <?php
            require_once 'lib/cnx/dbconfig2.php';         
            

              $sql ="SELECT COUNT(*) totala FROM tbl_encuesta WHERE Opcion = 'a' ";
              if($resSQL = $mysqli->query($sql)) {
              $data = mysqli_fetch_assoc($resSQL);  
              }

              $sql2 ="SELECT COUNT(*) totalb FROM tbl_encuesta WHERE Opcion = 'b' ";
              if($resSQL2 = $mysqli->query($sql2)) {
              $data2 = mysqli_fetch_assoc($resSQL2);  
              }

              $sql3 ="SELECT COUNT(*) totalc FROM tbl_encuesta WHERE Opcion = 'c' ";
              if($resSQL3 = $mysqli->query($sql3)) {
              $data3 = mysqli_fetch_assoc($resSQL3);  
              }

              $sql4 ="SELECT COUNT(*) totald FROM tbl_encuesta WHERE Opcion = 'd' ";
              if($resSQL4 = $mysqli->query($sql4)) {
              $data4 = mysqli_fetch_assoc($resSQL4);  
              }

              $sql5 ="SELECT COUNT(*) totale FROM tbl_encuesta WHERE Opcion = 'e' ";
              if($resSQL5 = $mysqli->query($sql5)) {
              $data5 = mysqli_fetch_assoc($resSQL5);  
              }

              $sql6 ="SELECT COUNT(*) totalf FROM tbl_encuesta WHERE Opcion = 'f' ";
              if($resSQL6 = $mysqli->query($sql6)) {
              $data6 = mysqli_fetch_assoc($resSQL6);  
              }

              $sql7 ="SELECT COUNT(*) totalg FROM tbl_encuesta WHERE Opcion = 'g' ";
              if($resSQL7 = $mysqli->query($sql7)) {
              $data7 = mysqli_fetch_assoc($resSQL7);  
              }

              $sql8 ="SELECT COUNT(*) totalh FROM tbl_encuesta WHERE Opcion = 'h' ";
              if($resSQL8 = $mysqli->query($sql8)) {
              $data8 = mysqli_fetch_assoc($resSQL8);  
              }

              $sql9 ="SELECT COUNT(*) totali FROM tbl_encuesta WHERE Opcion = 'i' ";
              if($resSQL9 = $mysqli->query($sql9)) {
              $data9 = mysqli_fetch_assoc($resSQL9);  
              }

              $sql10 ="SELECT COUNT(*) totalj FROM tbl_encuesta WHERE Opcion = 'j' ";
              if($resSQL10 = $mysqli->query($sql10)) {
              $data10 = mysqli_fetch_assoc($resSQL10);  
              }

              $sql11 ="SELECT COUNT(*) totalk FROM tbl_encuesta WHERE Opcion = 'k' ";
              if($resSQL11 = $mysqli->query($sql11)) {
              $data11 = mysqli_fetch_assoc($resSQL11);  
              }

              $sql12 ="SELECT COUNT(*) totall FROM tbl_encuesta WHERE Opcion = 'l' ";
              if($resSQL12 = $mysqli->query($sql12)) {
              $data12 = mysqli_fetch_assoc($resSQL12);  
              }

            
            ?>


            <figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
       Resultados de Sondeo 2020
    </p>
</figure>

<script>
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Aspecto prioritario que debería de atender el PIMUS en Los Cabos'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Movilidad',
        colorByPoint: true,
        data: [{
            name: 'Peatones',
            y: <?php echo $data['totala']; ?>,
            sliced: true,
            selected: true
        }, {
            name: 'Ciclistas',
            y:  <?php echo $data2['totalb']; ?>
        }, {
            name: 'Transporte Público',
            y: <?php echo $data3['totalc']; ?>
        }, {
            name: 'Taxi',
            y:   <?php echo $data4['totald']; ?>
        }, {
            name: 'Servicios de Plataformas Tecnológicas',
            y:   <?php echo $data5['totale']; ?>
        }, {
            name: 'Automóvil  Particular',
            y: <?php echo $data6['totalf']; ?>
        }, {
            name: 'Autos en Renta',
            y:  <?php echo $data7['totalg']; ?>
        }, {
            name: 'Motocicleta',
            y: <?php echo $data8['totalh']; ?>
        }, {
            name: 'Transporte Escolar',
            y: <?php echo $data9['totali']; ?>
        },{
            name: 'Transporte de Personal',
            y: <?php echo $data10['totalj']; ?>
        },{
            name: 'Transporte de Carga',
            y: <?php echo $data11['totalk']; ?>
        },{
            name: 'Transporte de Turístico',
            y:  <?php echo $data12['totall']; ?>
        }]
    }]
}); 
</script>


        </div>

        <div id="fracaso" style="display:none" class="alerta alerta-warning" role="alerta">
        Se ha producido un error durante el envío de datos, Intentelo de Nuevo.
        </div>

        </p>
      </div>
    </section>