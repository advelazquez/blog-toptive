<?php

 //  dependiendo la lectura de la URL sera la accion

	include('api.php');

	$api = new API();

	if($_GET["action"] == 'fetch_all'){

		$data = $api->fetch_all();
	}

	if($_GET["action"] == 'insert'){

		$data = $api->insert();
	}

	echo json_encode($data);

?>
