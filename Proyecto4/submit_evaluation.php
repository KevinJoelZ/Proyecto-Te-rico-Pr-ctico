<?php
// Conexión a la base de datos
include 'db_connection.php'; // Asegúrate de tener este archivo correctamente configurado

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre_usuario = mysqli_real_escape_string($conn, $_POST['nombre_usuario']);
    $question1 = mysqli_real_escape_string($conn, $_POST['question1']);
    $question2 = mysqli_real_escape_string($conn, $_POST['question2']);
    $question3 = mysqli_real_escape_string($conn, $_POST['question3']);
    $question4 = mysqli_real_escape_string($conn, $_POST['question4']);
    $question5 = mysqli_real_escape_string($conn, $_POST['question5']);
    $question6 = mysqli_real_escape_string($conn, $_POST['question6']);
    $question7 = mysqli_real_escape_string($conn, $_POST['question7']);
    $question8 = mysqli_real_escape_string($conn, $_POST['question8']);
    $question9 = mysqli_real_escape_string($conn, $_POST['question9']);
    $question10 = mysqli_real_escape_string($conn, $_POST['question10']);

    $sql = "INSERT INTO evaluaciones (nombre_usuario, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10) 
            VALUES ('$nombre_usuario', '$question1', '$question2', '$question3', '$question4', '$question5', '$question6', '$question7', '$question8', '$question9', '$question10')";

    if ($conn->query($sql) === TRUE) {
        echo "Evaluación guardada correctamente";
    } else {
        echo "Error en la inserción: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Método de solicitud incorrecto";
}
?>