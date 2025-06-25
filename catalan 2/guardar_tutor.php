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
$nombre_alumno = $_POST['nombre_alumno'];
$procedencia = $_POST['procedencia'];
$area_visita = $_POST['area_visita'];
$persona_visita = $_POST['persona_visita'];
$asunto = $_POST['asunto'];
$identificacion = $_POST['identificacion'];
$hora_entrada = $_POST['hora_entrada'];
$hora_salida = $_POST['hora_salida'];

// Insertar datos en la tabla tutores
$sql = "INSERT INTO tutores 
(nombre_completo, nombre_alumno, procedencia, area_visita, persona_visita, asunto, identificacion, hora_entrada, hora_salida) 
VALUES 
('$nombre_completo', '$nombre_alumno', '$procedencia', '$area_visita', '$persona_visita', '$asunto', '$identificacion', '$hora_entrada', '$hora_salida')";

// Ejecutar y mostrar resultado
if ($conn->query($sql) === TRUE) {
    echo "Tutor registrado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>