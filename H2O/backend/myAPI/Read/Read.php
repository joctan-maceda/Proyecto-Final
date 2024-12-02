<?php
namespace myAPI\Read;
use myAPI\DataBase\DataBase; 

class Read extends DataBase {
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

    public function single($id) {
        $data = array();
        $sql = "SELECT * FROM reportes WHERE id_reporte = {$id}";
        $result = $this->query($sql);

        if (is_object($result) && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (!is_null($row)) {
                foreach ($row as $key => $value) {
                    $data[$key] = utf8_encode($value);
                }
            }
            $result->free();
        } else {
            die('Error en la consulta: ' . mysqli_error($this->conexion));
        }
        $this->response = $data;
    }

    public function singleByEmail($correo) {
        $data = array();
        $sql = "SELECT * FROM reportes WHERE correo_contacto = '{$correo}'";
        $result = $this->query($sql);

        if (is_object($result) && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (!is_null($row)) {
                foreach ($row as $key => $value) {
                    $data[$key] = utf8_encode($value);
                }
            }
            $result->free();
        } else {
            die('Error en la consulta: ' . mysqli_error($this->conexion));
        }

        $this->response = $data;
    }

    public function list() {
        $data = array();

        // Consulta para obtener todos los reportes
        $sql = "SELECT * FROM reportes";
        $result = $this->query($sql);

        if (is_object($result) && $result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            if (!is_null($rows)) {
                foreach ($rows as $num => $row) {
                    foreach ($row as $key => $value) {
                        $data[$num][$key] = utf8_encode($value);
                    }
                }
            }
            $result->free();
        } else {
            die('Error en la consulta: ' . mysqli_error($this->conexion));
        }

        $this->response = $data;
    }

    public function search($search) {
        $data = array();

        // Consulta para buscar por ID, correo o descripción
        $sql = "SELECT * FROM reportes 
                WHERE id_reporte = '{$search}' 
                OR municipio LIKE '%{$search}%' 
                OR tipo_problema LIKE '%{$search}%'";
        $result = $this->query($sql);

        if (is_object($result) && $result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            if (!is_null($rows)) {
                foreach ($rows as $num => $row) {
                    foreach ($row as $key => $value) {
                        $data[$num][$key] = utf8_encode($value);
                    }
                }
            }
            $result->free();
        } else {
            die('Error en la consulta: ' . mysqli_error($this->conexion));
        }

        $this->response = $data;
    }
}
