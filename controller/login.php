<?php 
	
	include '../connection/config.php'; 
	/*Assign the values to variables */
	extract($_POST);
	/* select query to find user from users table */
	$sql = "SELECT * from users where email='".$email."' AND password='".md5($password)."'";
	$result = $conn->query($sql);
	/* counting number of rows from result set */
	if ($result->num_rows > 0) {
		/*fetching data from result set */
		$row = $result->fetch_assoc();
		/*Assign value to session variable for user authentication */
	    $_SESSION['user_id']=$row['id'];
	    $_SESSION['type']=$row['type'];
	    /*redirect to home page */
	   	header('Location: ../index.php');
	} else {
	    echo "Invalid User credentials!";
	    /* Closing connection */
	    $conn->close();
		exit;
	}
	
?>