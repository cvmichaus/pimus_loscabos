 <section class="participacion has-padding text-center" id="participacion">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wp4">
          <h2 class="contenidos2">Tu participación es muy importante para que el PIMUS sirva para resolver los problemas que tienen para moverse en Los Cabos.</h2>
          
        </div>

        <div class="col-md-12 wp4">
          <br><br>

          <center>
          <form  id="formuploadajax" method="post"  enctype="multipart/form-data" >


  <div class="form-group-lg row">
    <label for="problematica" class="col-sm-6 col-form-label ">¿Cómo realiza diariamente sus traslados en Los Cabos?</label>
    <div class="col-sm-6">
      <select type="text" class="form-control" id="traslado" name="traslado" placeholder="Traslado" required>
          <option value="">SELECCIONA UNA TRASLADO</option>
        <option value="Conductor de automovil particular"> Conductor de automovil particular </option>
         <option value="Pasajero en automovil particular"> Pasajero en automovil particular</option>
          <option value="Usuario del transporte público"> Usuario del transporte público </option>
           <option value="Usuario de transporte de personal"> Usuario de transporte de personal </option>
            <option value="Usuario de taxi"> Usuario de taxi </option>
             <option value="Caminando"> Caminando </option>
              <option value="Bicicleta"> Bicicleta </option>

        
       
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="clasifiacion" class="col-sm-6 col-form-label ">Seleccione un tema de movilidad de su interés</label>
    <div class="col-sm-6">
      <select type="text" class="form-control" id="movilidad"  name="movilidad" placeholder="Movilidad" required>
          <option value="">SELECCIONA UNA MOVILIDAD</option>
          <option value="Transporte túristico">Transporte túristico</option>
          <option value="Movilidad ciclista">Movilidad ciclista</option>
          <option value="Movilidad peatonal">Movilidad peatonal</option>
          <option value="Transporte público">Transporte público</option>
          <option value="Seguridad Vial">Seguridad Vial</option>
          <option value="Gestión de tránsito">Gestión de tránsito</option>
          <option value="Transporte motorizado particular">Transporte motorizado particular</option>
          <option value="Gestión de estacionamiento">Gestión de estacionamiento</option>
          <option value="Transporte de carga">Transporte de carga</option>
      </select>
    </div>
  </div>


  <div class="form-group row">
    <label for="clasifiacion" class="col-sm-6 col-form-label ">Seleccione la problemática de su interés</label>
    <div class="col-sm-6">
      <select type="text" class="form-control" id="problematica"  name="problematica" placeholder="Problematica" required>
          <option value="">SELECCIONA UNA PROBLEMATICA</option>
          <option value="Opciones de transporte para turistas limitadas a las provistas por hoteles y transporte particular">Opciones de transporte para turistas limitadas a las provistas por hoteles y transporte particular</option>
          <option value="Los ciclistas de Los Cabos no usan la bicicleta con fines de transporte">Los ciclistas de Los Cabos no usan la bicicleta con fines de transporte</option>
          <option value="Difcultad de desplazamiento para las personas con movilidad reducida">Difcultad de desplazamiento para las personas con movilidad reducida</option>
          <option value="Bajos niveles de viajes realizados a pie.">Bajos niveles de viajes realizados a pie.</option>
          <option value="Altas posibilidades de accidentes y bajos niveles de seguridad peatonal">Altas posibilidades de accidentes y bajos niveles de seguridad peatonal</option>
          <option value="El sistema de transporte público es ineficiente">El sistema de transporte público es ineficiente</option>
          <option value="Alto gasto de las personas usuarias en transporte público">Alto gasto de las personas usuarias en transporte público</option>
          <option value="Las paradas de transporte público carecen de infraestructura">Las paradas de transporte público carecen de infraestructura</option>
          <option value="Las personas que usan el transporte público no estan conformas con el servicio de las unidades">Las personas que usan el transporte público no estan conformas con el servicio de las unidades</option>
          <option value="Los puentes peatonales ubicados en los tramos urbanos de la carretera Transpeninsular dificultan los traslados a pie y en bicicleta">Los puentes peatonales ubicados en los tramos urbanos de la carretera Transpeninsular dificultan los traslados a pie y en bicicleta</option>
          <option value="Alta concentración de incidentes viales sobre la carretera Transpeninsular">Alta concentración de incidentes viales sobre la carretera Transpeninsular</option>
          <option value="Altos niveles de congestión vehicular en Los Cabos">Altos niveles de congestión vehicular en Los Cabos</option>
          <option value="Preferencia de las personas para utilizar el automóvil como principal medio de transporte ">Preferencia de las personas para utilizar el automóvil como principal medio de transporte </option>
          <option value="Oferta de estacionamiento público limitado y caro, por lo que la gente se estaciona sobre la vía pública">Oferta de estacionamiento público limitado y caro, por lo que la gente se estaciona sobre la vía pública</option>
          <option value="Vehículos carga ingresan a la zona urbana a través de la carretera transpeninsular en horarios de máxima demanda">Vehículos carga ingresan a la zona urbana a través de la carretera transpeninsular en horarios de máxima demanda</option>
         
      </select>
    </div>
  </div>


 <div class="form-group row">
    <label for="propuesta" class="col-sm-6 col-form-label ">¿Qué opinión le merece esta problemática?</label>
    <div class="col-sm-6">
     <textarea class="form-control" id="opinion_problematica" name="opinion_problematica" placeholder="Describa su opinion"></textarea>
    </div>
  </div>

   <div class="form-group row">
    <label for="propuesta" class="col-sm-6 col-form-label ">¿Cómo cree que se pudiera solucionar esta problemática?</label>
    <div class="col-sm-6">
      <textarea class="form-control" id="solucion_problematica" name="solucion_problematica" placeholder="Describa como se pudiera solucionar esta problemática"></textarea>
    </div>
  </div>



   <div class="form-group row">
    <label for="propuesta" class="col-sm-6 col-form-label "> Puede adjuntar archivos de propuestas de movilidad que tenga disponible (*.pdf, *.docx, *.pptx)</label>
    <div class="col-sm-6">
      <input type="file" class="form-control" id="archivo" name="archivo" placeholder=">SUBE TU PROPUESTA" >
    </div>
  </div>





    <input type="submit" class="btn btn-primary mb-2" value="Guardar"/>

</form>

  <div id="mensaje3"></div>


        </div>
      </center>
      </div>
    </div>
  </section>