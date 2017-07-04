<?php
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campus_web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
?> 