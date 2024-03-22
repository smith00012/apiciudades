<?php
// Conexión a la base de datos

// Asegúrate de que la imagen se ha enviado en la solicitud POST
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    require_once 'conexion.php';
    // Comprueba si el archivo se ha cargado correctamente
    if (isset($_FILES['img_data']) && $_FILES['img_data']['error'] == 0) {
        // Obtén la imagen de la solicitud POST

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $image = $_FILES['img_data']['tmp_name'];
        $estado = $_POST['estado'];

        // Lee los datos de la imagen
        $imgData = file_get_contents($image);

        // Inserta la imagen en la base de datos
        $sql = sprintf("INSERT INTO lugares (nombre, descripcion, precio, img_data, estado) VALUES ('%s', '%s', '%s', '%s', '%s')",
            $conexion->real_escape_string($nombre),
            $conexion->real_escape_string($descripcion),
            $conexion->real_escape_string($precio),
            $conexion->real_escape_string($imgData),
            $conexion->real_escape_string($estado)
        );
        $result = $conexion->query($sql);

        if ($result) {
            echo "La imagen se ha cargado correctamente.";
        } else {
            echo "Hubo un error al cargar la imagen.";
        }
    } else {
        echo "No se ha enviado ninguna imagen.";
    }
}
?>
