<?php 
	
	include '../connection/config.php'; 
	/*Assign the values to variables */
	extract($_POST);
	/* Insert query to add comment */
	$sql = "INSERT INTO comments (user_id,name,comment,page,rating,created) VALUES ('".$_SESSION['user_id']."', '".$name."', '".$comment."','".$page."','".$rating."',NOW())";

	if ($conn->query($sql) === TRUE) {
		/*return 1 */
		echo "1";
	    
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	/* Closing connection */
	$conn->close();
	
?>