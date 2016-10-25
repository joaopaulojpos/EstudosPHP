<?php
ini_set('default_charset', 'UTF-8');
require_once"Conexao.php";

// Criando a Conexao
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8"); // Acertando a acentuação
// Checando a Conexao
if (!$conn) {
    die("Coexao Falhou: " . mysqli_connect_error());
}

$sql = "SELECT nome, professor FROM disciplina";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Nome da Disciplina: " . $row["nome"]. " - Nome do Professor: " . $row["professor"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>