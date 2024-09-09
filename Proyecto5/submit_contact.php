<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $message = $_POST['contact-message'];

    $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Mensaje de contacto guardado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>