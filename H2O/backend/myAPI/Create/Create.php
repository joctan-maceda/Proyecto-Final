<?php
namespace myAPI\Create;
use myAPI\DataBase\DataBase; 

class Create extends DataBase {
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

    public function add($reporte) {
        $data = array(
            'status'  => 'error',
            'message' => 'Error'
        );

        // Convierte el objeto recibido a un formato utilizable
        $reporteData = json_decode(json_encode($reporte), false);

        // Construye la consulta SQL
        $sql = "INSERT INTO reportes
                (correo_contacto, municipio, colonia, referencia, tipo_problema, personas_afectadas, principales_afectados, duracion_problema, reportado_autoridad, foto_video, descripcion, nombre_contacto, link) 
                VALUES (
                    '{$reporteData->correo_contacto}', 
                    '{$reporteData->municipio}', 
                    '{$reporteData->colonia}', 
                    '{$reporteData->referencia}', 
                    '{$reporteData->tipo_problema}', 
                    '{$reporteData->personas_afectadas}', 
                    '{$reporteData->principales_afectados}', 
                    '{$reporteData->duracion_problema}', 
                    '{$reporteData->reportado_autoridad}',
                    '{$reporteData->foto_video}',  
                    '{$reporteData->descripcion}',
                    '{$reporteData->nombre_contacto}',
                    '{$reporteData->link}'
                )";
        
        // Ejecuta la consulta y verifica si fue exitosa
        if ($this->query($sql)) {
            $data['status'] = "success";
            $data['message'] = "Reporte agregado exitosamente";
        } else {
            $data['message'] = "ERROR: No se ejecutó $sql. " . mysqli_error($this->conexion);
        }

        // Almacena el resultado de la operación en response
        $this->response = $data;
    }
}
?>
