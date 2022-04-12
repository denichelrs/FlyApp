<?php 

	db("localhost", "root", "", "db_login");

	function db($server, $username, $password, $db_name){
	    
	    $conn = mysqli_connect($server, $username, $password, $db_name);

	    if (!$conn){
	        die("La conexión ha fallado: " . mysqli_connect_error());
	    }

	}

	function save(){
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	    $email = $_POST['email'];
	    
	    $query = "INSERT INTO users(password, email) VALUES ('$password','$email')";
	    
	    if (!empty($password) && !empty($email)) {
	        $result = mysqli_query($conn, $query);
	    }
	    
	    else {
	    	if (!$result){
	        	die('Query failed,');
	    	}
	    }

	    header('Location: ../../');
	}

?>