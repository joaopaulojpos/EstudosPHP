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

	//Fazendo o meto de SELECT no BD
	public function select($string_query){

     $result = this->query($string_query);
     $data = array();

	   while ($row = mysqli_fetch_array($result)) {
	     foreach ($row as $key => $value) {
	     	$row[key] = utf8_encode($value);
	     }
	     array_push($data, $row);  
	   }
	   unset($result)
	   return $data;

}

	//Fecha a conexão
	public function __destruct(){

		mysqli_close($this->conn);
	}
}

?>