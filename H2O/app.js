

$(document).ready(function(){
    let edit = false;
    let admin = false;
    
    $('#resultados-reporte').hide();

    // Identificar página actual
    const paginaActual = $('body').data('pagina'); // Usa un atributo 'data-pagina' en tu HTML

    if (paginaActual === 'reportes') {
        listarReportes();
    }
    if (paginaActual === 'Blog') {
        listarReportes_blog();
    } 
    if (paginaActual === 'Reporte') {
        listarReportes();
    } 

    if (paginaActual === 'Administrador' && admin === false){
        $('#inicio').hide();
    }else{
        $('#inicio').show();
        $('#login').hide();
    }


    

    function listarReportes() {
        $.ajax({
            url: './backend/report-list.php', // URL del backend que devuelve la lista de reportes
            type: 'GET',
            success: function(response) {
                // Convertir la respuesta en un objeto JSON
                const reportes = JSON.parse(response);
    
                // Verificar si el objeto JSON tiene datos
                if (Object.keys(reportes).length > 0) {
                    // Crear una plantilla para las filas
                    let template = '';
    
                    reportes.forEach(reporte => {
                        // Crear una lista con la descripción del reporte
                        let detalles = '';
                        detalles += `<li>Municipio: ${reporte.municipio}</li>`;
                        detalles += `<li>Colonia: ${reporte.colonia}</li>`;
                        detalles += `<li>Referencia: ${reporte.referencia || 'No especificada'}</li>`;
                        detalles += `<li>Tipo de problema: ${reporte.tipo_problema}</li>`;
                        detalles += `<li>Personas afectadas: ${reporte.personas_afectadas}</li>`;
                        detalles += `<li>Principales afectados: ${reporte.principales_afectados}</li>`;
                        detalles += `<li>Duración del problema: ${reporte.duracion_problema}</li>`;
                        detalles += `<li>Reportado a la autoridad: ${reporte.reportado_autoridad ? 'Sí' : 'No'}</li>`;
                        detalles += `<li>Descripción: ${reporte.descripcion || 'Sin descripción'}</li>`;
                        detalles += `<li>Contacto: ${reporte.nombre_contacto || 'Anónimo'}</li>`;
    
                        template += `
                            <tr reportId="${reporte.id_reporte}">
                                <td> <a href="#" class="report-item">${reporte.id_reporte}</a> </td>
                                <td>${reporte.correo_contacto}</td>
                                <td><ul>${detalles}</ul></td>
                                <td>
                                    <button class="report-delete btn btn-danger">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        `;
                    });
    
                    // Insertar la plantilla en el elemento con ID "reportes"
                    $('#reportes').html(template);
                }else{
                    console.log("no hay datos");
                }
            }
        });
    }

    function listarReportes_blog() {
        $.ajax({
            url: './backend/report-list.php', // URL del backend que devuelve la lista de reportes
            type: 'GET',
            success: function(response) {
                // Convertir la respuesta en un objeto JSON
                const reportes = JSON.parse(response);
    
                // Verificar si el objeto JSON tiene datos
                if (Object.keys(reportes).length > 0) {
                    // Crear una plantilla para las filas
                    let template = '';
    
                    reportes.forEach(reporte => {
                        // Crear una lista con la descripción del reporte
    
                        template += `
                            <tr reportId="${reporte.id_reporte}">
                                <td> <a href="#" class="report-item">${reporte.id_reporte}</a> </td>
                                <td>${reporte.tipo_problema}</td>
                                <td><a href="${reporte.link}" class="report-item">${reporte.link}</a></td>
                            </tr>
                        `;
                    });
    
                    // Insertar la plantilla en el elemento con ID "reportes"
                    $('#reportes').html(template);
                }else{
                    console.log("no hay datos");
                }
            }
        });
    }
    

    $('#search').keyup(function () {
        if ($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: './backend/report-search.php?search='+$('#search').val(),
                data: { search },
                type: 'GET',
                success: function (response) {
                    if (!response.error) {
                        // SE OBTIENE EL OBJETO DE DATOS A PARTIR DE UN STRING JSON
                        console.log(response);
                        const reportes = JSON.parse(response);
    
                        // SE VERIFICA SI EL OBJETO JSON TIENE DATOS
                        if (Object.keys(reportes).length > 0) {
                            // SE CREA UNA PLANTILLA PARA CREAR LAS FILAS A INSERTAR EN EL DOCUMENTO HTML
                            let template = '';
                            let template_bar = '';
    
                            reportes.forEach(reporte => {
                                // Crear una lista con la descripción del reporte
                                let detalles = '';
                                detalles += `<li>Municipio: ${reporte.municipio}</li>`;
                                detalles += `<li>Colonia: ${reporte.colonia}</li>`;
                                detalles += `<li>Referencia: ${reporte.referencia || 'No especificada'}</li>`;
                                detalles += `<li>Tipo de problema: ${reporte.tipo_problema}</li>`;
                                detalles += `<li>Personas afectadas: ${reporte.personas_afectadas}</li>`;
                                detalles += `<li>Principales afectados: ${reporte.principales_afectados}</li>`;
                                detalles += `<li>Duración del problema: ${reporte.duracion_problema}</li>`;
                                detalles += `<li>Reportado a la autoridad: ${reporte.reportado_autoridad ? 'Sí' : 'No'}</li>`;
                                detalles += `<li>Descripción: ${reporte.descripcion || 'Sin descripción'}</li>`;
                                detalles += `<li>Contacto: ${reporte.nombre_contacto || 'Anónimo'}</li>`;
            
                                template += `
                                    <tr reportId="${reporte.id_reporte}">
                                        <td> <a href="#" class="report-item">${reporte.id_reporte}</a> </td>
                                        <td>${reporte.correo_contacto}</td>
                                        <td><ul>${detalles}</ul></td>
                                        <td>
                                            <button class="report-delete btn btn-danger">
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                `;

                                template_bar += `
                                <li>${reporte.tipo_problema} en ${reporte.municipio}, ID: ${reporte.id_reporte}</li>
                            `;
                            });
                               
    
                            // SE HACE VISIBLE LA BARRA DE ESTADO
                            $('#resultados-reporte').show();
    
                            // SE INSERTA LA PLANTILLA PARA LA BARRA DE ESTADO
                            $('#container').html(template_bar);
    
                            // SE INSERTA LA PLANTILLA EN EL ELEMENTO CON ID "productos"
                            $('#reportes').html(template);
                        }
                    }
                }
            });
        } else {
            $('#resultados-reporte').hide();
        }
    });
    


    $('#saneamiento-form').submit(e => {
        e.preventDefault();
    
        let link = `https://www.google.com/maps?q=${$('#latitud').val()},${$('#longitud').val()}`;


        console.log(link);

        let postData = {
            id_reporte: $('#reportId').val(),
            correo_contacto: $('#correo_contacto').val(),
            municipio: $('#municipio').val(),
            colonia: $('#colonia').val(),
            referencia: $('#referencia').val(),
            tipo_problema: $('#tipo_problema').val(),
            personas_afectadas: $('#personas_afectadas').val(),
            principales_afectados: $('#principales_afectados').val(),
            duracion_problema: $('#duracion_problema').val(),
            reportado_autoridad: $('#reportado_autoridad').val(),
            foto_video: $('#foto_video').val(),
            descripcion: $('#descripcion').val(),
            nombre_contacto: $('#nombre_contacto').val(),
            link: link
        };
    
        /*
        if (!validarFormulario(postData)) {
            return;
        }*/
        
    
        // Determina la URL de destino dependiendo de si es una edición o una nueva inserción
        const url = edit === false ? './backend/report-add.php' : './backend/report-edit.php';
    
        console.log(postData);
    
        // Envia los datos al backend con jQuery AJAX
        $.post(url, postData, (response) => {
            console.log(response);
    
            // SE OBTIENE EL OBJETO DE DATOS A PARTIR DE UN STRING JSON
            let respuesta = JSON.parse(response);
            console.log(respuesta);
            // SE CREA UNA PLANTILLA PARA CREAR INFORMACIÓN DE LA BARRA DE ESTADO
            let template_bar = '';
            template_bar += `
                <li style="list-style: none;">status: ${respuesta.status}</li>
                <li style="list-style: none;">message: ${respuesta.message}</li>
            `;
    
            // SE REINICIA EL FORMULARIO
            $('#correo_contacto').val('');
            $('#municipio').val('');
            $('#colonia').val('');
            $('#referencia').val('');
            $('#tipo_problema').val('');
            $('#foto_video').val('');
            $('#descripcion').val('');
            $('#nombre_contacto').val('');
    
            // SE HACE VISIBLE LA BARRA DE ESTADO
            $('#resultados-reporte').show();
    
            // SE INSERTA LA PLANTILLA PARA LA BARRA DE ESTADO
            $('#container').html(template_bar);
    
            // SE LISTAN TODOS LOS REPORTES
            listarReportes();
    
            // SE REGRESA LA BANDERA DE EDICIÓN A false
            edit = false;
        });
    });

    $('#login').submit(e => {
        e.preventDefault();
    
        // Obtén los valores del formulario
        const correo = $('#correo').val();
        const pass = $('#password').val();
    
        // Enviar datos al backend
        $.post('./backend/report-admin.php', { correo, pass }, (response) => {
            try {
                // Intenta parsear la respuesta JSON
                let respuesta = JSON.parse(response);
                
                if (respuesta.status === 1) {
                    // Usuario encontrado
                    alert('Inicio de sesión exitoso');
                    admin = true;
                    $('#inicio').show();
                    $('#login').hide();
                    listarReportes();
                    // Redirigir o realizar otras acciones
                } else if (respuesta.status === 0) {
                    // Usuario no encontrado
                    alert('Usuario o contraseña incorrectos');
                } else {
                    // Manejar respuestas inesperadas
                    console.error('Respuesta desconocida:', respuesta);
                }
            } catch (error) {
                console.error('Error al procesar la respuesta:', error);
            }
        }).fail(err => {
            console.error('Error en la solicitud AJAX:', err);
        });
    });
    
    

    $(document).on('click', '.report-delete', (e) => {
        if(confirm('¿Realmente deseas eliminar el producto?')) {
            const element = $(this)[0].activeElement.parentElement.parentElement;
            const id = $(element).attr('reportId');
            console.log(id);
            $.post('./backend/report-delete.php', {id}, (response) => {
                console.log(response);
                let respuesta = JSON.parse(response);
                
                // SE CREA UNA PLANTILLA PARA CREAR INFORMACIÓN DE LA BARRA DE ESTADO
                let template_bar = '';
                template_bar += `
                        <li style="list-style: none;">status: ${respuesta.status}</li>
                        <li style="list-style: none;">message: ${respuesta.message}</li>
                    `;
                // SE HACE VISIBLE LA BARRA DE ESTADO
                $('#resultados-reporte').show();
                // SE INSERTA LA PLANTILLA PARA LA BARRA DE ESTADO
                $('#container').html(template_bar);
                listarReportes();
            });
        }
    });

    $(document).on('click', '.report-item', (e) => {
        const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr('reportId');
        $.post('./backend/report-single.php', {id}, (response) => {
            console.log(response);
            // SE CONVIERTE A OBJETO EL JSON OBTENIDO
            let report = JSON.parse(response);
            console.log("hola"+report.id_reporte);
            $('#reportId').val(report.id_reporte);
            $('#correo_contacto').val(report.correo_contacto);
            $('#municipio').val(report.municipio);
            $('#colonia').val(report.colonia);
            $('#referencia').val(report.referencia);
            $('#tipo_problema').val(report.tipo_problema);
            $('#personas_afectadas').val(report.personas_afectadas);
            $('#principales_afectados').val(report.principales_afectados);
            $('#duracion_problema').val(report.duracion_problema);
            $('#reportado_autoridad').val(report.reportado_autoridad);
            $('#foto_video').val(report.foto_video);
            $('#descripcion').val(report.descripcion);
            $('#nombre_contacto').val(report.nombre_contacto);
    
            
            // SE PONE LA BANDERA DE EDICIÓN EN true
            edit = true;
        });
        e.preventDefault();
    });    

    $('#seleccionar-coordenadas').on('click', function () {
        // Abrir una nueva ventana para el mapa
        const mapaVentana = window.open('mapa.html', 'Mapa', 'width=800,height=600');
    
        // Listener para recibir las coordenadas desde la ventana del mapa
        window.addEventListener('message', function (event) {
            if (event.origin !== window.location.origin) return; // Validación del origen
    
            const { lat, lng } = event.data; // Recibir datos enviados desde la ventana del mapa
            $('#latitud').val(lat);
            $('#longitud').val(lng);
    
            console.log(`Coordenadas recibidas: Latitud=${lat}, Longitud=${lng}`);
        }, false);
    });
    

