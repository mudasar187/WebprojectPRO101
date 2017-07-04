<?php
	include '../connection/config.php'; 
	/* Free all session variable */
	session_destroy();
	/* Closing connection */
	$conn->close();
	/*redirect to login page */
	header('Location: ../login.php');
?>