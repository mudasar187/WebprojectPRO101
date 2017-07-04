<?php 
	
	include '../connection/config.php'; 
	/*Assign the values to variables */
	extract($_POST);
	/* Insert query to add event */
	$sql = "INSERT INTO events (user_id,name,location,date,time,description,created,updated) VALUES ('".$_SESSION['user_id']."', '".$name."', '".$location."','".$date."','".$time."','".$description."',NOW(),NOW())";

	if ($conn->query($sql) === TRUE) {
		/*redirect to home page */
	    header('Location: ../index.php');
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>