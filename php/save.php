<?php 
	include('db.php');

	if (isset($_POST['name'])) {
		$name = $_POST['name'];

		$query = "INSERT INTO data VALUES(null, '$name')";
		$request = mysqli_query($connection, $query);
		
		echo $name . ', add succesting';
	}


 ?>