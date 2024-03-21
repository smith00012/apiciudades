<?php

define('DB_HOST', 'monorail.proxy.rlwy.net');
define('DB_NAME', 'railway');
define('DB_USER', 'root');
define('DB_PASS', 'YpcgaGmMKONOqpRrNYdtHYArxAWfKEEn');

try {
    $conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conexion->connect_error) {
        throw new Exception('Error de conexión: ' . $conexion->connect_error);
    } else {
        echo "Conexión exitosa a la base de datos.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
