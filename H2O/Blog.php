<?php include 'header.php'; ?>
    <div class="container">
      <div class="row p-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <h2>Aqui ustedes agreguen lo del blog de que Puebla, etc...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TABLA PARA MOSTRAR RESULTADOS -->
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
            <td>Correo</td>
            <td>Municipio</td>
            <td>Colonia</td>
            </tr>
        </thead>
        <tbody id="reportes"></tbody>
        </table>
    </div>

    <!--<label for="Mapa">Selecciona la ubicacion en el mapa:</label>
                <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script> -->
<?php include 'footer.php'; ?>