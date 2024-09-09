<?php
$servername = "localhost";
$username = "root";  // El usuario por defecto de XAMPP es 'root'
$password = "";  // Por defecto, no hay contraseña en XAMPP
$dbname = "java_learning_website";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>