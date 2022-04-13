<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$db_name = "db_login";

	$conn = mysqli_connect($server, $username, $password, $db_name);

    if (!$conn){
        die("La conexión ha fallado: " . mysqli_connect_error());
    }

?>

