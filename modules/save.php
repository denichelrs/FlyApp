<?php 

	require_once 'db.php';

	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    
    $query = "INSERT INTO users(password, email) VALUES ('$password','$email')";
    
    if (!empty($password) && !empty($email)) {
        $result = mysqli_query($conn, $query);
    }
    
	if (!$result){
    	die('Query failed,');
	}

    header('Location: ../');


 ?>
 