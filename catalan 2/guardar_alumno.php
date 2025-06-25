<?php
// Datos de conexión de MAMP
$servername = "localhost";
$username = "root";
$password = "root"; // Por defecto en MAMP es 'root'
$dbname = "catalan";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre_completo = $_POST['nombre_completo'];
$numero_control = $_POST['numero_control'];
$grupo = $_POST['grupo'];
$asunto = $_POST['asunto'];
$motivo = $_POST['motivo'];
$fecha = $_POST['fecha'];
$hora_entrada = $_POST['hora_entrada'];
$hora_salida = $_POST['hora_salida'];

// Preparar SQL
$sql = "INSERT INTO alumnos (nombre_completo, numero_control, grupo, asunto, motivo, fecha, hora_entrada, hora_salida)
VALUES ('$nombre_completo', '$numero_control', '$grupo', '$asunto', '$motivo', '$fecha', '$hora_entrada', '$hora_salida')";

// Ejecutar y comprobar
if ($conn->query($sql) === TRUE) {
    echo "Alumno registrado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>