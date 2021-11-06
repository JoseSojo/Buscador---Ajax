<?php 
	include('db.php');


	$search = $_POST['search'];

	if (!empty($search)) {

		$query = "SELECT * FROM data WHERE name LIKE '$search%'";
		$request = mysqli_query($connection, $query);

		if (!$request) {
			die('No se obtienen resultados');
		}

		$json = array();
		while ($row = mysqli_fetch_array($request)) {
			$json[] = array(
				'id' => $row['id'],
				'name' => $row['name'],
			);
		}

		$jsonstring = json_encode($json);
		echo $jsonstring;
	}


 ?>