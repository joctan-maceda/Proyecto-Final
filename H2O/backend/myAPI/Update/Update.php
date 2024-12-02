<?php
namespace myAPI\Update;
use myAPI\DataBase\DataBase; 

class Update extends DataBase {
    public function __construct($dbName = 'h2o', $user = 'root', $password = 'Diosesamor577240323') {
        $this->response = null;
        parent::__construct($user, $password, $dbName);
    }

    protected function query($sql) {
        $result = mysqli_query($this->conexion, $sql);
        if ($result) {
            $this->response = $result;
        } else {
            $this->response = 'Error en la consulta: ' . mysqli_error($this->conexion);
        }
        return $this->response;
    }

    public function edit($report) {
        // Inicializa el arreglo de respuesta
        $data = array(
            'status'  => 'error',
            'message' => 'La consulta falló'
        );
    
        // Convierte el objeto a JSON y luego a un arreglo asociativo
        $reporteData = json_decode(json_encode($report), false);
    
        // Verifica que se haya proporcionado el ID
        if (isset($reporteData->id_reporte)) {
            // Construye la consulta de actualización
            $sql = "UPDATE reportes SET 
                    correo_contacto = '{$reporteData->correo_contacto}', 
                    municipio = '{$reporteData->municipio}', 
                    colonia = '{$reporteData->colonia}', 
                    referencia = '{$reporteData->referencia}', 
                    tipo_problema = '{$reporteData->tipo_problema}', 
                    personas_afectadas = {$reporteData->personas_afectadas}, 
                    principales_afectados = '{$reporteData->principales_afectados}', 
                    duracion_problema = '{$reporteData->duracion_problema}', 
                    reportado_autoridad = {$reporteData->reportado_autoridad}, 
                    foto_video = '{$reporteData->foto_video}', 
                    descripcion = '{$reporteData->descripcion}', 
                    nombre_contacto = '{$reporteData->nombre_contacto}' 
                WHERE id_reporte = {$reporteData->id_reporte};";

    
            // Ejecuta la consulta y actualiza el estado según el resultado
            if ($this->query($sql)) {
                $data['status'] = "success";
                $data['message'] = "Producto actualizado";
            } else {
                $data['message'] = "ERROR: No se ejecutó $sql. " . mysqli_error($this->conexion);
            }
        } else {
            $data['message'] = "ID del producto no proporcionado";
        }
    
        // Almacena el resultado en response para luego poder usar getData()
        $this->response = $data;
    }
    
}
?>