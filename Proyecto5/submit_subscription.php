<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO suscripciones (nombre, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Suscripción guardada correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>