<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prova";

$codigo = $_POST['Cod'];
$hora = $_POST['Hora'];
$vago = $_POST['Vago'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO sala (id_disciplina, horario, estavago)
VALUES ('$codigo', '$hora', '$vago')";

if (mysqli_query($conn, $sql)) {
    echo "Sala cadastrada com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>