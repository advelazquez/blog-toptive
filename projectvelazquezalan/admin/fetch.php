<?php

	// devolucion de datos en formato json para lectura en index.php

	// url local $api_url = "http://localhost/projects/prueba/apirest/api/test_api.php?action=fetch_all";

	$api_url = "http://localhost/projectvelazquezalan/api/test_api.php?action=fetch_all";

	$client = curl_init($api_url);

	curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($client);

	$result = json_decode($response);

	$output = '';

	if(count($result) > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<tr>
				<td>'.$row->titulo.'</td>
				<td>'.$row->descripcion.'</td>
			</tr>
			';
		}
	}
	else
	{
		$output .= '
		<tr>
			<td>No hay datos en la BD</td>
		</tr>
		';
	}

	echo $output;

?>
