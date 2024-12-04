<body data-pagina="Reporte">    
<?php include 'header.php'; ?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 180vh; padding:8vh;">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-25 col-lg-19">
            <div class="card shadow-sm">
                <div class="card-body">
                    <!-- FORMULARIO PARA REPORTAR PROBLEMAS DE SANEAMIENTO -->
                    <form id="saneamiento-form">
                        <h4 class="text-center mb-4">Formulario de Reporte</h4>
                        <div class="form-group mb-3">
                            <input class="form-control" type="email" id="correo_contacto" placeholder="Correo de contacto" required>
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" id="municipio" placeholder="Municipio" required>
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" id="colonia" placeholder="Colonia o barrio" required>
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" id="referencia" placeholder="Punto de referencia (opcional)">
                        </div>
                        <button id="seleccionar-coordenadas" type="button" class="btn btn-outline-secondary mb-3 w-100">Seleccionar En el Mapa</button>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" id="latitud" name="latitud" placeholder="Latitud" class="form-control" readonly>
                            </div>
                            <div class="col">
                                <input type="text" id="longitud" name="longitud" placeholder="Longitud" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tipo_problema">Tipo de problema:</label>
                            <select id="tipo_problema" class="form-control" required>
                                <option value="">Selecciona un problema</option>
                                <option value="Falta de acceso al agua potable">Falta de acceso al agua potable</option>
                                <option value="Contaminación del agua">Contaminación del agua</option>
                                <option value="Aguas residuales sin tratar">Aguas residuales sin tratar</option>
                                <option value="Drenaje colapsado o insuficiente">Drenaje colapsado o insuficiente</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" type="number" id="personas_afectadas" placeholder="Número de personas afectadas" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="principales_afectados">Principales afectados:</label>
                            <select id="principales_afectados" class="form-control">
                                <option value="Viviendas">Viviendas</option>
                                <option value="Escuelas">Escuelas</option>
                                <option value="Hospitales/Clínicas">Hospitales/Clínicas</option>
                                <option value="Toda la comunidad">Toda la comunidad</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="duracion_problema">Duración del problema:</label>
                            <input class="form-control" type="date" id="duracion_problema" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="reportado_autoridad">¿Se ha reportado a las autoridades?</label>
                            <select id="reportado_autoridad" class="form-control" required>
                                <option value="true">Sí</option>
                                <option value="false">No</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" id="foto_video" placeholder="Ruta de foto o video (opcional)">
                        </div>
                        <div class="form-group mb-3">
                            <textarea class="form-control" id="descripcion" cols="30" rows="4" placeholder="Descripción breve del problema"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" type="text" id="nombre_contacto" placeholder="Nombre de contacto (opcional)">
                        </div>
                        <input type="hidden" id="reportId">
                        <input type="hidden" id="location">
                        <button class="btn btn-primary btn-block w-100" type="submit">
                            Enviar Reporte
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
