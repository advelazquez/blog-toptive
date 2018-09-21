<?php

//  declaracion de conexion a la DB, lectura de datos e insercion

class API
{
	private $connect = '';

	function __construct(){

		$this->database_connection();
	}

	function database_connection(){

		$this->connect = new PDO("mysql:host=localhost;dbname=blog", "root", "");

	}

	function fetch_all(){ // traer todo

	$query = "SELECT * FROM publicacion ORDER BY id DESC";
		$statement = $this->connect->prepare($query);
		if( $statement->execute() ){
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){

				$data[] = $row;
			}
			return $data;
		}

	}

	function insert(){ // insercion

		if( isset($_POST["titulo"]) && isset($_POST["descripcion"]) ){

			$form_data = array(
				':titulo'		=>	$_POST["titulo"],
				':descripcion'		=>	$_POST["descripcion"]

			);

			$query = "INSERT INTO publicacion	(titulo, descripcion) VALUES (:titulo, :descripcion)";
			$statement = $this->connect->prepare($query);
			if($statement->execute($form_data)){

				$data[] = array(
					'success'	=>	'1'
				);

			}else{
				$data[] = array(
					'success'	=>	'0'
				);
			}

		}else{
			$data[] = array(
				'success'	=>	'0'
			);
		}

		return $data;
	}

}

?>
