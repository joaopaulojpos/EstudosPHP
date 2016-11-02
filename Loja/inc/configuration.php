<?php

class Sql{

	public $conn;

	//Metodo magico do PHP Construct a primeira classe que vai executar por meio do objeto.
	public function __construct(){
		return $this->conn = mysqli_connect("localhost","root","","hcode_shop");

	}

	public function query($string_query){
		return mysqli_query($this->conn,$string_query);
	}

	//Fecha a conexão
	public function __destruct(){

		mysqli_close($this->conn);
	}
}

?>