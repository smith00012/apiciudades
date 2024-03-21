<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once 'conexion.php';
    header('Content-Type: application/json');

    $sql = "SELECT idLugar, nombre, descripcion, precio, img_data, estado FROM lugares";
    $query = $conexion->query($sql);

    $lugares = array();
    while ($img = $query->fetch_assoc()) {
        $imgData = base64_encode($img['img_data']);

        $lugares[] = array(
            'idLugar' => $img['idLugar'],
            'nombre' => $img['nombre'],
            'descripcion' => $img['descripcion'],
            'precio' => $img['precio'],
            'img_data' => $imgData,
            'estado' => $img['estado']
        );
    }

    $conexion->close();

    echo json_encode($lugares);
}
?>
