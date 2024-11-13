<?php
// destinos.php
include 'conexion.php';

// Procesar el formulario de agregar destino
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['create'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $ubicacion = $_POST['ubicacion'];
        $precio_estimado = $_POST['precio_estimado'];

        $sql = "INSERT INTO destinos (nombre, descripcion, ubicacion, precio_estimado) VALUES (:nombre, :descripcion, :ubicacion, :precio_estimado)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':ubicacion', $ubicacion);
        $stmt->bindParam(':precio_estimado', $precio_estimado);
        $stmt->execute();
    }
}

// Obtener todos los destinos
$sql = "SELECT * FROM destinos";
$stmt = $pdo->query($sql);
$destinos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
