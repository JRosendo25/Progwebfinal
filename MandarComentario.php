<?php

$servidor = "localhost";
$usuario = "root";
$contra = "";
$db = "biblioteca";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $contra);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Esto activa el manejo de excepciones
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
    exit(); // Terminar el script si la conexión falla
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $fecha = $_POST['date'];
    $asunto = $_POST['subject'];
    $comentario = $_POST['message'];

    $consulta = $conexion->prepare("INSERT INTO contacto (Nombre, Correo, Fecha, Asunto, Comentario) VALUES (:nombre, :correo, :fecha, :asunto, :comentario)");

    $consulta->bindParam(':nombre', $nombre);
    $consulta->bindParam(':correo', $correo);
    $consulta->bindParam(':fecha', $fecha);
    $consulta->bindParam(':asunto', $asunto);
    $consulta->bindParam(':comentario', $comentario);

    try {
        $consulta->execute();
        echo "¡Datos insertados correctamente!";
    } catch (PDOException $e) {
        echo "Error al insertar datos: " . $e->getMessage();
    }
}
?>