/*
    // Función para validar el formulario completo
    function validarFormulario(data) {
        return validarNombre(data.nombre) &&
            validarModelo(data.modelo) &&
            validarPrecio(data.precio) &&
            validarDetalles(data.detalles) &&
            validarUnidades(data.unidades);
    }

    // Funciones de validación individuales con mensajes en tiempo real

    $('#name').focusout(() => validarNombre($('#name').val()));
    $('#modelo').focusout(() => validarModelo($('#modelo').val()));
    $('#precio').focusout(() => validarPrecio($('#precio').val()));
    $('#detalles').focusout(() => validarDetalles($('#detalles').val()));
    $('#unidades').focusout(() => validarUnidades($('#unidades').val()));

    function mostrarEstado(campo, mensaje, esValido) {
        const estado = $(`#estado-${campo}`);
        estado.text(mensaje);
        estado.css('color', esValido ? 'green' : 'red');
        estado.show();
    }

    function validarNombre(nombre) {
        if (nombre === "" || nombre.length > 100) {
            mostrarEstado('nombre', "El nombre es requerido y debe tener 100 caracteres o menos.", false);
            return false;
        }
        mostrarEstado('nombre', "Nombre válido", true);
        return true;
    }

    function validarModelo(modelo) {
        if (!/^[a-zA-Z0-9]+$/.test(modelo) || modelo.length > 25) {
            mostrarEstado('modelo', "El modelo es requerido, alfanumérico y de máximo 25 caracteres.", false);
            return false;
        }
        mostrarEstado('modelo', "Modelo válido", true);
        return true;
    }

    function validarPrecio(precio) {
        if (isNaN(precio) || precio <= 99.99) {
            mostrarEstado('precio', "El precio debe ser mayor a 99.99.", false);
            return false;
        }
        mostrarEstado('precio', "Precio válido", true);
        return true;
    }

    function validarDetalles(detalles) {
        if (detalles.length > 250) {
            mostrarEstado('detalles', "Los detalles no deben exceder 250 caracteres.", false);
            return false;
        }
        mostrarEstado('detalles', "Detalles válidos", true);
        return true;
    }

    function validarUnidades(unidades) {
        if (isNaN(unidades) || unidades < 0) {
            mostrarEstado('unidades', "Las unidades deben ser mayores o iguales a 0.", false);
            return false;
        }
        mostrarEstado('unidades', "Unidades válidas", true);
        return true;
    }

*/
});