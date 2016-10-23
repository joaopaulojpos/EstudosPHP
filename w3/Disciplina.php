<?php
require_once "Conexao.php";

$nome = utf8_decode($_POST['Nomedis']);
$professor = utf8_decode($_POST['Professor']);


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname); 
//Checa a Conexao
if (!$conn) {
	die ("Erro ao conectar com o Banco de dados " . mysqli_connect_error());
}

echo cadastrar_disciplina($nome , $professor);


mysqli_close($conn);




// FUNÇÔES 

function validar_disciplina($professor){

	global $conn;	

	$sql = "Select count(*) as total from  disciplina where professor = '$professor' ";
	$result  = mysqli_query($conn , $sql);	

	$valores = mysqli_fetch_assoc($result);	

	$retorno = false;	
	if($valores['total'] > 0 ){
		$retorno =  true;
	}	

	return $retorno ;



}


function cadastrar_disciplina($nome , $professor){

	global $conn;	

	$msg = "";	
	if(! validar_disciplina($professor)){	
		$sql = "INSERT INTO disciplina (nome, professor) VALUES ('$nome', '$professor')";

		if(mysqli_query($conn , $sql)){

				$msg = "Disciplina cadastrada com sucesso";

		}else{

				$msg ="Error" . $sql . "<br/>". mysql_error($conn);
		}
	}else{

		$msg = "Professor Já Existe";
	}

	return $msg;	
}




?>