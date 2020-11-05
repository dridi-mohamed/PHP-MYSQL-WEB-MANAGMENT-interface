<?php
$servername = "192.168.1.212";
$username = "root";
$password = "root";

// Create connection

$dbnew = $_POST['create'];

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE $dbnew" ;



if ($conn->query($sql) === TRUE) {
  echo "Database  $dbnew created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>







