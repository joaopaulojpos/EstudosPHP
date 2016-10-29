<?php

//Função sem retorno
function exibir_boas_vindas($nome='indefinido'){ //Con inserção de valore padrão (indefinido).
	echo "Bem vindo ao Curso de PHP, ". $nome;
}

//Função com retorno
function calcular_soma($numero1, $numero2){
	return $numero1 + $numero2;
}
//Chamando as Funções
exibir_boas_vindas(); 
echo calcular_soma(2,2);

?>