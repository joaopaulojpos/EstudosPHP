<?php
require_once"Conexao.php";

//Cria a conexao

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Checa a Conexao
if(!$conn){
	die("Conexao Falhou " . mysqli_connect_error());
}

$sql = "SELECT nome, professor FROM disciplina";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result))
	{
		echo "Nome da Disciplina: " . $row["nome"]. " - Nome do Professor: " . $row["professor"] . "<br>";
	}
} else{
	echo "Nenhuma Disciplina Cadastrada";
}

mysqli_close($conn);

?>