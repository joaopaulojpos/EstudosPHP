<?php
require_once "Conexao.php";

$nome = $_POST['Nomedis'];
$professor = $_POST['Professor'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) 
//Checa a Conexao
if (!$conn) {
	die ("Erro ao conectar com o Banco de dados " . mysqli_connect_error());
}

$sql = "INSERT INTO disciplina (nome, professor)
VALUES ($nome, $professor)";

if (mysqli_query($conn, $sql)) {
    echo "Disciplina Cadastrada com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 