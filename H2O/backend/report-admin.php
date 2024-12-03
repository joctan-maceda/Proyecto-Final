<?php
require_once __DIR__ . '/vendor/autoload.php';
use myAPI\Read\Read;

$product = new Read();

// Verifica que los datos necesarios están presentes
if (isset($_POST['correo'], $_POST['pass'])) {
    // Llama a la función Usuarios con los datos enviados
    $resultado = $product->Usuarios($_POST['correo'], $_POST['pass']);  

    // Devuelve el resultado como JSON
    echo json_encode(['status' => $resultado]);
} else {
    // Manejo de error si no se envían los datos necesarios
    echo json_encode(['status' => 0, 'error' => 'Datos insuficientes']);
}
