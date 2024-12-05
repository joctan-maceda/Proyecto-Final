<body data-pagina="Blog">
<?php include 'header.php'; ?>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row w-100 d-flex flex-column justify-content-center align-items-center" style="padding-top:10px; ">
          <h2 class="d-flex justify-content-center align-items-center">REPORTE DE PROBLEMAS EN PUEBLA</h2>
        </div>
    </div>

    <!-- TABLA PARA MOSTRAR RESULTADOS -->
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-7">
          <div class="card my-4" id="resultados-reporte">
          <div class="card-body">
              <ul id="container"></ul>
          </div>
          </div>

          <table class="table table-bordered table-sm">
          <thead>
              <tr>
              <td>Id</td>
              <td>Tipo de Problema</td>
              <td>Mapa</td>
              </tr>
          </thead>
          <tbody id="reportes"></tbody>
          </table>
      </div>
    </div>

    <!--<label for="Mapa">Selecciona la ubicacion en el mapa:</label>
                <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script> -->
<?php include 'footer.php'; ?>