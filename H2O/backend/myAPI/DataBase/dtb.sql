/*
CREATE TABLE reportes(
    id_reporte INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único autoincrementable
    correo_contacto VARCHAR(100) NOT NULL, -- Correo electrónico del contacto
    municipio VARCHAR(100) NOT NULL, -- Municipio del reporte
    colonia VARCHAR(100) NOT NULL, -- Colonia o barrio
    referencia VARCHAR(255), -- Punto de referencia o dirección específica (opcional)
    tipo_problema VARCHAR(255) NOT NULL, -- Tipo de problema reportado
    personas_afectadas INT, -- Número aproximado de personas afectadas
    principales_afectados VARCHAR(255), -- Principales afectados (por ejemplo: viviendas, escuelas)
    duracion_problema DATE, -- Fecha desde la que ocurre el problema
    reportado_autoridad BOOLEAN, -- Si se reportó a las autoridades (TRUE/FALSE)
    foto_video VARCHAR(255), -- Ruta o enlace del archivo subido
    descripcion VARCHAR(500), -- Descripción breve del problema
    nombre_contacto VARCHAR(100), -- Nombre del contacto (opcional)
    fecha_reporte TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Fecha y hora del reporte (valor por defecto: actual)
);
*/