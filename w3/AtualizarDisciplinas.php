<?php
require_once"Conexao.php";
$identificador = $_POST['Identificador'];
$nome = $_POST['Nomedis'];
$professor = $_POST['Professor'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Conexao Falhou: " . mysqli_connect_error());
}

$sql = "UPDATE disciplina SET nome='$nome', professor='$professor' WHERE id='$identificador'";

if (mysqli_query($conn, $sql)) {
    echo "Alteração Feita com Sucesso";
} else {
    echo "Erro ao Alterar a Disciplina: " . mysqli_error($conn);
}

mysqli_close($conn);
?>