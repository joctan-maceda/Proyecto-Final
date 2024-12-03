
<body data-pagina="Administrador">    
<?php include 'header.php'; ?>
<div id="login" class="container">
  <div class="row p-4">
    <div class="col-md-5">
      <div class="card">
        <div class="card-body">
          <form id="login">
            <div class="form-group">
              <input class="form-control" type="text" id="correo" placeholder="Correo de contacto" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="password" id="password" required>
            </div>
            <button class="btn btn-primary btn-block text-center" type="submit">
                  Iniciar Session
                </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="inicio" class="container">
      <div class="row p-4">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body">
              <!-- FORMULARIO PARA REPORTAR PROBLEMAS DE SANEAMIENTO -->
              <form id="saneamiento-form">
                <div class="form-group">
                  <input class="form-control" type="email" id="correo_contacto" placeholder="Correo de contacto" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" id="municipio" placeholder="Municipio" required>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" id="colonia" placeholder="Colonia o barrio" required>
                </div>
                
                <div class="form-group">
                  <input class="form-control" type="text" id="referencia" placeholder="Punto de referencia (opcional)">
                </div>
                <button id="seleccionar-coordenadas" type="button">Seleccionar En el Mapa</button>
                <input type="text" id="latitud" name="latitud" placeholder="Latitud" readonly>
                <input type="text" id="longitud" name="longitud" placeholder="Longitud" readonly>
                <div class="form-group">
                  <label for="tipo_problema">Tipo de problema:</label>
                  <select id="tipo_problema" class="form-control" required>
                    <option value="">Selecciona un problema</option>
                    <option value="Falta de acceso al agua potable">Falta de acceso al agua potable</option>
                    <option value="Contaminación del agua">Contaminación del agua</option>
                    <option value="Aguas residuales sin tratar">Aguas residuales sin tratar</option>
                    <option value="Drenaje colapsado o insuficiente">Drenaje colapsado o insuficiente</option>
                  </select>
                </div>
                <div class="form-group">
                  <input class="form-control" type="number" id="personas_afectadas" placeholder="Número de personas afectadas" required>
                </div>
                <div class="form-group">
                  <label for="principales_afectados">Principales afectados:</label>
                  <select id="principales_afectados" class="form-control">
                    <option value="Viviendas">Viviendas</option>
                    <option value="Escuelas">Escuelas</option>
                    <option value="Hospitales/Clínicas">Hospitales/Clínicas</option>
                    <option value="Toda la comunidad">Toda la comunidad</option>
                  </select>
                  <small class="form-text text-muted">Mantén presionada la tecla Ctrl o Cmd para seleccionar varios.</small>
                </div>
                <div class="form-group">
                  <label for="duracion_problema">Duración del problema:</label>
                  <input class="form-control" type="date" id="duracion_problema" required>
                </div>
                <div class="form-group">
                  <label for="reportado_autoridad">¿Se ha reportado a las autoridades?</label>
                  <select id="reportado_autoridad" class="form-control" required>
                    <option value="true">Sí</option>
                    <option value="false">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" id="foto_video" placeholder="Ruta de foto o video (opcional)">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="descripcion" cols="30" rows="5" placeholder="Descripción breve del problema"></textarea>
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" id="nombre_contacto" placeholder="Nombre de contacto (opcional)">
                </div>
                <input type="hidden" id="reportId">
                <input type="hidden" id="location">
                <button class="btn btn-primary btn-block text-center" type="submit">
                  Enviar Reporte
                </button>
              </form>
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
                <td>Detalles</td>
                <td></td>
              </tr>
            </thead>
            <tbody id="reportes"></tbody>
          </table>
        </div>
      </div>
    </div>
        

    <!--<label for="Mapa">Selecciona la ubicacion en el mapa:</label>
                <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script> -->
<?php include 'footer.php'; ?>