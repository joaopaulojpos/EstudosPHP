<?php
require_once"Conexao.php";
$identificador = $_POST['Identificador'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM disciplina WHERE id=$identificador";

if (mysqli_query($conn, $sql)) {
    echo "Disciplina Deletada com Sucesso";
} else {
    echo "Erro ao deletar Disciplina: " . mysqli_error($conn);
}

mysqli_close($conn);
?>